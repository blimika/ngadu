@extends('layouts.app')

@section('content')
<div class="d-flex flex-warp divborder divborder-success my-3">
    <div class="flex-fill">
        <h3 class="text-muted">Ringkasan Berdasarkan Kode Status Laporan Pengaduan</h3>
    </div>
</div>

<div class="d-flex flex-wrap justify-content-between divborder divborder-success my-3">
    <div class="shadow bg-white rounded my-3">
        <div class="bd-highlight">
            <div class="card"  style="width: 18rem;">
                <div class="card-header bg-success"><h5>LAPORAN PENGADUAN </br> KODE STATUS 001</h5></div>
                <div class="card-body">
                    <span class="badge badge-warning"><h3> {{ $p001->count() }} </h3></span>
                    <p>Laporan Pengaduan Tersimpan Dalam Database</p>
                </div>
                <div class="card-footer bg-success text-muted">
                <a class="btn btn-warning" href="{{ route('pengaduan.detail') }}" target="_blank">
                    <i class="fas fa-location-arrow" data-toggle="tooltip" title="Lihat Daftar Pengaduan Lebih Detail"></i>
                </a>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow bg-white rounded my-3">
        <div class="bd-highlight">
            <div class="card"  style="width: 18rem;">
                <div class="card-header bg-success"><h5>LAPORAN PENGADUAN </br> KODE STATUS 002</h5></div>
                <div class="card-body">
                    <span class="badge badge-warning"><h3> {{ $p002->count() }} </h3></span>
                    <p>Laporan Pengaduan Sesuai dan Dapat Dilanjutkan Untuk Dibahas Dalam Rapat</p>
                </div>
                <div class="card-footer bg-success">
                    <a class="btn btn-warning" href="{{ route('pengaduan.detail') }}" target="_blank">
                        <i class="fas fa-location-arrow" data-toggle="tooltip" title="Lihat Daftar Pengaduan Lebih Detail"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow bg-white rounded my-3">
        <div class="bd-highlight">
            <div class="card"  style="width: 18rem;">
                <div class="card-header bg-success"><h5>LAPORAN PENGADUAN </br> KODE STATUS 003</h5></div>
                <div class="card-body">
                    <span class="badge badge-warning"><h3> {{ $p003->count() }} </h3></span>
                    <p>Laporan Pengaduan Tidak Sesuai dan Tidak Dapat Dilanjutkan Untuk Dibahas Dalam Rapat</p>
                </div>
                <div class="card-footer bg-success">
                    <a class="btn btn-warning" href="{{ route('pengaduan.detail') }}" target="_blank">
                        <i class="fas fa-location-arrow" data-toggle="tooltip" title="Lihat Daftar Pengaduan Lebih Detail"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow bg-white rounded my-3">
        <div class="bd-highlight">
            <div class="card"  style="width: 18rem;">
                <div class="card-header bg-success"><h5>LAPORAN PENGADUAN </br> KODE STATUS 004</h5></div>
                <div class="card-body">
                    <span class="badge badge-warning"><h3> {{ $p004->count() }} </h3></span>
                    <p>Laporan Pengaduan Dalam Proses Pembahasan oleh Pimpinan</p>
                </div>
                <div class="card-footer bg-success">
                    <a class="btn btn-warning" href="{{ route('pengaduan.detail') }}" target="_blank">
                        <i class="fas fa-location-arrow" data-toggle="tooltip" title="Lihat Daftar Pengaduan Lebih Detail"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow bg-white rounded my-3">
        <div class="bd-highlight">
            <div class="card"  style="width: 18rem;">
                <div class="card-header bg-success"><h5>LAPORAN PENGADUAN </br> KODE STATUS 005</h5></div>
                <div class="card-body">
                    <span class="badge badge-warning"><h3> {{ $p005->count() }} </h3></span>
                    <p>Laporan Pengaduan Diteruskan ke Bidang/Unit Terkait Untuk Ditindak Lanjuti Sesuai Hasil Putusan Rapat</p>
                </div>
                <div class="card-footer bg-success">
                    <a class="btn btn-warning" href="{{ route('pengaduan.detail') }}" target="_blank">
                        <i class="fas fa-location-arrow" data-toggle="tooltip" title="Lihat Daftar Pengaduan Lebih Detail"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow bg-white rounded my-3">
        <div class="bd-highlight">
            <div class="card"  style="width: 18rem;">
                <div class="card-header bg-success"><h5>LAPORAN PENGADUAN </br> KODE STATUS 006</h5></div>
                <div class="card-body">
                    <span class="badge badge-warning"><h3> {{ $p006->count() }} </h3></span>
                    <p>Laporan Pengaduan Ditutup Dengan Disertai Keterangan.</p>
                </div>
                <div class="card-footer bg-success">
                    <a class="btn btn-warning" href="{{ route('pengaduan.detail') }}" target="_blank">
                        <i class="fas fa-location-arrow" data-toggle="tooltip" title="Lihat Daftar Pengaduan Lebih Detail"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow bg-white rounded my-3">
        <div class="bd-highlight">
            <div class="card"  style="width: 18rem;">
                <div class="card-header bg-success"><h5>LAPORAN PENGADUAN </br> KODE STATUS 007</h5></div>
                <div class="card-body">
                    <span class="badge badge-warning"><h3> {{ $p007->count() }} </h3></span>
                    <p>Laporan Pengaduan Selesai Ditindak Lanjuti</p>
                </div>
                <div class="card-footer bg-success">
                    <a class="btn btn-warning" href="{{ route('pengaduan.detail') }}" target="_blank">
                        <i class="fas fa-location-arrow" data-toggle="tooltip" title="Lihat Daftar Pengaduan Lebih Detail"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- JSA -->
<div class="d-flex flex-warp divborder divborder-warning my-3">
    <div class="flex-fill">
        <h3 class="text-muted">Ringkasan Berdasarkan Kode Jenis Laporan Pengaduan</h3>
    </div>
</div>

<div class="d-flex flex-wrap justify-content-between divborder divborder-warning my-3">
    <div class="shadow bg-white rounded my-3">
        <div class="bd-highlight">
            <div class="card"  style="width: 18rem;">
                <div class="card-header bg-success"><h5>LAPORAN PENGADUAN </br> KODE JENIS PENGADUAN 001</h5></div>
                <div class="card-body">
                    <span class="badge badge-warning"><h3> {{ $jsa001->count() }} </h3></span>
                    <p>Laporan Pengaduan Tindak Pidana Korupsi</p>
                </div>
                <div class="card-footer bg-success text-muted">
                <a class="btn btn-warning" href="{{ route('pengaduan.detail') }}" target="_blank">
                    <i class="fas fa-location-arrow" data-toggle="tooltip" title="Lihat Daftar Pengaduan Lebih Detail"></i>
                </a>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow bg-white rounded my-3">
        <div class="bd-highlight">
            <div class="card"  style="width: 18rem;">
                <div class="card-header bg-success"><h5>LAPORAN PENGADUAN </br> KODE JENIS PENGADUAN 002</h5></div>
                <div class="card-body">
                    <span class="badge badge-warning"><h3> {{ $jsa002->count() }} </h3></span>
                    <p>Laporan Pengaduan Pelanggaran Kode Etik PNS</p>
                </div>
                <div class="card-footer bg-success">
                    <a class="btn btn-warning" href="{{ route('pengaduan.detail') }}" target="_blank">
                        <i class="fas fa-location-arrow" data-toggle="tooltip" title="Lihat Daftar Pengaduan Lebih Detail"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow bg-white rounded my-3">
        <div class="bd-highlight">
            <div class="card"  style="width: 18rem;">
                <div class="card-header bg-success"><h5>LAPORAN PENGADUAN </br> KODE STATUS PENGADUAN 003</h5></div>
                <div class="card-body">
                    <span class="badge badge-warning"><h3> {{ $jsa003->count() }} </h3></span>
                    <p>Laporan Pengaduan Pelayanan Publik</p>
                </div>
                <div class="card-footer bg-success">
                    <a class="btn btn-warning" href="{{ route('pengaduan.detail') }}" target="_blank">
                        <i class="fas fa-location-arrow" data-toggle="tooltip" title="Lihat Daftar Pengaduan Lebih Detail"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow bg-white rounded my-3">
        <div class="bd-highlight">
            <div class="card"  style="width: 18rem;">
                <div class="card-header bg-success"><h5>LAPORAN PENGADUAN </br> KODE JENIS PENGADUAN 004</h5></div>
                <div class="card-body">
                    <span class="badge badge-warning"><h3> {{ $jsa004->count() }} </h3></span>
                    <p>Laporan Pengaduan Saran dan Pertanyaan</p>
                </div>
                <div class="card-footer bg-success">
                    <a class="btn btn-warning" href="{{ route('pengaduan.detail') }}" target="_blank">
                        <i class="fas fa-location-arrow" data-toggle="tooltip" title="Lihat Daftar Pengaduan Lebih Detail"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
