<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailRiwayat;
class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
	protected $primaryKey = 'id';
    protected $fillable = [
        'nama','jabatan'
    ];
    public function verifikasi(){
        return $this->hasMany(DetailRiwayat::class,'pegawai_id','id');
    }
}
