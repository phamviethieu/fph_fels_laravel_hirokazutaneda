<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     public function store($request) {
        $this->title = $request->title;
        $this->description = $request->description;
        $this->save();
    }
}