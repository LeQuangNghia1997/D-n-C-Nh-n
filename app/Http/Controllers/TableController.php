<?php

namespace App\Http\Controllers;

use App\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TableController extends Controller
{
    public function index(){
        $tables = Table::all();
        return view('admin.table.index',compact('tables'));
    }
    public function destroy($id)
    {
        $table = Table::findOrFail($id);
        $table->delete();
        Session::flash('success', 'Xóa thành công!');
        return redirect()->route('table.index');
    }
    public function create(){
        $tables = Table::all();
        return view('admin.table.create',compact('tables'));
    }
    public function store(Request $request){
        $table = new Table();
        $table->name = $request->input('name');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('table', 'public');
            $table->image = $path;
        }
        $table->save();
        Session::flash('success','Tạo mới món ăn thành công');
        return redirect()->route('table.index');
    }
    public function update($id)
    {
        $table = Table::findOrFail($id);
        return view('admin.table.update', compact('table'));
    }

    public function edit(Request $request, $id)
    {
        $table = Table::findOrFail($id);

        $table->name = $request->input('name');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('food', 'public');
            $table->image = $path;
        }
        $table->save();
        Session::flash('success','Cập Nhập  mới món ăn thành công');
        return redirect()->route('table.index');

    }
    public function showTable(){
        $tables= Table::all();
        return view('contact',compact('tables'));
    }
    public function showReservation(){
        return view('showtable');
    }
    public function updateStatus(){


    }
}
