<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        $session = session();
        
        // Cek jika belum login
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
        
        // Cek role khusus (admin/pasien)
        if (!empty($arguments)) {
            $role = $session->get('role');
            if (!in_array($role, $arguments)) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}
