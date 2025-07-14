<?php
namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index'); // Menampilkan halaman index admin
    }

    public function artikel()
    {
        return view('admin/artikel'); // Menampilkan halaman artikel
    }

    public function tambahArtikel()
    {
        if ($this->request->getMethod() === 'post') {
            // Logika untuk menambah artikel
            // Simpan artikel ke database
            return redirect()->to('/admin/artikel'); // Redirect setelah menambah artikel
        }
        return view('admin/tambah_artikel'); // Menampilkan form tambah artikel
    }

    public function editArtikel($id)
    {
        if ($this->request->getMethod() === 'post') {
            // Logika untuk mengupdate artikel
            // Update artikel di database
            return redirect()->to('/admin/artikel'); // Redirect setelah mengupdate artikel
        }
        // Ambil data artikel berdasarkan ID untuk ditampilkan di form
        return view('admin/edit_artikel'); // Menampilkan form edit artikel
    }

    public function reservasi()
    {
        return view('admin/reservasi'); // Menampilkan halaman reservasi
    }
}
