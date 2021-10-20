<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserArticlesController extends Controller
{
    public function usersarticles($id)
    {
        //dd($id);
            $writer=User::findOrFail($id);
           // dd($writer->name);

        $articles=$writer->articles;

        return view('admin.articles.user',[

            'articles'=>$articles,
            'writer'=>$writer->name,

        ]);
    }
}
