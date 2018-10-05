<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.posts');
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'descrption' => 'required',
        ]);

        $category = new Category;
        $category->store(request());

        return redirect();
    }
}