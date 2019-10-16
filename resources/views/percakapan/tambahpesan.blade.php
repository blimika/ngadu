@extends('layouts.app')

@section('content')

<div class="d-flex flex-warp divborder divborder-default my-3">
    <div class="flex-fill">
        <h3 class="text-muted">Tambah Pesan</h3>
    </div>
</div>

<div class="divborder divborder-default my-3">
    <div class="shadow bg-white rounded my-3">
        <div class="card" style="width:20rem">
          <div class="card-header bg-success"><h3>FORM TAMBAH PESAN</h3></div>
          <div class="card-body">
            <form id="tambahpesan" method="post" action="{{route('percakapan.prosestambahpesan')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="id_pengaduan">ID Laporan Pengaduan</label>
                <input class="form-control" id="id_pengaduan" placeholder="Id Laporan Pengaduan" name="id_pengaduan" value="{{$id_pengaduan}}" readOnly/>
              </div>
              <div class="form-group">
                <label for="isi_pesan">Isi Pesan</label>
                <textarea class="form-control" id="isi_pesan" placeholder="Isikan Pesan Yang Ingin Anda Sampaikan" name="isi_pesan"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="card-footer bg-success"></div>
        </div>

    </div>
</div>

@endsection