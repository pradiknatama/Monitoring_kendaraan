<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Riwayat;
use App\Models\Pegawai;
class DetailRiwayat extends Model
{
    use HasFactory;
    protected $table = 'detail_riwayat';
	protected $primaryKey = 'id';
    protected $fillable = [
        'pegawai_id','riwayat_id'
    ];
    public function riwayat(){
        return $this->belongsTo(Riwayat::class, 'riwayat_id','id');
    }
    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'pegawai_id','id');
    }
}
