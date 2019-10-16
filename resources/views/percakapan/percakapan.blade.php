@extends('layouts.app')

@section('content')

<div class="d-flex flex-warp divborder divborder-success my-3">
    <div class="flex-fill">
        <h3 class="text-muted">Fasilitas Chatting - (ID Laporan {{$id_pengaduan}})</h3>
    </div>
</div>

<div class="d-flex flex-warp divborder divborder-success">
    <div class="flex-fill">

    @if (Session::has('pesan_berhasil_tersimpan'))
        <div class="alert alert-info  alert-dismissible fade show" role="alert">
            {{ Session::get('pesan_berhasil_tersimpan') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if (Session::has('pesan_gagal_tersimpan'))
        <div class="alert alert-danger  alert-dismissible fade show" role="alert">
            {{ Session::get('pesan_gagal_tersimpan') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @foreach($pesan as $msg)
        <div class="rpesan rpesan-info shadow my-3">
            <p class="text-muted username"><span class="time-right"></span> </p>
            <div class="d-flex flex-row box-body">
                <!-- <img src="#" alt="Avatar" class="h-100"> -->
                <p  class="h-100">
                @if(Auth()->user()->isAdminCreator($msg->id_user))
                <h5><span class="badge badge-warning">{{$msg->nama_user}} (Admin)</span> says: &nbsp;</h5></p>
                @else
                <h5><span class="badge badge-light">{{$msg->nama_user}}</span> says: &nbsp;</h5></p>
                @endif
                
                <p class="komentar">{{$msg->isi_pesan}}</p>
            </div>

            <!-- <div class="d-flex flex-row-reverse box-footer">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button name="#" class="btn btn-success editKomentar"  data-toggle="modal" data-target="#modalUpdateKomentar">Update</button>
                    <button name="#" class="btn btn-warning deleteKomentar">Delete</button>
                </div>
            </div> -->
        </div>
        @endforeach

        <div class="box-footer shadow">
            <a href="{{route('percakapan.tambahpesan', $id_pengaduan)}}" class="btn btn-success"><i class="fa fa-plus"> Tambah Pesan</i></a>
        </div>
    </div>
</div>
@endsection