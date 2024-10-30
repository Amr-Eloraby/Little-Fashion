@extends('dashboard.master-dashboard')
@section('title', 'Dashboard-Products-Show')
@section('contact')
    <center>
        <div class="col-md-8 col-lg-9">
            @if (session('status-product-update'))
                <div class="alert alert-success">
                    {{ session('status-product-update') }}
                </div>
            @endif
            @if (session('status-product-delete'))
                <div class="alert alert-success">
                    {{ session('status-product-delete') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">ِAction</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $products->firstItem() + $loop->index }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td><img width="40px" src="{{ asset("storage/products/$product->image") }}"></td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="{{route('dashboard.product.edit', $product->id)}}"
                                        class="btn bt n-sm btn-primary mr-2">
                                        Edit
                                    </a>
                                    <form action="{{route('dashboard.product.destroy',$product->id)}}" class="d-inline"
                                        id="delete-product-form" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="javascript:$('form#delete-product-form').submit();"
                                            class="btn btn-sm btn-danger mr-2">
                                            Delete
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                {{ $products->render('pagination::bootstrap-5') }}
            </table>
        </div>
    </center>
@endsection
