<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Administrator extends Controller
{
    //
    public function admDashboard()
    {

        $pengaduan001 =  DB::table('pengaduan')
            ->where([
                'status_pengaduan' => '001',
            ])->get();

        $pengaduan002 =  DB::table('pengaduan')
            ->where([
                'status_pengaduan' => '002',
            ])->get();

        $pengaduan003 =  DB::table('pengaduan')
            ->where([
                'status_pengaduan' => '003',
            ])->get();

        $pengaduan004 =  DB::table('pengaduan')
            ->where([
                'status_pengaduan' => '004',
            ])->get();

        $pengaduan005 =  DB::table('pengaduan')
            ->where([
                'status_pengaduan' => '005',
            ])->get();

        $pengaduan006 =  DB::table('pengaduan')
            ->where([
                'status_pengaduan' => '006',
            ])->get();

        $pengaduan007 =  DB::table('pengaduan')
            ->where([
                'status_pengaduan' => '007',
            ])->get();

        $jsa001 =  DB::table('pengaduan')
            ->where([
                'kode_pengaduan' => '001',
            ])->get();

        $jsa002 =  DB::table('pengaduan')
            ->where([
                'kode_pengaduan' => '002',
            ])->get();

        $jsa003 =  DB::table('pengaduan')
            ->where([
                'kode_pengaduan' => '003',
            ])->get();

        $jsa004 =  DB::table('pengaduan')
            ->where([
                'kode_pengaduan' => '004',
            ])->get();

        return view('administrator.admdashboard')
            ->with('p001', $pengaduan001)
            ->with('p002', $pengaduan002)
            ->with('p003', $pengaduan003)
            ->with('p004', $pengaduan004)
            ->with('p005', $pengaduan005)
            ->with('p006', $pengaduan006)
            ->with('p007', $pengaduan007)
            ->with('jsa001', $jsa001)
            ->with('jsa002', $jsa002)
            ->with('jsa003', $jsa003)
            ->with('jsa004', $jsa004);
    }

    public function admDetailLaporan(Request $request)
    {
        $pengaduan =  DB::table('pengaduan')->get();

        $statuspengaduan =  DB::table('statuspengaduan')->get();

        $kodepengaduan =  DB::table('kodepengaduan')->get();

        return view('administrator.admdetail')
            ->with('statuspengaduan', $statuspengaduan)
            ->with('kodepengaduan', $kodepengaduan)
            ->with('pengaduan', $pengaduan);
    }
    //tambahannya
    public function dashboard(Request $request)
    {
        $pengaduan =  DB::table('pengaduan')->get();

        $statuspengaduan =  DB::table('statuspengaduan')->get();

        $kodepengaduan =  DB::table('kodepengaduan')->get();

        return view('administrator.index')
            ->with('statuspengaduan', $statuspengaduan)
            ->with('kodepengaduan', $kodepengaduan)
            ->with('pengaduan', $pengaduan);
    }

    public function downloadBukti($id)
    {
        $bukti = DB::table('pengaduan')->where('id', $id)->first();

        // $file = 'laravel/storage/app/public/'.$artikel[0]->link_artikel;
        $file = '../storage/app/public/' . $bukti->link_bukti_pengaduan;
        $name = basename($file);
        return response()->file($file);
    }

    public function downloadBATindaklanjut($id)
    {
        $bukti = DB::table('pengaduan')->where('id', $id)->first();

        // $file = 'laravel/storage/app/public/'.$artikel[0]->link_artikel;
        $file = '../storage/app/public/' . $bukti->link_berita_acara_hasil_pengaduan;
        $name = basename($file);
        return response()->file($file);
    }

    public function viewUpdatePengaduan($id)
    {
        $pengaduan = DB::table('pengaduan')->where([
            'id' => $id,
        ])->first();

        $id_pengaduan = $pengaduan->id;

        $jenis_pengaduan = DB::table('kodepengaduan')
            ->where(['kode_pengaduan' => $pengaduan->kode_pengaduan])
            ->first();
        //return view('administrator.admupdate')
        return view('administrator.update')
            ->with('id_pengaduan', $id_pengaduan)
            ->with('jenis_pengaduan', $jenis_pengaduan->penjelasan_kode)
            ->with('pengaduan', $pengaduan);
    }

    public function updatePengaduan(Request $request)
    {
        //dd($request->all());
        $id = $request->id_pengaduan;
        if ($request->kode_status_pengaduan == "006" or $request->kode_status_pengaduan == "007") {
            $request->validate([
                'kode_status_pengaduan' => 'required',
                'ba_tindak_lanjut' => 'required| mimes:jpeg,png,pdf,mp4,mp3',
            ]);
            if ($request->hasFile('ba_tindak_lanjut')) {
                $path = $request->file('ba_tindak_lanjut')->store("ba_tindaklanjut", ['disk' => 'public']);
                $link_berita_acara_hasil_pengaduan = $path;

                $nama_file = $request->file('ba_tindak_lanjut')->getClientOriginalName();
            }
        } else {
            $nama_file = NULL;
            $path = NULL;
        }

        $updated_at = now();
        $updateAduan = DB::table('pengaduan')
            ->where([
                'id' => $id,
            ])
            ->update([
                'status_pengaduan' => $request->kode_status_pengaduan,
                'link_berita_acara_hasil_pengaduan' => $path,
                'nama_file_berita_acara_hasil_pengaduan' => $nama_file,
                'last_edited_by' => Auth()->user()->name,
                'updated_at' => $updated_at,
            ]);

        $pengaduan =  DB::table('pengaduan')->get();

        $statuspengaduan =  DB::table('statuspengaduan')->get();

        $kodepengaduan =  DB::table('kodepengaduan')->get();

        if ($updateAduan) {
            return view('administrator.index')
                ->with('statuspengaduan', $statuspengaduan)
                ->with('kodepengaduan', $kodepengaduan)
                ->with('pengaduan', $pengaduan)
                ->with('adm_berhasil_update_aduan', 'Pengaduan Berhasil Terupdate');
        } else {
            return view('administrator.index')
                ->with('statuspengaduan', $statuspengaduan)
                ->with('kodepengaduan', $kodepengaduan)
                ->with('pengaduan', $pengaduan)
                ->with('adm_gagal_update_aduan', 'Pengaduan Gagal Terupdate');
        }
    }

    public function hapusPengaduan($id)
    {

        // delete Record On Database
        $deleteStatus = DB::table('pengaduan')
            ->where([
                'id' => $id,
            ])
            ->delete();

        $pengaduan =  DB::table('pengaduan')->get();

        $statuspengaduan =  DB::table('statuspengaduan')->get();

        $kodepengaduan =  DB::table('kodepengaduan')->get();

        if ($deleteStatus) {
            return view('administrator.index')
                ->with('statuspengaduan', $statuspengaduan)
                ->with('kodepengaduan', $kodepengaduan)
                ->with('pengaduan', $pengaduan)
                ->with('adm_berhasil_delete_aduan', 'Pengaduan Berhasil Dihapus');
        } else {
            return view('administrator.index')
                ->with('statuspengaduan', $statuspengaduan)
                ->with('kodepengaduan', $kodepengaduan)
                ->with('pengaduan', $pengaduan)
                ->with('adm_gagal_delete_aduan', 'Pengaduan Gagal Terupdate');
        }
    }
}
