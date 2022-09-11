<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Wisata extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tempat'  => 'Tebing Godzilla',
                'harga'  =>  25000
            ],
            [
                'tempat'  => 'Talaga Biru',
                'harga'  =>  20000
            ],
            [
                'tempat'  => 'Scientia Square Park',
                'harga'  =>  50000
            ]
        ];
        $this->db->table('wisata')->insertBatch($data);
    }
}
