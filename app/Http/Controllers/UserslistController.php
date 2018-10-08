<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Pagination\LengthAwarePaginator;

class UserslistController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(5);
        //I can use also this one.
        //$categories = new LengthAwarePaginator($categories->forPage(1, 10),
                                               //$categories->count(), 10,
                                               //1, ['path' => url('/history')]);
        return view('users.index', compact('users') );
    }
}
