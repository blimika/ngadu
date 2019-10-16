@extends('layouts.statis')

@section('konten')
<!--==========================
        update admin dashboard Section
        ============================-->
<section id="tiket" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>DASHBOARD ADMIN PENG<span>ADUAN</span></h2>
            <p>FORM UPDATE PENGADUAN</p>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-5">
                @include('administrator.form-update')
            </div>
        </div>
    </div>
</section>
@endsection