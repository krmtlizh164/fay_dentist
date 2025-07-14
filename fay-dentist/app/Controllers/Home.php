<?php
namespace App\Controllers;

use App\Models\ArtikelModel;

class Home extends BaseController
{
    protected $artikelModel;

    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda - Fay Dentist Wiradesa',
            'artikel_terbaru' => $this->artikelModel->orderBy('id', 'DESC')->findAll(3)
        ];
        return view('home', $data);
    }

    public function tentangKami()
    {
        $data = [
            'title' => 'Tentang Kami - Fay Dentist',
            'kontak' => [
                'alamat' => 'Jl. Wiradesa No. 123, Kec. Wiradesa, Kab. Pekalongan',
                'telepon' => '(0285) 1234567',
                'email' => 'info@faydentist.com',
                'jam_operasional' => [
                    'Senin-Jumat' => '08:00 - 20:00',
                    'Sabtu-Minggu' => '09:00 - 15:00'
                ]
            ],
            'tim_dokter' => [
                [
                    'nama' => 'Dr. Fayyiq, Sp.KG',
                    'spesialisasi' => 'Spesialis Konservasi Gigi',
                    'foto' => 'photoku.jpg'
                ],
            ]
        ];

        return view('tentang_kami', $data);
    }

    // Tambahkan method ini ke Home Controller
    public function artikel()
    {
        // Data dummy artikel
        $artikel_list = [
            [
                'id' => 1,
                'judul' => 'Perawatan Gigi Rutin',
                'isi' => 'Artikel tentang pentingnya perawatan gigi rutin...',
                'gambar' => 'artikel1.jpg'
            ]
        ];

        $data = [
            'title' => 'Artikel Kesehatan Gigi',
            'artikel_list' => $artikel_list
        ];
        
        return view('artikel/index', $data);
    }


    public function viewArtikel($id)
    {
        $artikelModel = new \App\Models\ArtikelModel();
        $artikel = $artikelModel->find($id);
        
        if (!$artikel) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan');
        }
        
        $data = [
            'title' => $artikel['judul'],
            'artikel' => $artikel
        ];
        
        return view('artikel/detail', $data);
    }
    

}
