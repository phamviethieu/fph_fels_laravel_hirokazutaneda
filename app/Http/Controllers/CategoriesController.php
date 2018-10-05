<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function show()
    {
        return view('categories.show');
    }

}