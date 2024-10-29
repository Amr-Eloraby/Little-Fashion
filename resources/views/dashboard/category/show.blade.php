@extends('dashboard.master-dashboard')
@section('title', 'Dasahboard-Categories-Show')
@section('contact')
    <div >
        <table class="table text-center w-100">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @if (count($categories) > 0) --}}
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                {{-- @endif --}}
            </tbody>
            {{ $categories->render('pagination::bootstrap-5') }}
        </table>
    </div>
@endsection
