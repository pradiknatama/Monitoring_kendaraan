<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kendaraan;
class Lokasi extends Model
{
    use HasFactory;
    protected $table = 'lokasi';
	protected $primaryKey = 'id';
    protected $fillable = [
        'nama'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function kendaraan(){
        return $this->hasMany(Kendaraan::class,'lokasi_id','id');
    }
}
