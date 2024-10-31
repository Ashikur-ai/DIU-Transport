@extends('Frontend/template')
@section('main')
    <main id="main">
        <section id="" class=" mt-5">
            <div class="container">
                <div class="section-title">
                    <h2>Today's bus schedule</h2>
                    <span>25th september,2022</span>
                </div>
                <!-- On tables -->
                <!-- <iframe id="schedule" src="" frameborder="0"></iframe> -->
                <embed src="{{ asset('/') }}/frontAssets/exelSheet/schedule.pdf" type="application/pdf" width="100%" height="600px">
                <!-- <div class="schedule">
                    <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTJTRL5K-Okj0zwEOIN86RiLwcOHwaOxEwPVgP9M2Wegs1Hg6BOUyc-fvwfua_SpS-Td-UKkww0d7U_/pubhtml?gid=1514603301&amp;single=false&amp;widget=true&amp;headers=false"></iframe>
                </div> -->

            </div>
        </section>
    </main><!-- End #main -->
@endsection
