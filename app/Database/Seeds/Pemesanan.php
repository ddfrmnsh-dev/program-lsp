<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pemesanan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'  => 'Tebing Godzilla',
                'nik'  =>  12345678,
                'p_number'  =>  1245788,
                'wisata_id'  =>  1,
                'tgl_kunjungan'  =>  '30/09/2022',
                'p_dewasa'  =>  2,
                'p_anak'  =>  2,
                't_bayar'  =>  25000,
            ],
            [
                'nama'  => 'Godzilla',
                'nik'  =>  12345678,
                'p_number'  =>  1245788,
                'wisata_id'  =>  1,
                'tgl_kunjungan'  =>  '30/09/2022',
                'p_dewasa'  =>  2,
                'p_anak'  =>  2,
                't_bayar'  =>  25000,
            ],
            [
                'nama'  => 'Tebing',
                'nik'  =>  12345678,
                'p_number'  =>  1245788,
                'wisata_id'  =>  1,
                'tgl_kunjungan'  =>  '30/09/2022',
                'p_dewasa'  =>  2,
                'p_anak'  =>  2,
                't_bayar'  =>  25000,
            ]
        ];
        $this->db->table('pemesanan')->insertBatch($data);
    }
}
