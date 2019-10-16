@extends('layouts.statis')

@section('konten')
        <!--==========================
        Register Section
        ============================-->
        <section id="daftar" class="wow fadeInUp">
                <div class="container">
                    <div class="section-header">
                        <h2>Register ke sistem </h2>
                        <p>silakan register terlebih dahulu untuk membuat laporan</p>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                          @include('register')
                      </div>
                    </div>
                </div>
              </section>
@endsection