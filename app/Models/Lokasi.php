<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
