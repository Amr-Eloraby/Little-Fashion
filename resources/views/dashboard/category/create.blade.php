@extends('dashboard.master-dashboard')
@section('title','Dasahboard-Categories-Create')
@section('contact')
    <center>

        <div class="col-md-8 col-lg-9">
            @if (session('status-category-create'))
                        <div class="alert alert-success">
                            {{ session('status-category-create') }}
                        </div>
                    @endif
            <form action="{{route('dashboard.category.store')}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="basic-default-name"
                            placeholder="Enter Product Name" />
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </center>
@endsection
