<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
