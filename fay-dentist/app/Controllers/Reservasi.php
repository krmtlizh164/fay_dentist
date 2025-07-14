<?php
namespace App\Controllers;

use App\Models\ReservasiModel;

class Reservasi extends BaseController
{
    protected $reservasiModel;

    public function __construct()
    {
        $this->reservasiModel = new ReservasiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Reservasi',
            'reservasi' => $this->reservasiModel->findAll()
        ];
        return view('reservasi/index', $data);
    }

    public function buat()
    {
        $data = ['title' => 'Buat Reservasi'];
        return view('reservasi/buat', $data);
    }

    public function simpan()
    {
        // Proses simpan data
        $this->reservasiModel->save([
            'tanggal' => $this->request->getPost('tanggal'),
            'jam' => $this->request->getPost('jam'),
            'keluhan' => $this->request->getPost('keluhan')
        ]);
        
        return redirect()->to('/reservasi')->with('success', 'Reservasi berhasil!');
    }
}
