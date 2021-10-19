<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class index extends Controller
{
    public function index()
    {
        $articles=Article::all();

        return view('index',compact('articles'));
    }
}
