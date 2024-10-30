@extends('dashboard.master-dashboard')
@section('title', 'Dashboard-Contacts-Show')
@section('contact')
    <center>
        <div class="col-md-8 col-lg-9">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($contacts) > 0)
                        @foreach ($contacts as $contact)
                            <tr>
                                <th scope="row">{{ $contacts->firstItem() + $loop->index }}</th>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->description }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                {{ $contacts->render('pagination::bootstrap-5') }}
            </table>
        </div>
    </center>
@endsection