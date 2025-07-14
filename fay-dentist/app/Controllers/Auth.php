<?php namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper(['form', 'url']);
    }

    // Tampilan Login
        public function login()
    {
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user = $this->userModel->where('username', $username)->first();
            if ($user && password_verify($password, $user['password'])) {
                // Set session data
                session()->set('isLoggedIn', true);
                session()->set('userId', $user['id']);
                session()->set('role', $user['role']);
                
                return redirect()->to('/'); // Redirect to home or dashboard
            } else {
                return redirect()->back()->with('error', 'Invalid username or password');
            }
        }
        return view('auth/login');  // Load login view
    }


    // Tampilan Registrasi
    public function register()
    {
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'username'     => 'required|min_length[4]|is_unique[users.username]',
                'password'     => 'required|min_length[8]',
                'pass_confirm' => 'required|matches[password]'
            ];

            if (!$this->validate($rules)) {
                log_message('debug', 'VALIDASI GAGAL: ' . json_encode($this->validator->getErrors()));
                return redirect()->back()
                    ->withInput()
                    ->with('errors', $this->validator->getErrors());

            }

            $data = [
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'role'     => 'pasien'
            ];

            try {
                $this->userModel->save($data);
                return redirect()->to('/login')->with('success', 'Registrasi berhasil!');
            } catch (\Exception $e) {
                log_message('error', 'Gagal registrasi: ' . $e->getMessage());
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Gagal menyimpan data ke database.');
            }
        }

        return view('auth/register');
    }



    // Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
