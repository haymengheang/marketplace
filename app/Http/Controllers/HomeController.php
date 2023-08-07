<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class HomeController extends Controller
{
    public function index()
    {
        $posts = post::all();
        return view('home',compact('posts'));
    }
    public function about()
    {
        return view('about');
    }
    public function admin()
    {
        
        return view('admin.app');
    }
}
