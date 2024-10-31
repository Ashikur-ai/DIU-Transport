@extends('Backend/template')
@section('main')
    <section class="main-container">
        <h1 class="text-center">All Ticket Request</h1>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Student ID</th>
                <th scope="col">Mobile</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <th scope="row">{{ $row->name }}</th>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->student_id }}</td>
                    <td>{{ $row->phone }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
