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
}
