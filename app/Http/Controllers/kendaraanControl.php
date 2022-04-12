<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class kendaraanControl extends Controller
{
    public function index(){
        $kendaraan=Kendaraan::get();
        return view('pages.admin.kendaraan.index', compact('kendaraan'));
    }
    public function create(){
        $loc=Lokasi::get();
        return view('pages.admin.kendaraan.create',compact('loc'));
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama'=>'required',
                'j_mobil'=>'required',
                'bbm'=>'required',
                'servis'=>'required',
                'rental'=>'required',
            ],
            [
                'nama.required'=>'Inputan nama harus diisi',
                'j_mobil.required'=>'Inputan Jenis Mobil harus diisi',
                'bbm.required'=>'Inputan bbm kategori harus diisi',
                'servis.required'=>'Inputan servis harus diisi',
                'rental.required'=>'Inputan rental harus diisi',
            ]
        );
        $p=Kendaraan::insert(
            [
                'name'=>$request['nama'],
                'jenis_mobil'=>$request['j_mobil'],
                'bbm'=>$request['bbm'],
                'service'=>$request['servis'],
                'rental'=>$request['rental'],
                'lokasi_id'=>$request['location'],
            ]
        );
        return redirect('/kendaraan')->withSuccessMessage("Berhasil Menambahkan Kategori");
    }
}
