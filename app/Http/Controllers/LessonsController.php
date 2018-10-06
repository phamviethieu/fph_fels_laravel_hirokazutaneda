<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class LessonsController extends Controller
{
    public function startLesson($category_id)
    {
        $category = Category::find($category_id);
        return view('categories.show', compact('category') );
    }
}