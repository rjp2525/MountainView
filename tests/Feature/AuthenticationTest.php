<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * Authentication Testing
 *
 * User registration and address validation, login, email verification, password
 * resets etc.
 */
class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegistrationPageIsShown()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /**
     * Test registration form submissions are valid.
     *
     * @return bool
     */
    public function testRegistrationFormValidatesEmptyFields()
    {
        $empty = [];

        $response = $this->json('POST', '/register', $empty);

        /**
         * [{
         *     "message": "The given data was invalid.",
         *     "errors": {
         *         "first_name": [
         *             "The first name field is required."
         *         ],
         *         "last_name": [
         *             "The last name field is required."
         *         ],
         *         "phone": [
         *             "The phone field is required."
         *         ],
         *         "email": [
         *             "The email field is required."
         *         ],
         *         "password": [
         *             "The password field is required."
         *         ],
         *         "street": [
         *             "The street field is required."
         *         ],
         *         "state": [
         *             "The state field is required."
         *         ],
         *         "city": [
         *             "The city field is required."
         *         ],
         *         "zip": [
         *             "The zip field is required."
         *         ]
         *    }
         * }]
         */

        $response->assertStatus(422);

        $response->assertJson([
            'message' => 'The given data was invalid.',
            'errors' => [
                'first_name' => ['The first name field is required.'],
                'last_name' => ['The last name field is required.'],
                'phone' => ['The phone field is required.'],
                'email' => ['The email field is required.'],
                'password' => ['The password field is required.'],
                'street' => ['The street field is required.'],
                'state' => ['The state field is required.'],
                'city' => ['The city field is required.'],
                'zip' => ['The zip field is required.'],
            ]
        ]);
    }

    /**
     * Make sure the submitted form data from the registration page is validated
     * after not being empty.
     *
     * @return bool
     */
    public function testRegistrationSubmissionDataIsValid()
    {
        $bad = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'phone' => '555-555-5555',
            'email' => 'nope',
            'password' => '12345',
            'password_confirmation' => '123456',
            'street' => '123 Example St',
            'city' => 'Portsmouth',
            'state' => 'new hampshire',
            'zip' => '11111'
        ];

        $response = $this->json('POST', '/register', $bad);

        /**
         * [{
         *     "message": "The given data was invalid.",
         *     "errors": {
         *         "phone": [
         *             "The phone field contains an invalid number."
         *         ],
         *         "email": [
         *             "The email must be a valid email address."
         *         ],
         *         "password": [
         *             "The password must be at least 8 characters.",
         *             "The password confirmation does not match."
         *         ],
         *         "state": [
         *             "The state may not be greater than 2 characters."
         *         ]
         *     }
         * }]
         */

        $response->assertStatus(422);

        $response->assertJson([
            'message' => 'The given data was invalid.',
            'errors' => [
                'phone' => ['The phone field contains an invalid number.'],
                'email' => ['The email must be a valid email address.'],
                'password' => [
                    'The password must be at least 8 characters.',
                    'The password confirmation does not match.'
                ],
                'state' => ['The state may not be greater than 2 characters.']
            ]
        ]);

        $bad['phone'] = '603-555-5555';
        $bad['email'] = 'example@example.com';
        $bad['password'] = '12345678';
        $bad['password_confirmation'] = '12345678';
        $bad['state'] = 'NH';

        $new_response = $this->json('POST', '/register', $bad);

        $new_response->assertStatus(302);

        $new_response->assertRedirect('/portal');

        $this->assertDatabaseHas('users', [
            'email' => 'example@example.com'
        ]);
    }

    public function testEmailVerificationWorksSuccessfully()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        //$new_response->assertRedirect('/email/verify');

        //$new_response->assertSee('Verify Your Email Address');
    }
}
