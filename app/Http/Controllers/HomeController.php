<?php

namespace App\Http\Controllers;

use App\Models\DetailRiwayat;
use App\Models\Kendaraan;
use App\Models\Lokasi;
use App\Models\Pegawai;
use App\Models\Riwayat;
use App\Models\User;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $roles=Auth::user()->role;
        switch($roles){
            case 'admin' ://admin
                return $this->dasboardAdmin();
                break;
            default:
                return $this->indexUser();
        }
    }
    protected function dasboardAdmin(){
        $lokasi=Lokasi::count();
        $kendaraan=Kendaraan::count();
        $pegawai=Pegawai::count();
        $tes=Riwayat::with(['kendaraan','verifikasi','detail_histories'])->get();
        return view('pages.admin.dashboard',compact('lokasi','kendaraan','pegawai','tes'));
    }
    protected function indexUser(){
        $tes=Verifikasi::with(['riwayat','users'])->where('user_id',Auth::user()->id)->get();
        return view('pages.staf.dashboard',compact('tes'));
    }
}
