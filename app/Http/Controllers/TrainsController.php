<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainsController extends Controller
{
    function index()
    {
        $data = Train::all();
        dump($data);
        return view('home', [
            'data' => $data
        ]);
    }
}
