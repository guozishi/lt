<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        return view('home.article.article');
    }
    public function Complain(){
        return view('home.article.complain');
    }
}
