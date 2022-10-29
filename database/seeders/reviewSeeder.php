<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews') -> insert([
            [
                'nama_barang' => 'Kecap Sedap',
                'harga' => '2000',
                'review' => 'Kecap ini terbuat dari kedelai hitam pilihan yang di besarkan dengan pemuh cinta',
            ],
            [
                'nama_barang' => 'Kecap Bango',
                'harga' => '2500',
                'review' => 'Kecap ini terbuat dari bango hitam pilihan yang di besarkan dengan pemuh cinta',
            ],
            [
                'nama_barang' => 'Saos Bumbu',
                'harga' => '5000',
                'review' => 'Rasa pedasnya sampai ke sini',
            ],
        ]);
    }
}
