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
     * phone number and email addresses.
     *
     * @return bool
     */
    public function testItCanValidatePhoneAndEmail()
    {
        // Test that the contact form can validate phone number and email address
        $form_data_pass = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '6038955555',
            'subject' => 'Looking for a walkway installation quote',
            'type' => 'hardscaping',
            'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ];

        $response = $this->json('POST', '/contact', $form_data_pass);

        $response->assertStatus(200);

        $response->assertJson([
            'success' => 'true',
            'message' => 'Your message has been sent successfully. We will be in touch shortly!'
        ]);

        /**
         * Test to see if it catches failed validation on email and phone number.
         */

        $form_data_pass['email'] = '';
        $form_data_pass['phone'] = '';

        $response_fail = $this->json('POST', '/contact', $form_data_pass);

        $response_fail->assertStatus(422);

        $response_fail->assertJson([
            'errors' => [
                'email' => ['The email field is required.'],
                'phone' => ['The phone field is required.']
            ]
        ]);
    }

    /**
     * Test the form submission can validate and fail on invalid phone number format.
     *
     * @return bool
     */
    public function testItCanValidateInvalidPhone()
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
    }
}
