@extends('dashboard.master-dashboard')
@section('title', 'Dashboard-Products-Create')
@section('contact')
    <center>
        <div class="col-md-8 col-lg-9">
            @if (session('status-product-create'))
                        <div class="alert alert-success">
                            {{ session('status-product-create') }}
                        </div>
                    @endif
            <form action="{{route('dashboard.product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="basic-default-name"
                            placeholder="Enter Product Name" value="{{old('name')}}" />
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" id="basic-default-name"
                            placeholder="Enter Product Description" value="{{old('description')}}" />
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="basic-default-name"
                            placeholder="Image" value="{{old('image')}}" />
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="move col-sm-12">
                <div class="form-group row mb-3">
                    <select class="form-control border col-sm-10" name="category_id">
                        <option value="">Select Category</option>
                        @if (count($categories) > 0)
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>     
                        @endforeach
                        @endif
                    </select>
                    @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">price</label>
                    <div class="col-sm-10">
                        <input type="number" name="price" class="form-control" id="basic-default-name"
                            placeholder="Price" value="{{old('price')}}" />
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </center>
@endsection
