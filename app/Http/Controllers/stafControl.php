<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class stafControl extends Controller
{
    public function verif(Request $request, $id){
        $verif=Verifikasi::where('user_id',Auth::user()->id)->find($id);
        $verif->status='1';
        $verif->save();

        $coba=Riwayat::with(['verifikasi'])->get()->where('id',$id);
        $banding=$coba[0]->verifikasi[0]->status;
        $banding2=$coba[0]->verifikasi[1]->status;


        if($banding =="1" && $banding2=="1"){
            $status=Riwayat::find($id);
            $status->status='1';
            $status->save();
        }
        else{
            $status=Riwayat::find($id);
            $status->status='0';
            $status->save();
        }
        return Redirect::back();
    }
}
