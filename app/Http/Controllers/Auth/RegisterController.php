<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * This is forced by the trait, automatically logs the user in and redirects.
     * They should be seeing an email verification page.
     *
     * @var string
     */
    protected $redirectTo = '/portal';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'phone:US'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'street' => ['required', 'string'],
            'state' => ['required', 'string', 'max:2'],
            'city' => ['required', 'string'],
            'zip' => ['required', 'postal_code:US']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'primary_phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $address = $user->addresses()->create([
            'label' => 'Default Address',
            'given_name' => $data['first_name'],
            'family_name' => $data['last_name'],
            'organization' => (empty($data['company']) ? '' : $data['company']),
            'country_code' => 'US',
            'street' => $data['street'],
            'state' => $data['state'],
            'city' => $data['city'],
            'postal_code' => $data['zip'],
            'is_primary' => true,
            'is_billing' => true,
            'is_shipping' => true,
        ]);

        return User::where('email' , $user->email)->first();
    }
}
