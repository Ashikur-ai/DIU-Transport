@extends('Frontend/template')
@section('main')
    <main id="main">
        <section class="ticket-section mt-5">
            <div class="container  p-5 border rounded">
                <div class="row justify-content-center">
                    <div class="section-title">
                        <h2>User registration</h2>
                    </div>
                    <form action="{{ route('customer-register') }}" method="POST" class="ticket-form col-lg-6" id="student-registration">
                        @csrf
                        <div class="mb-3">
                            <label for="starting-point" class="form-label">Student Id</label>
                            <input type="text" name="student_id" class="form-control" id="starting-point">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                            <label for="cpassword" class="form-label mt-3">Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Register</button>
                        <p class="text-danger text-small mt-2">Already have an account? <a href="login.html" class="text-decoration-underline">Login now</a></p>
                    </form>
                    <!-- <div class="image-container col-md-6">
                        <img src="./assets/img/bus.png" alt="" class="img-fluid">
                    </div> -->
                </div>
            </div>
        </section>
    </main><!-- End #main -->

@endsection
