<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestsController extends Controller
{
    public function index()
    {
        return view('tests.index');
    }
}
