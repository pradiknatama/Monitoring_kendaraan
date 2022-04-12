<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kendaraan;
use App\Models\Verifikasi;
use App\Models\DetailRiwayat;
class Riwayat extends Model
{
    use HasFactory;
    protected $table = 'riwayat';
	protected $primaryKey = 'id';
    protected $fillable = [
        'status','kendaraan_id'
    ];
    public function kendaraan(){
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id','id');
    }
    public function verifikasi(){
        return $this->hasMany(Verifikasi::class,'riwayat_id','id');
    }
    public function detail_histories(){
        return $this->hasMany(DetailRiwayat::class,'riwayat_id','id');
    }
}
