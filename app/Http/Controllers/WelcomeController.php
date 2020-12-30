<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

class WelcomeController extends Controller
{
    public function index()
    {

        $search = request()->query('search');

        if ($search) {
            $posts = Post::where('title', 'LIKE', "%{$search}%")->simplePaginate(1);
        } else {
            $posts = Post::simplePaginate(1);
        }

        return view('welcome')
        ->with('categories', Category::all())
        ->with('tags', Tag::all())
        ->with('posts', $posts);
    }
}
