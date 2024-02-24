<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(string $articlesId)
    {
        return 'ID : '.$articlesId;
    }  
}
