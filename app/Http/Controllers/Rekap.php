<?php

namespace App\Http\Controllers;

use App\Antrian;
use Illuminate\Http\Request;

class Rekap extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['antrian'] = null;
        return view('rekap', $data);
    }

    public function lihat(Request $request)
    {
      $awal = $request->tanggal.' 00:00:00';
      $akhir = $request->tanggal.' 23:59:59';
      $data['antrian'] = Antrian::where('created_at', '>', $awal)-> where('created_at','<',$akhir)->get();
        return view('rekap',$data);
    }

    public function bulanan()
    {
      $data['antrian'] = null;
        return view('rekapbulanan', $data);
    }

    public function lihatbulanan(Request $request)
    {
      $awal = $request->tanggal.'-01 00:00:00';
      $akhir = $request->tanggal.'-31 23:59:59';
      $data['antrian'] = Antrian::where('created_at', '>', $awal)-> where('created_at','<',$akhir)->get();
        return view('rekapbulanan',$data);
    }
}
