<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $letters = Letter::all();
        return view('welcome', ['letters' => $letters]);
    }
}
