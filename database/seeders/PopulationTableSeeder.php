<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Population;

class PopulationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $populations = [
            [
                'name' => 'Bambank',
                'age'  => 25,
                'address' => 'Jl.Bahagia,No.15',
                'religion' => 'Islam',
                'occupation' => 'Penjual Bubur',
                'chitizenship' => 'Indonesia',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'name' => 'Joko',
                'age'  => 30,
                'address' => 'Jl.Sukses Selalu,No.23',
                'religion' => 'Islam',
                'occupation' => 'Penjual Seblak',
                'chitizenship' => 'Indonesia',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'name' => 'Andre',
                'age'  => 35,
                'address' => 'Jl.Mudah Ceria,No.13',
                'religion' => 'Islam',
                'occupation' => 'Tukang Ojek',
                'chitizenship' => 'Indonesia',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'name' => 'Bunga',
                'age'  => 21,
                'address' => 'Jl.Suka Damai,No.16',
                'religion' => 'Islam',
                'occupation' => 'Mahasiswa',
                'chitizenship' => 'Indonesia',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
             
        ];

        Population::insert($populations);
    }
}
