<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\CreateNewAddress;
use Auth;
use Illuminate\Support\Collection;

class AddressController extends Controller
{
    /**
     * Retrieve a list of all the current users addresses.
     *
     * @param  Request $request
     *
     * @return \Illuminate\Http\Reponse
     */
    public function index(Request $request)
    {
        // Orders by primary, then billing, then by the date the address was last updated.
        $all = auth()->user()->addresses()->orderBy('is_primary', 'DESC')->orderBy('is_billing', 'DESC')->orderBy('updated_at', 'DESC')->get();

        return $all;
    }

    /**
     * Create a new address.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewAddress $request)
    {
        $data = [
            'label' => $request->input('label'),
            'given_name' => auth()->user()->first_name,
            'family_name' => auth()->user()->last_name,
            'organization' => (empty($request->input('company')) ? '' : $request->input('company')),
            'country_code' => 'US',
            'street' => $request->input('street'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'postal_code' => $request->input('zip'),
            'is_primary' => (empty($request->input('primary')) ? false : true),
            'is_billing' => (empty($request->input('billing')) ? false : true),
            'is_shipping' => true
        ];

        $addresses = auth()->user()->addresses;

        if($data['is_primary'] === true) {
            foreach($addresses as $address) {
                if($address->is_primary) {
                    $address->is_primary = false;
                    $address->save();
                }
            }
        }

        if($data['is_billing'] === true) {
            foreach($addresses as $address) {
                if($address->is_billing) {
                    $address->is_billing = false;
                    $address->save();
                }
            }
        }

        return auth()->user()->addresses()->create($data);
    }
}
