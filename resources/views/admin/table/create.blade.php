@extends('layouts.app')
@section('page-content')
    <div class="col-md-6 offset-md-3">
        <div class="row">
            <div class="col-12">
                <h1>Add New Table</h1>
            </div>
            <div class="col-12">
                <form method="post" enctype="multipart/form-data" action="{{route('table.store')}}">
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
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" name="image">
                            <p class="help text-danger">{{ $errors->first('image') }}</p>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Add New</button>
                    <button class="btn btn-outline-info" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection


