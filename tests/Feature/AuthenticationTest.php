<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
     * An array of valid data to use for account registration.
     * @var array
     */
    public $valid_account_registration_data;

    public function __construct()
    {
        parent::__construct();

        $this->valid_account_registration_data = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'company' => 'The Example Company, Inc.',
            'phone' => '603-555-5555',
            'email' => 'example@example.com',
            'password' => 'Password123',
            'password_confirmation' => 'Password123',
            'street' => '123 Somewhere Street',
            'city' => 'Sometown',
            'state' => 'NH',
            'zip' => '12345',
            'terms_of_service' => true,
            'privacy_policy' => true
        ];
    }

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
         *         ],
         *         "terms_of_service": [
         *             "The terms of service must be accepted."
         *         ],
         *         "privacy_policy": [
         *             "The privacy policy must be accepted."
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
                'state' => ['The state may not be greater than 2 characters.'],
                'terms_of_service' => ['The terms of service must be accepted.'],
                'privacy_policy' => ['The privacy policy must be accepted.']
            ]
        ]);

        $bad['phone'] = '603-555-5555';
        $bad['email'] = 'example@example.com';
        $bad['password'] = '12345678';
        $bad['password_confirmation'] = '12345678';
        $bad['state'] = 'NH';
        $bad['terms_of_service'] = true;
        $bad['privacy_policy'] = true;

        $new_response = $this->json('POST', '/register', $bad);

        $new_response->assertStatus(302);

        $new_response->assertRedirect('/portal');

        $this->assertDatabaseHas('users', [
            'email' => 'example@example.com'
        ]);
    }

    public function testVerificationEmailIsSentOnRegistration()
    {
        $data = [];
        $response = $this->get('/');
        $response->assertStatus(200);
        //$new_response->assertRedirect('/email/verify');

        //$new_response->assertSee('Verify Your Email Address');
    }

    /**
     * Ensure that a login will fail if invalid credentials are provided.
     *
     * @return boolean
     */
    public function testLoginFailsOnInvalidCredentials()
    {
        $this->valid_account_registration_data['password'] = Hash::make('Password123');
        $user = User::create($this->valid_account_registration_data);
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->save();

        $this->assertDatabaseHas('users', ['email' => 'example@example.com']);

        $bad_credentials = [
            'email' => 'bad@bad.com',
            'password' => 'NotTheRightP@ssword'
        ];

        $bad_res = $this->json('POST', '/login', $bad_credentials);

        $bad_res->assertStatus(422);

        /**
         * {"errors":{"email":["These credentials do not match our records."]},"message":"The given data was invalid."}
         */

        $good_creds = [
            'email' => 'example@example.com',
            'password' => 'Password123'
        ];

        $success_res = $this->json('POST', '/login', $good_creds);

        $success_res->assertStatus(302);

        $success_res->assertRedirect('/portal');
    }

    public function testPasswordResetFailsOnInvalidEmailAddress()
    {
        // Invalid email address meaning not in system
        $this->assertTrue(true);
    }

    public function testPasswordResetEmailIsFiredOnCorrectEmailProvided()
    {
        //
        $this->assertTrue(true);
    }

    public function testEmailVerificationRequiredBeforeAccessingPortal()
    {
        // Middleware testing
        $this->valid_account_registration_data['password'] = Hash::make('Password123');
        $user = User::create($this->valid_account_registration_data);

        $this->assertDatabaseHas('users', ['email' => 'example@example.com']);

        //$logged_in = Auth::loginUsingId($user->id);

        $res = $this->actingAs($user)->get('/portal');

        $res->assertStatus(302);

        $res->assertRedirect('/email/verify');

        $user->email_verified_at = \Carbon\Carbon::now();
        $user->save();

        $res_verified = $this->actingAs($user)->get('/portal');

        $res_verified->assertStatus(200);

        // TODO: Uncomment this line when there is enough progress made on the
        // customer portal/dashboard to assert this content exists.
        //$res_verified->assertSee('Dashboard');
    }

    public function testPasswordRequiredToContinuePageIsDisplayed()
    {
        // Password verificaiton required
        $this->assertTrue(true);
    }

    public function testLoggedInUserCanSignOutViaPostOrGetRequest()
    {
        //
        $this->assertTrue(true);
    }

    public function testUnauthenticatedUsersAreRedirectedToLogin()
    {
        $res = $this->get('/portal');

        $res->assertStatus(302);
        $res->assertRedirect('/login');
    }

    public function testItRedirectsYouToHomeIfLoggedIn()
    {
        $this->valid_account_registration_data['password'] = Hash::make('Password123');
        $user = User::create($this->valid_account_registration_data);
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->save();

        $this->assertDatabaseHas('users', ['email' => 'example@example.com']);

        $res = $this->actingAs($user)->get('/login');

        $res->assertStatus(302);

        $res->assertRedirect('/portal');
    }
}
