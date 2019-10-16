<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Percakapan extends Controller
{
    //
    public function lihatPercakapan($id)
    {
        $dataPesan = DB::table('pengaduanwebchat')
            ->where([
                'id_pengaduan' => $id,
            ])->get();
        $pengaduan = DB::table('pengaduan')
            ->where([
                'id' => $id,
            ])->get();

        return view('percakapan.index')->with('pesan', $dataPesan)->with('id_pengaduan', $id)->with('pengaduan', $pengaduan);
    }

    public function viewTambahPesan($id)
    {
        return view('percakapan.tambahpesan')->with('id_pengaduan', $id);
    }

    public function tambahPesan(Request $request)
    {

        $id_pengaduan = $request->id_pengaduan;
        $id_user = Auth()->user()->id;
        $nama_user = Auth()->user()->name;
        $isikomentar = $request->isi_pesan;

        $statusPesan = DB::table('pengaduanwebchat')
            ->insert([
                'id_user' => $id_user,
                'id_pengaduan' => $id_pengaduan,
                'nama_user' => $nama_user,
                'isi_pesan' => $isikomentar,
                'last_edited_by' => $nama_user,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        $dataPesan = DB::table('pengaduanwebchat')
            ->where([
                'id_user' => Auth()->user()->id,
            ])->get();

        if ($statusPesan) {
            return redirect()->route('percakapan.lihatpercakapan', $id_pengaduan)
                ->with('pesan', $dataPesan)
                ->with('pesan_berhasil_tersimpan', 'Pesan Anda Berhasil Terkirim');
        } else {
            return redirect()->route('percakapan.lihatpercakapan', $id_pengaduan)
                ->with('pesan', $dataPesan)
                ->with('pesan_gagal_tersimpan', 'Pesan Anda Gagal Terkirim');
        }
    }
}
