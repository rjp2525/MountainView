<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display the client portal dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'This is the client portal index page.';
    }
}
