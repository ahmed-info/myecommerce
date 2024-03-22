<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalController extends Controller
{
    public function  myapi()
    {
        $response =  Http::get('https://jsonplaceholder.typicode.com/posts')->object();
        return view('myapi', compact('response'));
    }
}
