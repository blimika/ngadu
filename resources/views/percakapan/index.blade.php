@extends('layouts.statis')

@section('konten')
<!--==========================
        percakapan dashboard Section
        ============================-->
<section id="tiket" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>PERCAKAPAN</h2>
            <p>Laporan Pengaduan : {{$pengaduan[0]->isi_pengaduan}} - (ID Laporan {{$pengaduan[0]->id}}) </p>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-5">
                @include('percakapan.chat')
            </div>
        </div>
    </div>
</section>
@endsection