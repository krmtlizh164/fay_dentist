<?php
namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'isi', 'gambar'];
    protected $useTimestamps = true;
    
    public function getArtikelTerbaru($limit = 3)
    {
        return $this->orderBy('created_at', 'DESC')
                   ->limit($limit)
                   ->findAll();
    }
}
