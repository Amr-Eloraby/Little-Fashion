@extends('dashboard.master-dashboard')
@section('title', 'Dashboard-Products-Create')
@section('contact')
    <center>
        <div class="col-md-8 col-lg-9">
            <form action="">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="basic-default-name"
                            placeholder="Enter Product Name" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" id="basic-default-name"
                            placeholder="Enter Product Description" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="basic-default-name"
                            placeholder="Image" />
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <select class="form-control border col-sm-10" name="category_id">
                        <option value="">Select Category</option>
                        <option value="1">one</option>
                        <option value="2">two</option>
                        <option value="3">three</option>
                    </select>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">price</label>
                    <div class="col-sm-10">
                        <input type="number" name="price" class="form-control" id="basic-default-name"
                            placeholder="Price" />
                    </div>
                </div>
            </form>
        </div>
    </center>
@endsection
