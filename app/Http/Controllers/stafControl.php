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

        $verifikasi=Verifikasi::with(['riwayat'])->where('id',$id)->get();
        $id_verif=$verifikasi[0]->riwayat_id;
        $riwayat=Riwayat::with(['verifikasi'])->where('id',$id_verif)->get();
        $banding=$riwayat[0]->verifikasi[0]->status;
        $banding2=$riwayat[0]->verifikasi[1]->status;
        if($banding =="1" && $banding2=="1"){
            $status=Riwayat::find($riwayat[0]->id);
            $status->status='1';
            $status->save();
        }
        else{
            $status=Riwayat::find($riwayat[0]->id);
            $status->status='0';
            $status->save();
        }
        return redirect('/home');
    }
}
