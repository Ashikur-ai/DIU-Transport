@extends('Frontend/template')
@section('main')
    <main id="main">
        <section class="ticket-section mt-5">
            <div class="container  p-5 border rounded">
                <div class="row justify-content-center">
                    <div class="section-title">
                        <h2>User Login</h2>
                    </div>
                    <form action="{{ route('customer-login') }}" method="POST" class="ticket-form col-lg-6" id="student-registration">
                        @csrf
                        <div class="mb-3">
                            <label for="starting-point"  class="form-label">Student Id</label>
                            <input type="text" class="form-control" name="student_id" id="starting-point">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Login</button>
                        <p class="text-danger text-small mt-2">Don't have an account? <a href="registration.html" class="text-decoration-underline">Register now</a></p>
                    </form>
                    <!-- <div class="image-container col-md-6">
                        <img src="./assets/img/bus.png" alt="" class="img-fluid">
                    </div> -->
                </div>
            </div>
        </section>
    </main><!-- End #main -->

@endsection
