@extends('layouts.statis')

@section('konten')
        <!--==========================
        Edit Pengaduan Section
        ============================-->
        <section id="tiket" class="wow fadeInUp">
                <div class="container">
                    <div class="section-header">
                        <h2>EDIT FORM LAPORAN PENGADUAN</h2>
                        <p>Kami jamin kerahasian informasi anda</p>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 mb-5" >
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
                          @include('pengaduan.editform')
                      </div>
                    </div>
                </div>
              </section>
@endsection

@section('js')
<script>
        $(document).ready(function() {
            $('#kode_pengaduan').val('{{$pengaduan[0]->kode_pengaduan}}');
            $('#isi_pengaduan').val('{{$pengaduan[0]->isi_pengaduan}}');
            $('#bukti_pengaduan').val('{{$pengaduan[0]->link_bukti_pengaduan}}');
        });
      </script>
@stop