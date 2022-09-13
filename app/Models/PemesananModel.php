<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table    = 'pemesanan';
    protected $primaryKey    = 'id';
    // protected $returnType    = 'object';
    protected $allowedFields    = ['nama', 'nik', 'p_number', 'wisata_id', 'tgl_kunjungan', 'p_dewasa', 'p_anak', 't_bayar'];
    // protected $useTimestamps    = true;
    // protected $useSoftDeletes    = false;

    public function getPemesanan()
    {
        return $this->findAll();
    }
    function getAll()
    {
        $builder = $this->db->table('pemesanan');
        $builder->join('wisata', 'wisata.id = pemesanan.wisata_id');
        $query = $builder->get();
        return $query->getResult();
    }
}
