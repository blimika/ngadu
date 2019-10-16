<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pengaduan001 =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
                'status_pengaduan' => '001',
            ])->get();

        $pengaduan002 =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
                'status_pengaduan' => '002',
            ])->get();

        $pengaduan003 =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
                'status_pengaduan' => '003',
            ])->get();

        $pengaduan004 =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
                'status_pengaduan' => '004',
            ])->get();

        $pengaduan005 =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
                'status_pengaduan' => '005',
            ])->get();

        $pengaduan006 =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
                'status_pengaduan' => '006',
            ])->get();

        $pengaduan007 =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
                'status_pengaduan' => '007',
            ])->get();

        $jsa001 =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
                'kode_pengaduan' => '001',
            ])->get();

        $jsa002 =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
                'kode_pengaduan' => '002',
            ])->get();

        $jsa003 =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
                'kode_pengaduan' => '003',
            ])->get();

        $jsa004 =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
                'kode_pengaduan' => '004',
            ])->get();

        return view('home')
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

    public function detailLaporan(Request $request)
    {
        $pengaduan =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
            ])->get();

        $statuspengaduan =  DB::table('statuspengaduan')->get();

        $kodepengaduan =  DB::table('kodepengaduan')->get();

        return view('pengaduan.detail')
            ->with('statuspengaduan', $statuspengaduan)
            ->with('kodepengaduan', $kodepengaduan)
            ->with('pengaduan', $pengaduan);
    }
    public function dashboard(Request $request)
    {
        $pengaduan =  DB::table('pengaduan')
            ->where([
                'id_user' => Auth()->user()->id,
            ])->get();

        $statuspengaduan =  DB::table('statuspengaduan')->get();

        $kodepengaduan =  DB::table('kodepengaduan')->get();

        return view('dashboard.index')
            ->with('statuspengaduan', $statuspengaduan)
            ->with('kodepengaduan', $kodepengaduan)
            ->with('pengaduan', $pengaduan);
    }
}
