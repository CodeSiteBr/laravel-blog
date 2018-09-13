<?php

namespace App\Http\Controllers\User;

use App\Models\User\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        //$posts = post::all();
        $posts = post::where('status',1)->get();
        return view('user.blog', compact('posts'));
    }
}
