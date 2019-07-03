@extends('layouts.app')
@section('page-content')
    <div class="col-12 col-md-12">
        <form method="post" action="{{ route('table.edit',$table->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" required value="{{ old('name') }}">
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary mb-2">Update</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection
