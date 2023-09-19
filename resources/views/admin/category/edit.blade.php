@extends('admin.master')
@section('title')
    Edit Category
@endsection

@section('content')
    <!--start content-->
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h5 class="mb-0 text-uppercase"><b>Category Create Form</b></h5>
                        <hr/>
                        <form action="{{ route('categories.update',$category->id) }}" method="post" class="row g-3">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input value="{{$category->category_name}}" name="category_name" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Create Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end content-->
@endsection
