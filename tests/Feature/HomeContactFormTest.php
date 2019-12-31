<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Propaganistas\LaravelPhone\PhoneNumber;
use Illuminate\Support\Facades\Event;
use App\Events\ContactFormSubmit as ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmit as ContactFormMail;
use App\Models\ContactForm as ContactModel;

class HomeContactFormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the server side contact form request can successfully validate
     * empty name, phone number and email address fields.
     *
     * @return bool
     */
    public function testItChecksForEmptyNameEmailAndPhone()
    {
        $form_data = [
            'name' => '',
            'email' => '',
            'phone' => '',
            'subject' => 'Looking for a walkway installation quote',
            'type' => 'hardscaping',
            'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.'
        ];

        $response = $this->json('POST', '/contact', $form_data);

        /**
         * [{
         *     "message": "The given data was invalid.",
         *     "errors": {
         *         "name": [
         *             "The name field is required."
         *         ],
         *         "email": [
         *             "The email field is required."
         *         ],
         *         "phone": [
         *             "The phone field is required."
         *         ]
         *     }
         * }]
         */

        $response->assertStatus(422);

        $response->assertJson([
            'message' => 'The given data was invalid.',
            'errors' => [
                'name' => ['The name field is required.'],
                'email' => ['The email field is required.'],
                'phone' => ['The phone field is required.']
            ]
        ]);

        $form_data['name'] = 'John Doe';
        $form_data['email'] = 'john@example.com';
        $form_data['phone'] = '6035555555'; // Real area code is required or it will fail

        $response = $this->json('POST', '/contact', $form_data);

        /**
         * [{
         *     "success": true,
         *     "message": "Your message has been sent successfully. We will be in touch shortly!"
         * }]
         */

        $response->assertStatus(200);

        $response->assertJson([
            'success' => true,
            'message' => 'Your message has been sent successfully. We will be in touch shortly!'
        ]);
    }

    /**
     * Test the form submission can validate and fail on invalid phone or email.
     *
     * @return bool
     */
    public function testItFailsValidationForInvalidData()
    {
        $form_data = [
            'name' => 'John Doe',
            'email' => 'example@invalid@email.com',
            'phone' => '5555-555-55555',
            'subject' => 'Looking for a walkway installation quote',
            'type' => 'hardscaping',
            'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.'
        ];

        $response = $this->json('POST', '/contact', $form_data);

        /**
         * [{
         *     "message": "The given data was invalid.",
         *     "errors": {
         *         "email": [
         *             "The email must be a valid email address."
         *         ],
         *         "phone": [
         *             "The phone field contains an invalid number."
         *         ]
         *     }
         * }]
         */

        $response->assertStatus(422);

        $response->assertJson([
            'errors' => [
                'email' => ['The email must be a valid email address.'],
                'phone' => ['The phone field contains an invalid number.'],
            ]
        ]);

        $form_data['email'] = 'john@example.com';
        $form_data['phone'] = '603-555-5555';

        $response = $this->json('POST', '/contact', $form_data);

        /**
         * [{
         *     "success": true,
         *     "message": "Your message has been sent successfully. We will be in touch shortly!"
         * }]
         */

        $response->assertStatus(200);

        $response->assertJson([
            'success' => true,
            'message' => 'Your message has been sent successfully. We will be in touch shortly!'
        ]);
    }

    /**
     * Verify that a validated contact request is added to the database successfully.
     *
     * @return bool
     */
    public function testItAddsContactFormSubmissionToDatabase()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '603-555-5555',
            'subject' => 'Looking for a walkway installation quote',
            'type' => 'hardscaping',
            'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.'
        ];

        $this->json('POST', '/contact', $data);

        $this->assertDatabaseHas('contact_form_data', $data);
    }

    /**
     * Ensure an email event is fired after the contact form data is added to the database.
     *
     * @return bool
     */
    public function testItFiresEmailEvent()
    {
        Event::fake();

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '603-555-5555',
            'subject' => 'Looking for a walkway installation quote',
            'type' => 'hardscaping',
            'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.'
        ];

        $this->json('POST', '/contact', $data);

        $result = ContactModel::first();

        Event::assertDispatched(ContactFormSubmitted::class, function ($e) use ($result) {
            return $e->data->id === $result->id;
        });
    }

    /**
     * Test to ensure the email event fires on form submission.
     *
     * @return bool
     */
    public function testItSendsAnEmailAfterEventDispatched()
    {
        Mail::fake();

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '603-555-5555',
            'subject' => 'Looking for a walkway installation quote',
            'type' => 'hardscaping',
            'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.'
        ];

        $this->json('POST', '/contact', $data);

        $result = ContactModel::first();

        Mail::assertSent(ContactFormMail::class, function ($mail) use ($result) {
            $mail->build();
            return $mail->hasFrom($result->email);
        });
    }
}
