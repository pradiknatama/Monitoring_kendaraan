<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Riwayat;
class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';
	protected $primaryKey = 'id';
    protected $fillable = [
        'name','jenis_mobil','bbm','service','rental','lokasi_id'
    ];
    public function riwayat(){
        return $this->hasMany(Riwayat::class,'kendaraan_id','id');
    }
}
