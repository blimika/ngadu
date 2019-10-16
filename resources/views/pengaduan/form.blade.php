@extends('layouts.app')

@section('content')
<div class="d-flex flex-warp divborder divborder-success my-3">
    <div class="flex-fill">
        <h3 class="text-muted">Membuat Laporan Pengaduan</h3>
    </div>
</div>

<div class="divborder divborder-success my-3">
    <div class="shadow bg-white rounded my-3">
        @if (Session::has('aduan_berhasil_tersimpan'))
        <div class="alert alert-info  alert-dismissible fade show" role="alert">
            {{ Session::get('aduan_berhasil_tersimpan') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if (Session::has('aduan_gagal_tersimpan'))
        <div class="alert alert-danger  alert-dismissible fade show" role="alert">
            {{ Session::get('aduan_gagal_tersimpan') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="card" style="width:20rem">
          <div class="card-header bg-success"><h3>FORM LAPORAN PENGADUAN</h3></div>
          <div class="card-body">
            <form id="createpengaduan" method="post" action="{{ route('pengaduan.create') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="kode_pengaduan">Jenis Pengaduan</label>
                <select  class="form-control" id="kode_pengaduan" placeholder="Pilih Jenis Pengaduan" name="kode_pengaduan">
                  <option value="001">Tindak Pidana Korupsi</option>
                  <option value="002">Pelanggaran Kode Etik PNS</option>
                  <option value="003">Pelayanan Publik</option>
                  <option value="004">Saran dan Pertanyaan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="isi_pengaduan">Isi Pengaduan</label>
                <textarea class="form-control" id="isi_pengaduan" placeholder="Isikan Informasi Pengaduan" name="isi_pengaduan"></textarea>
              </div>
              <div class="form-group">
                  <label for="bukti_pengaduan">Bukti Pengaduan</label>
                  <input type="file" name="bukti_pengaduan" class="form-control-file" id="bukti_pengaduan">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="card-footer bg-success"></div>
        </div>

    </div>
</div>
@endsection

