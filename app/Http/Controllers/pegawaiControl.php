<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class pegawaiControl extends Controller
{
    public function index(){
        $pegawai=Pegawai::get();
        return view('pages.admin.pegawai.index', compact('pegawai'));
    }
    public function create(){
        return view('pages.admin.pegawai.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama'=>'required',
                'jabatan'=>'required'
            ],
            [
                'nama.required'=>'Inputan nama kategori harus diisi',
                'jabatan.required'=>'Inputan jabatan harus diisi',
            ]
        );
        Pegawai::insert(
            [
                'nama'=>$request['nama'],
                'jabatan'=>$request['jabatan'],
            ]
        );
        return redirect('/pegawai')->withSuccessMessage("Berhasil Menambahkan Kategori");
    }
}
