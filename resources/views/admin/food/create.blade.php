@extends('layouts.app')
@section('page-content')
    <div class="col-md-6 offset-md-3">
        <div class="row">
            <div class="col-12">
                <h1>Add New Food</h1>
            </div>
            <div class="col-12">
                <form method="post" enctype="multipart/form-data" action="{{route('food.store')}}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name Food</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Enter name House " required
                                   value="{{ old('name') }}">
                            <p class="help text-danger">{{ $errors->first('name') }}</p>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-file" name="content">
                            <p class="help text-danger">{{ $errors->first('content') }}</p>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" name="image">
                            <p class="help text-danger">{{ $errors->first('image') }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="price" placeholder="Enter Price" required
                                   value="{{ old('price') }}">
                            <p class="help text-danger">{{ $errors->first('price') }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description"  required>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Add New</button>
                    <button class="btn btn-outline-info" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    @endsection


