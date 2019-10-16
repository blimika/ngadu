<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Mail\MailToInspektorat;
use Illuminate\Support\Facades\Mail;

class Pengaduan extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formPengaduan()
    {
        return view('tiket.index');
    }

    public function createPengaduan(Request $request)
    {
        $request->validate([
            'kode_pengaduan' => 'required',
            'isi_pengaduan' => 'required',
            'bukti_pengaduan' => 'required| mimes:jpeg,png,pdf,mp4,mp3',
        ]);

        $id_user = Auth()->user()->id;
        $nama_user = Auth()->user()->name;
        $kode_pengaduan = $request->kode_pengaduan;
        $isi_pengaduan = $request->isi_pengaduan;
        $link_bukti_pengaduan = "LINK NULL";
        $last_edited_by = Auth()->user()->name;

        if ($request->hasFile('bukti_pengaduan')) {
            $path = $request->file('bukti_pengaduan')->store("bukti_pengaduan", ['disk' => 'public']);
            $link_bukti_pengaduan = $path;

            $nama_file = $request->file('bukti_pengaduan')->getClientOriginalName();
        }

        $created_at = now();
        $createAduan = DB::table('pengaduan')->insert([
            'id_user' => $id_user,
            'nama_user' => $nama_user,
            'kode_pengaduan' => $kode_pengaduan,
            'isi_pengaduan' => $isi_pengaduan,
            'link_bukti_pengaduan' => $link_bukti_pengaduan,
            'nama_file_bukti_pengaduan' => $nama_file,
            'status_pengaduan' => '001',
            'last_edited_by' => $last_edited_by,
            'created_at' => $created_at,
        ]);

        if ($createAduan) {
            $id_laporan = DB::table('pengaduan')
                ->where([
                    'id_user' => $id_user,
                    'kode_pengaduan' => $kode_pengaduan,
                    'isi_pengaduan' => $isi_pengaduan,
                    'created_at' => $created_at,
                ])->get();

            $objDemo = new \stdClass();
            $objDemo->id_laporan = $id_laporan[0]->id;
            $objDemo->nama_pelapor = $nama_user;
            $objDemo->isi_laporan = $isi_pengaduan;
            $objDemo->Sender = 'Layanan Pengaduan BPS Prov. NTB';
            $objDemo->Subject = '[NO REPLY - LAPORAN PENGADUAN]';

            if ($kode_pengaduan == '001') {
                $objDemo->jenis_laporan = 'Tindak Pidana Korupsi';
                Mail::to("wahyudi.septiawan@bps.go.id")->send(new MailToInspektorat($objDemo));
                Mail::to("pengaduanbpsntb@gmail.com")->send(new MailToInspektorat($objDemo));
            }

            if ($kode_pengaduan == '002') {
                $objDemo->jenis_laporan = 'Pelanggaran Kode Etik PNS';
                Mail::to("wahyudi.septiawan@bps.go.id")->send(new MailToInspektorat($objDemo));
                Mail::to("pengaduanbpsntb@gmail.com")->send(new MailToInspektorat($objDemo));
            }

            return back()->with('aduan_berhasil_tersimpan', 'Laporan Pengaduan Anda Berhasil Tersimpan Dalam Database');
        } else {
            return back()->with('aduan_gagal_tersimpan', 'Error. Laporan Pengaduan Anda Gagal Tersimpan Dalam Database');
        }
    }

    public function getDataPengaduan($id)
    {
        $pengaduan = DB::table('pengaduan')
            ->where([
                'id' => $id,
            ])->get();

        return view('pengaduan.index', ['id_pengaduan' => $id, 'pengaduan' => $pengaduan]);
    }

    public function editPengaduan(Request $request)
    {
        $request->validate([
            'kode_pengaduan' => 'required',
            'isi_pengaduan' => 'required',
            'bukti_pengaduan' => 'required| mimes:jpeg,png,pdf,mp4,mp3',
        ]);

        $id_user = Auth()->user()->id;
        $nama_user = Auth()->user()->name;
        $kode_pengaduan = $request->kode_pengaduan;
        $isi_pengaduan = $request->isi_pengaduan;
        $last_edited_by = Auth()->user()->name;

        $data = DB::table('pengaduan')
            ->where([
                'id' => $request->id_pengaduan,
            ])->first();

        $status_pengaduan = $data->status_pengaduan;
        $created_at = $data->created_at;

        if ($request->hasFile('bukti_pengaduan')) {
            $path = $request->file('bukti_pengaduan')->store("bukti_pengaduan", ['disk' => 'public']);
            $link_bukti_pengaduan = $path;

            $nama_file = $request->file('bukti_pengaduan')->getClientOriginalName();
        } else {

            $link_bukti_pengaduan = $data->link_bukti_pengaduan;
            $nama_file = $data->nama_file_bukti_pengaduan;
        }

        $updateAduan = DB::table('pengaduan')
            ->where([
                'id' => $request->id_pengaduan,
            ])
            ->update([
                'id_user' => $id_user,
                'nama_user' => $nama_user,
                'kode_pengaduan' => $kode_pengaduan,
                'isi_pengaduan' => $isi_pengaduan,
                'link_bukti_pengaduan' => $link_bukti_pengaduan,
                'nama_file_bukti_pengaduan' => $nama_file,
                'status_pengaduan' => $status_pengaduan,
                'last_edited_by' => $last_edited_by,
                'created_at' => $created_at,
                'updated_at' => now(),
            ]);

        if ($updateAduan) {
            return back()->with('berhasil_update_aduan', 'Laporan Pengaduan Anda Berhasil Tersimpan Dalam Database');
        } else {
            return back()->with('gagal_update_aduan', 'Error. Laporan Pengaduan Anda Gagal Tersimpan Dalam Database');
        }
    }
}
