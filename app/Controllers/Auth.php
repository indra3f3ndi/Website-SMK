<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        echo view('/login');
    }
    
    public function process()
    {
        $session = session();
        $adminModel = new UserModel();

        $username = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari admin berdasarkan username
        $admin = $adminModel->where('email', $username)->first();

        if ($admin) {
            // Verifikasi password tanpa hashing
            if ($password === $admin['password']) {
                // Password benar, set session
                $session->set([
                    'email' => $admin['email'],
                    'logged_in' => true
                ]);
                return redirect()->to('/admin');
            } else {
                // Password salah
                return view('login', ['error' => 'Password salah']);
            }
        } else {
            // Username tidak ditemukan
            return view('login', ['error' => 'Username tidak ditemukan']);
        }
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
