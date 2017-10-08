<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    private $baseUrl = 'https://ergast.com/api/';

    public function index()
    {
        return view('home');
    }
}
