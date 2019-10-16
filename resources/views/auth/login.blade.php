@extends('layouts.statis')

@section('konten')
    <!--==========================
        Login Section
        ============================-->
        <section id="login" class="wow fadeInUp">
                <div class="container">
                    <div class="section-header">
                        <h2>Login ke sistem </h2>
                        <p>silakan login terlebih dahulu untuk membuat laporan</p>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                          @include('login')
                      </div>
                    </div>
                </div>
        </section>
@endsection