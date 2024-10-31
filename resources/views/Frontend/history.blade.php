@extends('Frontend/template')
@section('main')
    <main id="main">
        <section class="ticket-section mt-5">
            <div class="container  p-5 border rounded">

                <main id="main">
                    <section class="main-container">
                        <h1 class="text-center">All Ticket Request</h1>
                        <br>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->from }}</td>
                                    <td>{{ $row->to }}</td>
                                    <td>{{ $row->departure }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </main><!-- End #main -->
            </div>
        </section>
    </main><!-- End #main -->
@endsection



