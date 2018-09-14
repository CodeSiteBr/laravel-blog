<?php

namespace App\Http\Controllers\User;

use App\Models\User\tag;
use App\Models\User\post;
use Illuminate\Http\Request;
use App\Models\User\category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
        return view('user.blog', compact('posts'));
    }



    public function tag(tag $tag){
        $posts = $tag->posts();
        return view('user.blog', compact('posts'));
    }

    public function category(category $category)
    {
        $posts = $category->posts();
        return view('user.blog', compact('posts'));
    }
}
