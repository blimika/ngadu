@extends('layouts.app')

@section('content')
<div class="d-flex flex-warp divborder divborder-success my-3">
    <div class="flex-fill">
        <h3 class="text-muted">Administrator - Update Laporan Pengaduan</h3>
    </div>
</div>

<div class="divborder divborder-success my-3">
    <div class="shadow bg-white rounded my-3">
      <div class="card" style="width:30rem">
        <div class="card-header bg-success"><h3>FORM UPDATE PENGADUAN</h3></div>
        <div class="card-body">
          <form id="admupdatepengaduan" method="post" action="{{route('administrator.admupdate')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="id_pengaduan">ID LAPORAN PENGADUAN</label>
                <input type="text" value="{{$id_pengaduan}}" class="form-control" name="id_pengaduan" id="id_pengaduan" readOnly/>
              </div>
              <div class="form-group">
                <label for="jenis_pengaduan">Jenis Pengaduan</label>
                <input type="text"  class="form-control" name="jenis_pengaduan" id="jenis_pengaduan" readOnly/>
              </div>
              <div class="form-group">
                <label for="isi_pengaduan">Isi Pengaduan</label>
                <textarea class="form-control" id="isi_pengaduan" placeholder="Isikan Informasi Pengaduan" name="isi_pengaduan" readOnly></textarea>
              </div>
              <div class="form-group">
                <label for="downbuktipengaduan">Download Bukti Pengaduan</label>
                <a class="btn btn-success form-control" id="downbuktipengaduan" name="downbuktipengaduan" href="{{route('administrator.downbukti', $id_pengaduan)}}" target="_blank"><i class="fa fa-download" data-toggle="tooltip" title="Download Bukti Pengaduan Ini"></i></a>
              </div>
              <div class="form-group">
                <label for="kode_status_pengaduan">Kode Status Pengaduan</label>
                <select  class="form-control" id="kode_status_pengaduan" placeholder="Pilih Kode Status Pengaduan" name="kode_status_pengaduan">
                  <option value="001">Laporan Pengaduan Tersimpan Dalam Database</option>
                  <option value="002">Jenis Laporan Pengaduan Sesuai dan Dapat Ditlanjutkan Untuk Dibahas Dalam Rapat Pimpinan</option>
                  <option value="003">Jenis Laporan Pengaduan Tidak Sesuai dan Tidak Dapat Dilanjutkan Untuk Dibahas Dalam Rapat Pimpinan</option>
                  <option value="004">Laporan Pengaduan Sedang Dalam Proses Pembahasan Oleh Pimpinan</option>
                  <option value="005">Laporan Pengaduan Diteruskan Ke Bidang/Unit Terkait Untuk Ditindaklanjuti Sesuai Hasil Rapat</option>
                  <option value="006">Laporan Pengaduan Ditutup Dengan Disertai Penjelasan</option>
                  <option value="007">Laporan Pengaduan Selesai Ditindaklanjuti</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="ba_tindak_lanjut">Berita Acara Tindak Lanjut</label>
                  <input type="file" name="ba_tindak_lanjut" class="form-control-file" id="ba_tindak_lanjut">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="card-footer bg-success"></div>
      </div>
    </div>
</div>


<script>
  $(document).ready(function() {
      $('#jenis_pengaduan').val('{{$jenis_pengaduan}}');
      $('#isi_pengaduan').val('{{$pengaduan->isi_pengaduan}}');
  });
</script>
@endsection