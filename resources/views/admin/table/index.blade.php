@extends('layouts.app')
@section('page-content')
    <h1 class="h3 mb-2 text-gray-800">Foods</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <a href="{{ route('table.create') }}" class="btn btn-primary">Create</a>
            </h6>
        </div>
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('success') }}</div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('error'))
            <div class="alert alert-danger">{{ \Illuminate\Support\Facades\Session::get('error') }}</div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @forelse($tables as $table)
                        <tr>
                            <td>{{ $table->name }}</td>

                            <td>
                                <img src="{{ asset('storage/' . $table->image ) }}" alt="" width="50">
                            </td>
                            <td>
                                <a href="{{ route('table.destroy', $table->id) }}" class="btn btn-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i class="fas fa-trash-alt"></i></a>
                                <a href="{{ route('table.update', $table->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>{{ 'Không có dữ liệu' }}</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection























