@extends('layouts.statis')

@section('konten')
<!--==========================
        user dashboard Section
        ============================-->
<section id="tiket" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>DASHBOARD ADMIN PENG<span>ADUAN</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-5">
                @include('administrator.tabel')
            </div>
        </div>
    </div>
</section>
@endsection