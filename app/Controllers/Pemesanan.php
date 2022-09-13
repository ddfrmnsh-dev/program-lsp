<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PemesananModel;
use App\Models\WisataModel;

class Pemesanan extends BaseController
{
    protected $helpers = ['custom'];

    function __construct()
    {
        $this->PemesananModel = new PemesananModel();
        $this->WisataModel = new WisataModel();
    }
    public function index()
    {
        $data['pemesanan'] = $this->PemesananModel->getPemesanan();
        return view('pesan/index', $data);
    }

    public function store()
    {
        $nama = $this->request->getVar('nama');
        $nik = $this->request->getVar('nik');
        $p_number = $this->request->getVar('p_number');
        $wisata_id = $this->request->getVar('wisata_id');
        $tgl_kunjungan = $this->request->getVar('tgl_kunjungan');
        $p_dewasa = $this->request->getVar('p_dewasa');
        $p_anak = $this->request->getVar('p_anak');
        $t_bayar = $this->request->getVar('t_bayar');

        $data =  [
            'nama' => $nama,
            'nik' => $nik,
            'p_number' => $p_number,
            'wisata_id' => $wisata_id,
            'tgl_kunjungan' => $tgl_kunjungan,
            'p_dewasa' => $p_dewasa,
            'p_anak' => $p_anak,
            't_bayar' => $t_bayar,
        ];

        $this->PemesananModel->save($data);
        return redirect()->to('/pesan');
    }
}
