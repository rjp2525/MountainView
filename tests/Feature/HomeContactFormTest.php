<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Propaganistas\LaravelPhone\PhoneNumber;

class HomeContactFormTest extends TestCase
{
    /**
     * Test that the server side contact form request can successfully validate
     * empty name, phone number and email address fields.
     *
     * @return bool
     */
    public function testItChecksForEmptyNameEmailAndPhone()
    {
        // Test that the contact form can validate phone number and email address
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
     * Test the form submission can validate and fail on invalid phone number format.
     *
     * @return bool
     */
    public function testItFailsValidationForInvalidData()
    {
        // Test Invalid Phone
        $form_data_fail = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '555-555-5555-5555',
            'subject' => 'Looking for a walkway installation quote',
            'type' => 'hardscaping',
            'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ];

        $response = $this->json('POST', '/contact', $form_data_fail);

        $response->assertStatus(422);

        $response->assertJson([
            'errors' => [
                'phone' => ['The phone field contains an invalid number.'],
            ]
        ]);

        $form_data_fail['phone'] = PhoneNumber::make('603-555-5555', 'US');

        $response_success = $this->json('POST', '/contact', $form_data_fail);

        $response_success->assertStatus(200);

        $response_success->assertJson([
            'success' => 'true',
            'message' => 'Your message has been sent successfully. We will be in touch shortly!'
        ]);
    }

    /**
     * Test to ensure the email event fires on form submission.
     *
     * @return bool
     */
    public function testItFiresEmail()
    {
        // TODO
        $this->assertTrue(true);
    }

    /**
     * Test to make sure the contact information is also stored in a database table
     * for review and reponse in the administration panel. (future feature)
     *
     * @return bool
     */
    public function testItGetsAddedToContactUsTableInDatabase()
    {
        // TODO
        $this->assertTrue(true);
    }
}
