@extends('Frontend/template')
@section('main')
    <main id="main">
        <section class="ticket-section mt-5">
            <div class="container  p-5 border rounded">
                <div class="row">
                    <div class="section-title">
                        <h2>Purchase ticket Online</h2>
                        <span>23th January,2023</span><br>
                        @php
                            $message = Session::get('message');
                            if($message){
                                echo "$message";
                                Session::put('message', null);
                            }
                        @endphp
                    </div>
                    <form action="{{ url('/booking') }}" method="post" class="ticket-form col-md-6">
                        @csrf
                        <div class="mb-3">
                            <label for="starting-point" class="form-label">From</label>
                            <select class="form-select" name="from" aria-label="Default select example">
                                <option selected>Select Starting point</option>
                                <option value="Mirpur">Mirpur</option>
                                <option value="Campus">Campus</option>
                                <option value="Dhanmondi">Dhanmondi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="end-point" class="form-label">To</label>
                            <select class="form-select" name="to" aria-label="Default select example">
                                <option selected>Select Destination point</option>
                                <option value="Mirpur">Mirpur</option>
                                <option value="Campus">Campus</option>
                                <option value="Dhanmondi">Dhanmondi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="end-point" class="form-label">Departure</label>
                            <select class="form-select" name="departure" aria-label="Default select example">
                                <option selected>Select time</option>
                                <option value="7:30 am">7:30 am</option>
                                <option value="10:30 am">10:30 am</option>
                                <option value="2:30 pm">2:30 pm</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Book Ticket</button>
                    </form>
                    <div class="image-container col-md-6">
                        <img src="{{ asset('/') }}/frontAssets/img/bus.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <main id="main">
        <section class="ticket-section mt-5">
            <div class="container  p-5 border rounded">
                <div class="row">
                    <div class="section-title">
                        <h2>Monthly Subscription</h2>
                        @php
                            $message = Session::get('message');
                            if($message){
                                echo "$message";
                                Session::put('message', null);
                            }
                        @endphp
                    </div>
                    <form action="{{ route('monthly-subscribe') }}" method="post" class="ticket-form col-md-6">
                        @csrf
                        <div class="mb-3">
                            <label for="starting-point" class="form-label">Name</label><br>
                            <input type="text" name="name" placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label for="starting-point" class="form-label">Varsity Email</label><br>
                            <input type="text" name="email" placeholder="Enter your varsity email">
                        </div>

                        <div class="mb-3">
                            <label for="starting-point" class="form-label">Varsity ID</label><br>
                            <input type="text" name="student_id" placeholder="Enter your varsity id">
                        </div>
                        <div class="mb-3">
                            <label for="starting-point" class="form-label">Current Phone Number</label><br>
                            <input type="text" name="phone" placeholder="Enter your number">
                        </div>


                        <button type="submit" class="btn btn-primary mt-3">Monthly Subscribe</button>
                    </form>
                    <div class="image-container col-md-6">
                        <img src="{{ asset('/') }}/frontAssets/img/bus.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
