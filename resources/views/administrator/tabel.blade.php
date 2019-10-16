@if (Session::has('adm_berhasil_update_aduan'))
<div class="alert alert-info  alert-dismissible fade show" role="alert">
    {{ Session::get('adm_berhasil_update_aduan') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (Session::has('adm_gagal_update_aduan'))
<div class="alert alert-danger  alert-dismissible fade show" role="alert">
    {{ Session::get('adm_gagal_update_aduan') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="table-responsive">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>KODE PENGADUAN</th>
                <th>PESAN PENGADUAN</th>
                <th>BUKTI PENGADUAN</th>
                <th>KODE STATUS PENGADUAN</th>
                <th>BERITA ACARA </th>
                <th>TANGGAL PENGADUAN</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengaduan as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->kode_pengaduan}}</td>
                    <td>{{$data->isi_pengaduan}}</td>
                    <td>
                    <a class="btn btn-success" href="{{route('administrator.downbukti', $data->id)}}" target="_blank"><i class="fa fa-download" data-toggle="tooltip" title="Download Bukti Pengaduan Ini"></i></a>
                    </td>
                    <td>{{$data->status_pengaduan}}</td>
                    <td>
                    @if(empty($data->link_berita_acara_hasil_pengaduan))
                    <span class="badge badge-danger"> <b>Belum Tersedia</b></span>
                    @else
                    <a class="btn btn-success" href="{{ route('administrator.downba', $data->id) }}" target="_blank"><i class="fa fa-download" data-toggle="tooltip" title="Download Berita Acara Tindak Lanjut Ini"></i></a>
                    @endif
                    </td>
                    <td>{{$data->created_at}}</td>
                    <td>
                        <a class="btn btn-success " href="{{ route('administrator.viewadmupdate', $data->id) }}">
                            <i class="fas fa-location-arrow" data-toggle="tooltip" title="Update Laporan Pengaduan"></i>
                        </a>
                        <a class="btn btn-warning" href="{{route('percakapan.lihatpercakapan', $data->id)}}">
                            <i class="fas fa-bullhorn" data-toggle="tooltip" title="Lihat Percakapan"></i>
                        </a>
                        <a class="btn btn-danger" href="{{ route('administrator.hapuspengaduan', $data->id) }}" onclick="return confirm('Data ini akan di hapus?')">
                            <i class="fas fa-eraser" data-toggle="tooltip" title="Hapus Laporan Pengaduan"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex flex-warp divborder divborder-warning my-3">
    <div class="flex-fill">
        <h3 class="text-muted">DAFTAR KODE STATUS PENGADUAN DAN PENJELASANNYA</h3>
    </div>
</div>

<div class="divborder divborder-warning my-3">
    <div class="shadow bg-white rounded my-3">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>KODE STATUS PENGADUAN</th>
                        <th>PENJELASAN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($statuspengaduan as $status)
                        <tr>
                            <td>{{$status->kode_status}}</td>
                            <td>{{$status->penjelasan_status}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="d-flex flex-warp divborder divborder-info my-3">
    <div class="flex-fill">
        <h3 class="text-muted">KODE PENGADUAN DAN PENJELASANNYA</h3>
    </div>
</div>

<div class="divborder divborder-info my-3">
    <div class="shadow bg-white rounded my-3">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>KODE PENGADUAN</th>
                        <th>PENJELASAN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kodepengaduan as $kode)
                        <tr>
                            <td>{{$kode->kode_pengaduan}}</td>
                            <td>{{$kode->penjelasan_kode}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>