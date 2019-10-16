@if (Session::has('berhasil_update_aduan'))
<div class="alert alert-info  alert-dismissible fade show" role="alert">
    {{ Session::get('berhasil_update_aduan') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (Session::has('gagal_update_aduan'))
<div class="alert alert-danger  alert-dismissible fade show" role="alert">
    {{ Session::get('gagal_update_aduan') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<form id="editpengaduan" method="post" action="{{route('pengaduan.edit')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="id_pengaduan">ID LAPORAN PENGADUAN</label>
      <input type="text" value="{{$id_pengaduan}}" class="form-control" name="id_pengaduan" id="id_pengaduan" readOnly/>
    </div>
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