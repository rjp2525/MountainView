<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomepageContactFormRequest;

class HomepageController extends Controller
{
    /**
     * Display the static homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage');
    }

    /**
     * Display the privacy policy page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        return view('privacy');
    }

    public function contact(HomepageContactFormRequest $request)
    {
        $json = [
            'success' => true,
            'message' => 'Your message has been sent successfully. We will be in touch shortly!'
        ];

        return response()->json($json);
    }
}
