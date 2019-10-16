@include('layouts.app')

<div class="container">
    <div class="d-flex flex-warp divborder divborder-success my-3" style="height:300px">
        <div class="flex-fill">
            <div class="d-flex justify-content-center m-10">
                <a href="https://ntb.bps.go.id" class="mt-5">
                    <img src="{{asset('img/logo-bps.png')}}" width="200" height="200" class="d-inline-block align-top" alt="">
                </a>
                <div class="ml-3 mt-5">
                    <h1>SELAMAT DATANG DI</h1>
                    <h3>WEBSITE LAYANAN PENGADUAN</h3>
                    <h3>BADAN PUSAT STATISTIK</h3>
                    <h5>PROVINSI NUSA TENGGARA BARAT</h5>
                </div>
            </div>
        </div>
    </div>

    <div id="tentang" class="d-flex flex-warp divborder divborder-warning my-3">
        <div class="flex-fill">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Tentang Sistem Pengaduan</h2>
                    <p>Sistem Pengaduan BPS Provinsi NTB adalah aplikasi yang disediakan oleh Badan Pusat Statistik Provinsi Nusa Tenggara Barat bagi Anda yang memiliki informasi dan ingin melaporkan suatu perbuatan berindikasi pelanggaran yang terjadi di lingkungan Badan Pusat Statistik
                        Republik Indonesia. Materi Aduan yang dapat anda sampaikan adalah:</p>
                    <ul>
                        <li>Tindak Pidana Korupsi</li>
                        <li>Pelanggaran Kode Etik PNS</li>
                        <li>Pelayanan Publik </li>
                        <li>Saran dan Pertanyaan</li>
                    </ul>
                    <p>BPS menghargai informasi yang Anda laporkan dan fokus kami adalah kepada materi informasi yang anda sampaikan. Anda tidak perlu khawatir terungkapnya identitas diri anda karena kami akan MERAHASIAKAN IDENTITAS DIRI ANDA sebagai
                        Pelapor (<i>whistleblower</i>).</p>
                </div>
                <div class="col-lg-6">
                    <h3>Unsur Pengaduan</h3>
                    <p>Pengaduan Anda akan mudah ditindaklanjuti apabila memenuhi unsur sebagai berikut:</p>
                    <ul>
                        <li>What: Perbuatan berindikasi pelanggaran yang diketahui</li>
                        <li>Where: Dimana perbuatan tersebut dilakukan</li>
                        <li>When: Kapan perbuatan tersebut dilakukan</li>
                        <li>Who: Siapa saja yang terlibat dalam perbuatan tersebut</li>
                        <li>How: Bagaimana perbuatan tersebut dilakukan (modus, cara, dsb.)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="faq" class="d-flex flex-warp divborder divborder-info my-3">
        <div class="flex-fill">
        <h2>F.A.Q (<i>Frequently Asked Question</i>)</h2>
            <div id="accordion">
                <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                    Apakah aplikasi Whistleblowing System Badan Pusat Statistik (WBS-BPS) ini?
                    </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                    Aplikasi Whistleblowing System (WBS) Badan Pusat Statistik adalah aplikasi 
                    pengelolaan dan tindak lanjut pengaduan serta pelaporan hasil pengelolaan 
                    pengaduan yang disediakan oleh Badan Pusat Statistik. 
                    Aplikasi ini sebagai salah satu sarana bagi pejabat/pegawai 
                    Badan Pusat Statistik sebagai pihak internal dan masyarakat luas pengguna layanan Badan 
                    Pusat Statistik sebagai pihak eksternal untuk melaporkan dugaan 
                    adanya pelanggaran dan/atau ketidakpuasan terhadap pelayanan 
                    yang dilakukan/diberikan oleh pejabat/pegawai Badan Pusat Statistik.
                    </div>
                </div>
                </div>

                <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    Apakah bentuk respon yang diberikan kepada pelapor atas pengaduan yang disampaikan?
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Respon yang diberikan kepada pelapor berupa respon awal 
                    (ucapan terima kasih telah melakukan pengaduan) 
                    dan status/tindak lanjut pengaduan paling akhir 
                    sesuai dengan respon yang telah diberikan oleh 
                    pihak penerima pengaduan. Respon terkait dengan 
                    status/tindak lanjut pengaduan dapat 
                    dilihat dalam history pengaduan aplikasi WBS-BPS.
                    </div>
                </div>
                </div>

                <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                    Berapa lama respon atas pengaduan yang disampaikan diberikan kepada pelapor?
                    </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Sesuai dengan Peraturan Kepala BPS Nomor XX Tahun 2019 
                    jawaban/respon atas pengaduan yang disampaikan wajib 
                    diberikan dalam kurun waktu paling lambat XX (XXXX) hari terhitung sejak pengaduan diterima. 
                    Untuk respon yang disampaikan tertulis melalui surat dapat diberikan 
                    apabila pelapor mencantumkan identitas secara jelas (nama dan alamat koresponden). 
                    Untuk respon dari media pengaduan lainnya akan disampaikan dan diberikan 
                    sesuai identitas pelapor yang dicantumkan dalam media pengaduan tersebut.
                    </div>
                </div>
                </div>

                <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                    Apakah pengaduan yang saya berikan akan selalu mendapatkan respon?
                    </a>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Pengaduan yang anda berikan akan direspon dan tercantum 
                    dalam aplikasi WBS-BPS ini dan akan terupdate secara otomatis 
                    sesuai dengan respon yang telah diberikan oleh pihak penerima pengaduan.
                    Untuk dapat melihat respon yang diberikan, anda harus login terlebih 
                    dahulu dengan username yang telah anda registrasikan di aplikasi 
                    ini dan anda dapat melihat status pengaduan dalam history 
                    pengaduan sesuai dengan nomor id laporan pengaduan yang didapatkan. 
                    Sebagai catatan, pengaduan anda akan lebih mudah ditindaklanjuti 
                    apabila memenuhi unsur pengaduan. Hal Lebih lanjut/lengkap 
                    terkait dengan unsur pengaduan dapat dilihat disini.
                    </div>
                </div>
                </div>

                <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                    Apakah kerahasiaan identitas saya sebagai pengadu/pelapor terjaga?
                    </a>
                </div>
                <div id="collapseSix" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Kerahasiaan identitas anda sebagai pelapor akan terjaga 
                    seperti yang telah disebutkan dalam Peraturan Kepala BPS Nomor XX Tahun 2019. 
                    Namun agar kerahasiaan identitas anda dapat lebih terjaga 
                    sebaiknya anda memperhatikan hal-hal sebagaimana disebutkan disini.
                    </div>
                </div>
                </div>

                <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
                    Apakah setiap melakukan pengaduan harus membuat dan register username baru?
                    </a>
                </div>
                <div id="collapseSeven" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Hal tersebut tidak perlu dilakukan. Satu username dapat melakukan 
                    pengaduan lebih dari satu. Ketika setelah selesai membuat satu pengaduan, 
                    anda dapat membuat pengaduan terkait dengan dugaan pelanggaran dan/atau ketidakpuasan 
                    terhadap pelayanan yang diberikan lainnya dengan memilih Menu “Buat Pengaduan”. 
                    Masing-masing pengaduan akan mendapatkan nomor register yang berbeda.
                    </div>
                </div>
                </div>

                <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    Saya sudah mengirimkan pengaduan namun di kemudian hari saya ingin 
                    merubah/menambahkan data terkait pengaduan yang saya lakukan, 
                    apa yang harus saya lakukan? Apakah harus membuat pengaduan baru?
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Data yang sudah dilaporkan sebelumnya tidak dapat dilakukan 
                    perubahan namun anda bisa menambahkan data lain terkait pengaduan 
                    dengan mengunggah data dalam bentuk seperti dokumen, foto, video, 
                    dan lain sebagainya masing-masing dengan ukuran maksimum 10 MB. 
                    Untuk melakukan hal tersebut di atas tidak perlu membuat pengaduan baru. 
                    Mengunggah data tambahan baru dapat dilakukan dengan login username yang 
                    telah diregistrasikan sebelumnya di aplikasi ini lalu masuk ke halaman pengaduan. 
                    Dalam halaman pengaduan, anda memilih pengaduan yang ingin ditambahkan data 
                    tambahan kemudian memilih (klik kotak kecil “tambah lampiran pengaduan”) 
                    di bagian bawah rincian pengaduan.
                    </div>
                </div>
                </div>

                <!-- <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    Collapsible Group Item #8
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Lorem ipsum..
                    </div>
                </div>
                </div> -->

            </div>
        </div>
    </div>

    <div id="kontak" class="d-flex flex-warp divborder divborder-dark my-3">
        <div class="flex-fill">
            <h2>Kontak Kami </h2>
            <h5>Kontak Kami Untuk Layanan Aduan di</h5>

            <div class="row">
                <div class="col-md-3">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Alamat Surat</h3>
                        <address>BPS Provinsi Nusa Tenggara Barat, Jl. Gn. Rinjani No. 2 Dasan Agung Kota Mataram 83126</address>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Telepon</h3>
                        <p><a href="https://pengaduan.bpsntb.id/">(62-370) 621385</a></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Faks</h3>
                        <p><a href="https://pengaduan.bpsntb.id/"> Faks (62-370) 623801</a></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:pengaduan@bps.go.id">pengaduan@bps.go.id</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>





