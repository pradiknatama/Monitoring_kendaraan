<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Riwayat;
use App\Models\User;
class Verifikasi extends Model
{
    use HasFactory;
    protected $table = 'detail_verifikasi';
	protected $primaryKey = 'id';
    protected $fillable = [
        'riwayat_id','user_id','status'
    ];
    public function riwayat(){
        return $this->belongsTo(Riwayat::class, 'riwayat_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
