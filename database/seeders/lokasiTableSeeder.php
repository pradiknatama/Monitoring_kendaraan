<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Seeder;

class lokasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loc = new Lokasi();
        $loc->nama = "Banyuwangi";
        $loc->save();
        $loc = new Lokasi();
        $loc->nama = "Jember";
        $loc->save();
        $loc = new Lokasi();
        $loc->nama = "Malang";
        $loc->save();
        $loc = new Lokasi();
        $loc->nama = "Surabaya";
        $loc->save();
        $loc = new Lokasi();
        $loc->nama = "Jakarta";
        $loc->save();
        $loc = new Lokasi();
        $loc->nama = "Situbondo";
        $loc->save();
        $loc = new Lokasi();
        $loc->nama = "Bondowoso";
        $loc->save();
    }
}
