<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function create(){
        $posts = Post::all();
        return view('admin.post.create',compact('posts'));
    }
    public function store(Request $request){
        $pots = new Post();
        $pots->title = $request->input('title');
        $pots->content = $request->input('content');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('pots', 'public');
            $pots->image = $path;
        }
        $pots->save();
        Session::flash('success','Tạo mới bài viết thành công');
        return redirect()->route('pots.index');

    }
    public function index()
    {
        $posts = Post::all();
        return view("admin.post.index", compact('posts'));
    }
}

