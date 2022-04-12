<?php

namespace App\Http\Controllers;

use App\Models\DetailRiwayat;
use App\Models\Kendaraan;
use App\Models\Pegawai;
use App\Models\Riwayat;
use App\Models\User;
use App\Models\Verifikasi;
use Illuminate\Http\Request;

class pesananControl extends Controller
{
    public function index(){
        $tes=Riwayat::with(['kendaraan','verifikasi','detail_histories'])->get();
        return view('pages.admin.riwayat.index', compact('tes'));
    }
    public function create(){
        $driver=Pegawai::where('jabatan','driver')->get();
        $pegawai=Pegawai::where('jabatan','anggota')->get();
        $kendaraan=Kendaraan::get();
        $staf=User::where('role','staf')->get();
        return view('pages.admin.riwayat.create',compact('staf','kendaraan','driver','pegawai'));
    }
    public function store(Request $request)
    {
        $data=$request->all();
        $riwayat=new Riwayat();
        $riwayat->status='0';
        $riwayat->kendaraan_id=$data['kendaraan'];
        $riwayat->save();
        $id=$riwayat->id;
        $detail=new DetailRiwayat();
        $detail->riwayat_id=$id;
        $detail->pegawai_id=$data['pegawai'];
        $detail->save();
        $detail1=new DetailRiwayat();
        $detail1->riwayat_id=$id;
        $detail1->pegawai_id=$data['driver'];
        $detail1->save();
        $verif=new Verifikasi();
        $verif->riwayat_id=$id;
        $verif->user_id=$data['penyetuju1'];
        $verif->save();
        $verif1=new Verifikasi();
        $verif1->riwayat_id=$id;
        $verif1->user_id=$data['penyetuju2'];
        $verif1->save();
        return redirect('/pesanan')->withSuccessMessage("Berhasil Menambahkan Kategori");
    }
}
