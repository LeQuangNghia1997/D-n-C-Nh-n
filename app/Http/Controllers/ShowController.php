<?php

namespace App\Http\Controllers;

use App\Table;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function showMenu(){
        return view('menu');
    }
    public function showBlog(){
        return view('blog');
    }
    public function showSingle(){
        return view('single');
    }
    public function showContact(){
        $tables= Table::all();
        return view('contact',compact('tables'));
    }
    public function showIndex(){
        return view('welcome');
    }
}
