<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pengaduan BPS Provinsi Nusa Tenggara Barat</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('tema/img/bps.ico')}}" rel="icon">
  <link href="{{asset('tema/img/bps.ico')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('tema/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('tema/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/lib/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('tema/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('tema/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="{{route('depan')}}">PENG<span>ADUAN</span></a></h1>
        <!--<a href="#intro" class="scrollto"><img src="{{asset('tema/img/logo.png')}}" alt="" title=""></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">Kontak</a></li>
          @guest
          <li class="buy-tickets"><a href="{{route('daftar')}}">Register</a></li>
          <li class="buy-tickets"><a href="{{route('masuk')}}">Login</a></li>
          @else
          @if (Auth()->user()->isAdmin())
          <li class="buy-tickets"><a href="{{route('dashboard.admin')}}">Admin</a></li>
          @endif
          <li class="buy-tickets"><a href="{{route('dashboard.user')}}">Dashboard</a></li>
          <li class="buy-tickets"><a href="{{url('tiket')}}">Buat Tiket Aduan</a></li>
          <li>
            @if (Route::has('logout'))
            <a href="{{route('logout')}}">Logout</a>
            @endif
          </li>
          @endguest
         </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->

  <section id="intro">
    <div class="intro-container wow fadeIn">
        <p class="mb-4 pb-0">Portal Layanan Pengaduan</p>
      <h1 class="mb-4 pb-0">Whistle-Blowing System<br><span>BPS Provinsi Nusa Tenggara Barat</span></h1>


    </div>
  </section>
  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <h2>Tentang Whistleblowing System</h2>
                  <p>Whistleblowing System BPS Provinsi Nusa Tenggara Barat adalah aplikasi yang disediakan oleh BPS Provinsi Nusa Tenggara Barat bagi Anda yang memiliki informasi dan ingin melaporkan suatu perbuatan berindikasi pelanggaran yang terjadi di lingkungan BPS Provinsi Nusa Tenggara Barat. Materi Aduan yang dapat anda sampaikan adalah:</p>
                  <ul>
                      <li>Tindak Pidana Korupsi</li>
                      <li>Pelanggaran Kode Etik PNS</li>
                      <li>Pelayanan Publik </li>
                      <li>Saran dan Pertanyaan</li>
                  </ul>
                  <p>BPS Provinsi Nusa Tenggara Barat menghargai informasi yang Anda laporkan dan fokus kami adalah kepada materi informasi yang anda sampaikan. Anda tidak perlu khawatir terungkapnya identitas diri anda karena kami akan MERAHASIAKAN IDENTITAS DIRI ANDA sebagai
                      whistleblower.</p>
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
  </section>



            <!--==========================
            F.A.Q Section
            ============================-->
            <section id="faq" class="wow fadeInUp">
              <div class="container">
                  <div class="section-header">
                      <h2>F.A.Q Frequently Ask Question</h2>
                  </div>
                  <div class="row justify-content-center">
                      <div class="col-lg-9">
                          <ul id="faq-list">
                              <li>
                                  <a data-toggle="collapse" class="collapsed" href="#faq1">Apakah aplikasi Whistleblowing System BPS Provinsi Nusa Tenggara Barat (WBS-BPSNTB) ini?<i class="fa fa-minus-circle"></i></a>
                                  <div id="faq1" class="collapse" data-parent="#faq-list">
                                      <p>
                                          Aplikasi Whistleblowing System (WBS) BPS Provinsi Nusa Tenggara Barat adalah aplikasi pengelolaan dan tindak lanjut pengaduan serta pelaporan hasil pengelolaan pengaduan yang disediakan oleh BPS Provinsi Nusa Tenggara Barat. Aplikasi ini sebagai salah satu sarana bagi pejabat/pegawai
                                          BPS Provinsi Nusa Tenggara Barat sebagai pihak internal dan masyarakat luas pengguna layanan BPS Provinsi Nusa Tenggara Barat sebagai pihak eksternal untuk melaporkan dugaan adanya pelanggaran dan/atau ketidakpuasan terhadap pelayanan
                                          yang dilakukan/diberikan oleh pejabat/pegawai BPS Provinsi Nusa Tenggara Barat.
                                      </p>
                                  </div>
                              </li>
                              <li>
                                  <a data-toggle="collapse" href="#faq2" class="collapsed">Apakah nomor register itu dan apa yang harus saya lakukan terhadap nomor register ini? <i class="fa fa-minus-circle"></i></a>
                                  <div id="faq2" class="collapse" data-parent="#faq-list">
                                      <p>
                                          Nomor register adalah nomor yang digunakan sebagai identitas pelapor dalam melakukan komunikasi tidak langsung antara pihak pelapor dengan penerima laporan yang didapatkan setelah pelapor menyampaikan laporan pelanggaran melalui aplikasi WBS-BPS ini.
                                          Simpan dengan baik nomor register yang Anda peroleh, jangan sampai tercecer dan diketahui oleh pihak yang tidak berhak karena pelayanan untuk mengetahui status tindak lanjut pengaduan yang disampaikan hanya dapat
                                          diberikan melalui nomor register tersebut.
                                      </p>
                                  </div>
                              </li>
                              <li>
                                  <a data-toggle="collapse" href="#faq3" class="collapsed">Apakah bentuk respon yang diberikan kepada pelapor atas pengaduan yang disampaikan? <i class="fa fa-minus-circle"></i></a>
                                  <div id="faq3" class="collapse" data-parent="#faq-list">
                                      <p>
                                          Respon yang diberikan kepada pelapor berupa respon awal (ucapan terima kasih telah melakukan pengaduan) dan status/tindak lanjut pengaduan paling akhir sesuai dengan respon yang telah diberikan oleh pihak penerima pengaduan. Respon terkait dengan status/tindak
                                          lanjut pengaduan dapat dilihat dalam history pengaduan aplikasi WBS-BPS.
                                      </p>
                                  </div>
                              </li>
                              <li>
                                  <a data-toggle="collapse" href="#faq4" class="collapsed">Berapa lama respon atas pengaduan yang disampaikan diberikan kepada pelapor? <i class="fa fa-minus-circle"></i></a>
                                  <div id="faq4" class="collapse" data-parent="#faq-list">
                                      <p>
                                          Sesuai dengan Peraturan Kepala BPS Nomor XX Tahun 2019 jawaban/respon atas pengaduan yang disampaikan wajib diberikan dalam kurun waktu paling lambat XX (XXXX) hari terhitung sejak pengaduan diterima. Untuk respon yang disampaikan tertulis melalui surat
                                          dapat diberikan apabila pelapor mencantumkan identitas secara jelas (nama dan alamat koresponden). Untuk respon dari media pengaduan lainnya akan disampaikan dan diberikan sesuai identitas pelapor yang dicantumkan
                                          dalam media pengaduan tersebut.
                                      </p>
                                  </div>
                              </li>
                              <li>
                                  <a data-toggle="collapse" href="#faq5" class="collapsed">Apakah pengaduan yang saya berikan akan selalu mendapatkan respon? <i class="fa fa-minus-circle"></i></a>
                                  <div id="faq5" class="collapse" data-parent="#faq-list">
                                      <p>
                                          Pengaduan yang anda berikan akan direspon dan tercantum dalam aplikasi WBS-BPS ini dan akan terupdate secara otomatis sesuai dengan respon yang telah diberikan oleh pihak penerima pengaduan. Untuk dapat melihat respon yang diberikan, anda harus login
                                          terlebih dahulu dengan username yang telah anda registrasikan di aplikasi ini dan anda dapat melihat status pengaduan dalam history pengaduan sesuai dengan nomor register pengaduan yang didapatkan. Sebagai catatan,
                                          pengaduan anda akan lebih mudah ditindaklanjuti apabila memenuhi unsur pengaduan. Hal Lebih lanjut/lengkap terkait dengan unsur pengaduan dapat dilihat disini.
                                      </p>
                                  </div>
                              </li>
                              <li>
                                  <a data-toggle="collapse" href="#faq6" class="collapsed">Apakah kerahasiaan identitas saya sebagai pengadu/pelapor terjaga? <i class="fa fa-minus-circle"></i></a>
                                  <div id="faq6" class="collapse" data-parent="#faq-list">
                                      <p>
                                          Kerahasiaan identitas anda sebagai pelapor akan terjaga seperti yang telah disebutkan dalam Peraturan Kepala BPS Nomor XX Tahun 2019. Namun agar kerahasiaan identitas anda dapat lebih terjaga sebaiknya anda memperhatikan hal-hal sebagaimana disebutkan
                                          disini.
                                      </p>
                                  </div>
                              </li>
                              <li>
                                  <a data-toggle="collapse" href="#faq7" class="collapsed">Apakah setiap melakukan pengaduan harus membuat dan register username baru?<i class="fa fa-minus-circle"></i></a>
                                  <div id="faq7" class="collapse" data-parent="#faq-list">
                                      <p>
                                          Hal tersebut tidak perlu dilakukan. Satu username dapat melakukan pengaduan lebih dari satu. Ketika setelah selesai membuat satu pengaduan, anda dapat membuat pengaduan terkait dengan dugaan pelanggaran dan/atau ketidakpuasan terhadap pelayanan yang diberikan
                                          lainnya dengan memilih “tambah pengaduan”. Masing-masing pengaduan akan mendapatkan nomor register yang berbeda.
                                      </p>
                                  </div>
                              </li>
                              <li>
                                  <a data-toggle="collapse" href="#faq8" class="collapsed">Saya sudah mengirimkan pengaduan namun di kemudian hari saya ingin merubah/menambahkan data terkait pengaduan yang saya lakukan, apa yang harus saya lakukan? Apakah harus membuat pengaduan baru?<i class="fa fa-minus-circle"></i></a>
                                  <div id="faq8" class="collapse" data-parent="#faq-list">
                                      <p>
                                          Data yang sudah dilaporkan sebelumnya tidak dapat dilakukan perubahan namun anda bisa menambahkan data lain terkait pengaduan dengan mengunggah data dalam bentuk seperti dokumen, foto, video, dan lain sebagainya masing-masing dengan ukuran maksimum 10
                                          MB. Untuk melakukan hal tersebut di atas tidak perlu membuat pengaduan baru. Mengunggah data tambahan baru dapat dilakukan dengan login username yang telah diregistrasikan sebelumnya di aplikasi ini lalu masuk ke
                                          halaman pengaduan. Dalam halaman pengaduan, anda memilih pengaduan yang ingin ditambahkan data tambahan kemudian memilih (klik kotak kecil “tambah lampiran pengaduan”) di bagian bawah rincian pengaduan.
                                      </p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </section>
          <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Kontak Kami </h2>
                    <p>Kontak Kami Untuk Layanan Aduan di</p>
                </div>
                <div class="row contact-info">
                    <div class="col-md-3">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Alamat Surat</h3>
                            <address>Sekretariat Layanan Pengaduan BPS Provinsi Nusa Tenggara Barat Jalan Dr. Soedjono No. 74 Kelurahan Jempong Baru Kecamatan Sekarbela Kota Mataram NTB 83116</address>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Telepon</h3>
                            <p><a href="">(0370) 621385</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Faks</h3>
                            <p><a href="">(0370) 623801</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:pengaduan@bpsntb.id">pengaduan@bpsntb.id</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #contact -->
</main>
@include('layouts.footer')
</body>

</html>
