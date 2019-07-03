<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        if ($request->slug) {
            $category->slug = $request->slug;
        } else {
            $category->slug = Str::slug($request->name, '-');
        }

        if ($request->desc) {
            $category->desc = $request->desc;
        }

        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('category', 'public');
            $category->image = $path;
        }
        $category->save();
        Session::flash('success', 'Thêm mới thành công!');
        return redirect()->route('categories.index');
    }

    public function index()
    {
        $categories = Category::all();
        return view("admin.categories.index", compact('categories'));
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        Session::flash('success', 'Xóa thành công!');
        return redirect()->route('categories.index');
    }
    public function update($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.update', compact('category'));
    }

    public function edit(Request $request, $id)
    {
        $category = Category::findOrFail($id);


        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->desc = $request->desc;

        if ($request->hasFile('image')) {
            unlink(public_path() . '/storage/' . $category->image);
            $avatar = $request->image;
            $path = $avatar->store('avatar', 'public');
            $category->image = $path;
        }

        $category->save();
        Session::flash('success', 'Cập nhật thành công!');
        return redirect()->route('categories.index');
    }
}
