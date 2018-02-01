<?php

namespace App\Http\Controllers;

use App\Option;
Use App\Antrian;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

       public function antrian(Request $request)
    {
        $nomor = Option::find(1);
        $data['antrian'] = new Antrian();
        $data['antrian']->nama = $request->nama;
        $data['antrian']->perusahaan = $request->perusahaan;
        $data['antrian']->nomor = $nomor->value;
        $data['antrian']->save();
        $nomor->value++;
        $nomor->save();

        return view('antrian.nomor', $data);
    }
}
