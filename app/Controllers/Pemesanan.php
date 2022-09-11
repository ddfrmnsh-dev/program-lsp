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
        $this->pemesanan = new PemesananModel();
        $this->wisata = new WisataModel;
    }
    public function index()
    {
        $data['pemesanan'] = $this->pemesanan->getAll();
        return view('index', $data);
    }
}
