<?php

namespace App\Http\Controllers;

use App\Category;
use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('admin.food.create',compact('categories'));
    }
    public function store(Request $request){
        $food = new Food();
        $food->name = $request->input('name');
        $food->price= $request->input('price');
        $food->desc = $request->input('description');
        $food->content = $request->input('content');
        $food->category_id  = $request->input('category_id');
        $food->price = $request->input('price');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('food', 'public');
            $food->image = $path;
    }
        $food->save();
        Session::flash('sussec','Tạo mới món ăn thành công');
        return redirect()->route('food.index');

    }
    public function index()
    {
        $foods = Food::all();
        $categories = Category::all();
        return view("admin.food.index", compact('foods','categories'));
    }
    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();
        Session::flash('success', 'Xóa thành công!');
        return redirect()->route('food.index');
    }
    public function update($id)
    {
        $food = Food::findOrFail($id);
        return view('admin.food.update', compact('food'));
    }

    public function edit(Request $request, $id)
    {
        $food = Food::findOrFail($id);

        $food->name = $request->input('name');
        $food->price= $request->input('price');
        $food->desc = $request->input('description');
        $food->content = $request->input('content');
        $food->category_id  = $request->input('category_id');
        $food->price = $request->input('price');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('food', 'public');
            $food->image = $path;
        }
        $food->save();
        Session::flash('success','Cập Nhập  mới món ăn thành công');
        return redirect()->route('food.index');

    }


}
