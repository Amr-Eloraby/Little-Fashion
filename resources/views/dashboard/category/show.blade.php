@extends('dashboard.master-dashboard')
@section('title', 'Dasahboard-Categories-Show')
@section('contact')
    <center>
        <div class="col-md-8 col-lg-9">
            @if (session('status-category-update'))
                <div class="alert alert-success">
                    {{ session('status-category-update') }}
                </div>
            @endif
            @if (session('status-category-delete'))
                <div class="alert alert-success">
                    {{ session('status-category-delete') }}
                </div>
            @endif
            <table class="table text-center w-100">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($categories) > 0)
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $categories->firstItem() + $loop->index }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('dashboard.category.edit', $category->id) }}"
                                        class="btn bt n-sm btn-primary mr-2">
                                        Edit
                                    </a>
                                    <form action="{{ route('dashboard.category.destroy', $category->id) }}" class="d-inline"
                                        id="delete-form" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="javascript:$('form#delete-form').submit();"
                                            class="btn btn-sm btn-danger mr-2">
                                            Delete
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                {{ $categories->render('pagination::bootstrap-5') }}
            </table>
        </div>
    </center>
@endsection
