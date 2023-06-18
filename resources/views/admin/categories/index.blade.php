@extends('layouts.admin')

@section('content')
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category List</h1>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary float-right">
                        Create
                    </a>
                </h3>     
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Product Count</th>
                                <th scope="col">Image</th>
                                <th scope="col">Parent</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="col">{{ $loop->iteration }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->products_count }}</td>
                                    <td>
                                        @if($category->photo)
                                            <a href="{{ $category->photo->getUrl() }}" target="_blank">
                                                <img src="{{ $category->photo->getUrl() }}" width="50px" height="50px">
                                            </a>
                                        @else
                                            <span class="badge badge-warning">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $category->parent->name ?? 'Null' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form onclick="return confirm('are you sure ?');" action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                                @csrf 
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection