<?php

namespace App\Controllers;

class HomePage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        echo view('main/layout/Header', $data);
        echo view('main/Mainpage');
        echo view('main/layout/Footer');
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile',
        ];
        echo view('main/layout/Header', $data);
        echo view('main/Profile');
        echo view('main/layout/Footer');
    }

        public function portofolio()
        {
            $data = [
                'title' => 'portofolio',
            ];
            echo view('main/layout/Header', $data);
            echo view('main/portofolio');
            echo view('main/layout/Footer');
        }
        
    

   
    }
    

