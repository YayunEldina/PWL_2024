<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index ()
    {
        return 'Selamat Datang';
    }
    public function about ()
    {
        return '2241720065, Yayun Eldina';
    }
    public function articles(string $articlesId)
    {
        return 'ID : '.$articlesId;
    }  
}
