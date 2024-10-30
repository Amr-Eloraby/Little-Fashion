@extends('dashboard.master-dashboard')
@section('title','Dasahboard-Categories-Edit')
@section('contact')
    <center>
        <div class="col-md-8 col-lg-9">
            <form action="{{route('dashboard.category.update',$category->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="basic-default-name"
                            placeholder="Enter Product Name" value="{{$category->name}}" />
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </center>
@endsection
