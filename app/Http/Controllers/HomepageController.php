<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomepageContactFormRequest;
use App\Models\ContactForm;
use App\Events\ContactFormSubmit as ContactSubmitEvent;

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

    /**
     * Render the services page.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('services');
    }

    /**
     * Render the about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Process the contact form submission.
     *
     * @param  HomepageContactFormRequest $request
     *
     * @return mixed
     */
    public function contact(HomepageContactFormRequest $request)
    {
        $result = ContactForm::create($request->all());

        event(new ContactSubmitEvent($result));

        $json = [
            'success' => true,
            'message' => 'Your message has been sent successfully. We will be in touch shortly!'
        ];

        return response()->json($json);
    }
}
