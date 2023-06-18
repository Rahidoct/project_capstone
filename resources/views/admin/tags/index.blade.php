@extends('layouts.admin')

@section('content')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tag List</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>
                    <a href="{{ route('admin.tags.create') }}" class="btn btn-primary float-right">
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
                                <th scope="col">Tag Count</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <th scope="col">{{ $loop->iteration }}</th>
                                    <td>{{ $tag->name }}</td>
                                    <td>{{ $tag->slug }}</td>
                                    <td>{{ $tag->products_count }}</td>
                                    <td style="max-width: 120px;">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-success btn-icon-split">
                                                    <span class="icon">
                                                        <i class="fa fa-pencil-alt"></i> 
                                                    </span>
                                                    <span class="text">
                                                        Edit
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <form onclick="return confirm('are you sure ?');" action="{{ route('admin.tags.destroy', $tag->id) }}" method="post">
                                                    @csrf 
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-icon-split">
                                                        <span class="icon">
                                                            <i class="fa fa-trash"></i> 
                                                        </span>
                                                        <span class="text">
                                                            Delete
                                                        </span>
                                                    </button>
                                                </form>
                                            </div>
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