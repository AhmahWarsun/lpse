<?php

namespace App\Http\Controllers;

use App\Option;
use Illuminate\Http\Request;

class AdministratorController extends Controller
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
        return view('antrian/antri');
    }

    public function reset(Request $request)
    {
      $reset = Option::where('name','antrian')->first();
      $reset->value = 1;
      $reset->save();
      return redirect(route('administrator'));
    }
}
