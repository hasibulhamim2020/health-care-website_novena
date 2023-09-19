@extends('admin.master')
@section('title')
    Categories
@endsection

@section('content')
    <!--start content-->
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h5 class="mb-0 text-uppercase"><b>Categories Table</b></h5>
            <hr/>
            <div class="card info-table bg-info">
                <div class="card-body">
                    <table class="table mb-0 table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Catagory Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td class="text-uppercase">{{ $category->category_name }}</td>
                            <td>{{ $category->status ==1? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="{{ route('categories.show',$category->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                                @if($category->status == 1)
                                    <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-sm btn-warning">Active</a>
                                @else
                                    <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-sm btn-warning">Active</a>
                                @endif
                                <br>
                                <br>
                                <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this!!')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end content-->
@endsection
