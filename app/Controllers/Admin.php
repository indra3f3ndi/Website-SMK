<?php

namespace App\Controllers;
use App\Models\Pegawai_model;
use App\Models\Guru_model;
use App\Models\Siswa_model;
use App\Models\Tamu_model;
use App\Models\Kegiatan_model;



class Admin extends BaseController
{
    protected $Kegiatan_model, $Pegawai_model, $Guru_model, $Siswa_model, $id;
    public function __construct()
    {
        $this->Pegawai_model = new Pegawai_model();
        $this->Guru_model = new Guru_model();
        $this->Siswa_model = new Siswa_model();
        $this->Tamu_model = new Tamu_model();
        $this->Kegiatan_model = new Kegiatan_model();
    }

    public function homeadmin()
    {

        // Menghitung jumlah data dari masing-masing tabel
        $data['count_pegawai'] = $this->Pegawai_model->countAll();
        $data['count_siswa'] = $this->Siswa_model->countAll();
        $data['count_guru'] = $this->Guru_model->countAll();
        $data['count_tamu'] = $this->Tamu_model->countAll();
        $data['count_kegiatan'] = $this->Kegiatan_model->countAll();

        echo view('Template/header');
        echo view('admin/home_admin', $data);
        echo view('Template/footer');

    }

    // Pegawai
    public function adminpegawai()
    {
        $data = [
            'title' => 'Admin | Data Pegawai',
        ];
        $databases['pegawai'] = $this->Pegawai_model->getPegawai();
        echo view ('Template/Header', $data);
        echo view ('admin/pegawai/pegawai', $databases);
        echo view ('Template/Footer');
    }

    public function tambahdatapegawai()
    {
        $data = [
            'title' => 'Admin | Insert Data Pegawai',
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/pegawai/tambahdata');
        echo view ('Template/Footer');
    }

    public function updatedatapegawai($id)
    {
        $data = [
            'title' => 'Admin | Update Data Pegawai',
        ];

        $Pegawai_model = new Pegawai_model();
        $databases['pegawai'] = $Pegawai_model->find($id);
        echo view ('Template/Header', $data);
        echo view ('admin/pegawai/updatedata', $databases);
        echo view ('Template/Footer');
    }

    public function tambahPegawai()
    {
        $Pegawai_model = new Pegawai_model();
        $data = [
            'namapegawai' => $this->request->getPost('namapegawai'),
            'jenkel' => $this->request->getPost('jenkel'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $Pegawai_model->insert($data);
        return redirect()->to('/admin/pegawai');
    }

    public function deletePegawai($id) 
    {
        $this->Pegawai_model->deletePegawai($id);

        return redirect()->to('/admin/pegawai')
            ->with('success', 'Item deleted successfully.');
    }

    public function updatePegawai($id)
    {
        $Pegawai_model = new Pegawai_model();
        $data = [
            'namapegawai' => $this->request->getPost('namapegawai'),
            'jenkel' => $this->request->getPost('jenkel'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $Pegawai_model->update($id, $data);
        return redirect()->to('/admin/pegawai')
            ->with('success', 'Item updated successfully.');
    }

    public function viewpegawai()
    {
        $databases['pegawai'] = $this->Pegawai_model->getPegawai();
        $data = [
            'title' => 'Admin | Insert Data Pegawai',
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/pegawai/view', $databases);
        echo view ('Template/Footer');
        
    }

    public function searchpegawai()
    {
        $keyword = $this->request->getGet('keyword');

        $Pegawai_model = new Pegawai_model();

        if (!empty($keyword)) {
            $databases['pegawai'] = $Pegawai_model->like('namapegawai', $keyword)->findAll();
            $databases['keyword'] = $keyword;
        } else {
            $databases['pegawai'] = $Pegawai_model->findAll();
            $databases['keyword'] = '';
        }

        $data = [
            'title' => 'Search'
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/pegawai/view', $databases);
        echo view ('Template/Footer');
    }
    // Pegawai

    // Guru
    public function adminguru()
    {
        $data = [
            'title' => 'Admin | Data Guru',
        ];
        $databases['guru'] = $this->Guru_model->getGuru();
        echo view ('Template/Header', $data);
        echo view ('admin/guru/guru', $databases);
        echo view ('Template/Footer');
    }

    public function updatedataguru1($id_guru)
    {
        $data = [
            'title' => 'Admin | Update Data Pegawai',
        ];

        $Guru_model = new Guru_model();
        $databases['guru'] = $Guru_model->find($id_guru);
        echo view ('Template/Header', $data);
        echo view ('admin/guru/updatedata', $databases);
        echo view ('Template/Footer');
    }

    public function tambahdataguru()
    {
        $data = [
            'title' => 'Admin | Insert Data Guru',
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/guru/tambahdata');
        echo view ('Template/Footer');
    }

    public function tambahGuru()
    {
        $Guru_model = new Guru_model();
        $data = [
            'namaguru' => $this->request->getPost('namaguru'),
            'nomorguru' => $this->request->getPost('nomorguru'),
            'jenkel' => $this->request->getPost('jenkel'),
            'alamatguru' => $this->request->getPost('alamatguru'),
        ];
        $Guru_model->insert($data);
        return redirect()->to('/admin/guru');
    }

    public function deleteGuru($id_guru) 
    {
        $this->Guru_model->deleteGuru($id_guru);

        return redirect()->to('/admin/guru')
            ->with('success', 'Item deleted successfully.');
    }

    public function updatedataguru($id_guru)
    {
        $Guru_model = new Guru_model();
        $data = [
            'namaguru' => $this->request->getPost('namaguru'),
            'nomorguru' => $this->request->getPost('nomorguru'),
            'jenkel' => $this->request->getPost('jenkel'),
            'alamatguru' => $this->request->getPost('alamatguru'),
        ];

        $Guru_model->update($id_guru, $data);
        return redirect()->to('/admin/guru')
            ->with('success', 'Item updated successfully.');    
    }
 
    public function viewguru()
    {
        $databases['guru'] = $this->Pegawai_model->getPegawai();
        $data = [
            'title' => 'Admin | Insert Data guru',
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/guru/view', $databases);
        echo view ('Template/Footer');
        
    }
    public function searchguru()
    {
        $keyword = $this->request->getGet('keyword');

        $Guru_model = new Guru_model();

        if (!empty($keyword)) {
            $databases['guru'] = $Guru_model->like('namaguru', $keyword)->findAll();
            $databases['keyword'] = $keyword;
        } else {
            $databases['guru'] = $Guru_model->findAll();
            $databases['keyword'] = '';
        }

        $data = [
            'title' => 'Search'
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/guru/view', $databases);
        echo view ('Template/Footer');
    }


    // Siswa
    public function adminsiswa()
    {
        $data = [
            'title' => 'Admin | Data Siswa',
        ];
        $databases['siswa'] = $this->Siswa_model->getSiswa();
        echo view ('Template/Header', $data);
        echo view ('admin/siswa/siswa', $databases);
        echo view ('Template/Footer');
    }

    public function tambahdatasiswa()
    {
        $data = [
            'title' => 'Admin | Insert Data Siswa',
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/siswa/tambahdata');
        echo view ('Template/Footer');
    }

    public function tambahSiswa()
    {
        $Siswa_model = new Siswa_model();
        $data = [
            'namasiswa' => $this->request->getPost('namasiswa'),
            'nomorsiswa' => $this->request->getPost('nomorsiswa'),
            'jenkel' => $this->request->getPost('jenkel'),
            'alamatsiswa' => $this->request->getPost('alamatsiswa'),
        ];
        $Siswa_model->insert($data);
        return redirect()->to('/admin/siswa');
    }

    public function deleteSiswa($id) 
    {
        $this->Siswa_model->deleteSiswa($id);

        return redirect()->to('/admin/siswa')
            ->with('success', 'Item deleted successfully.');
    }

    public function updatedatasiswa1($id_siswa)
    {
        $data = [
            'title' => 'Admin | Update Data Pegawai',
        ];

        $Siswa_model = new Siswa_model();
        $databases['siswa'] = $Siswa_model->find($id_siswa);
        echo view ('Template/Header', $data);
        echo view ('admin/siswa/updatedata', $databases);
        echo view ('Template/Footer');
    }

    public function updatedatasiswa($id_siswa)
    {
        $Siswa_model = new Siswa_model();
        $data = [
            'namasiswa' => $this->request->getPost('namasiswa'),
            'nomorsiswa' => $this->request->getPost('nomorsiswa'),
            'jenkel' => $this->request->getPost('jenkel'),
            'alamatsiswa' => $this->request->getPost('alamatsiswa'),
        ];

        $Siswa_model->update($id_siswa, $data);
        return redirect()->to('/admin/siswa')
            ->with('success', 'Item updated successfully.');
    }

//carisiswa
    public function searchsiswa()
    {
        $keyword = $this->request->getGet('keyword');

        $Siswa_model = new Siswa_model();

        if (!empty($keyword)) {
            $databases['siswa'] = $Siswa_model->like('namasiswa', $keyword)->findAll();
            $databases['keyword'] = $keyword;
        } else {
            $databases['siswa'] = $Siswa_model->findAll();
            $databases['keyword'] = '';
        }

        $data = [
            'title' => 'Search'
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/siswa/view', $databases);
        echo view ('Template/Footer');
    }

    // Siswa
    //tamu
    public function admintamu()
    {
        $data = [
            'title' => 'Admin | Data tamu',
        ];
        $databases['tamu'] = $this->Tamu_model->getTamu();
        echo view ('Template/Header', $data);
        echo view ('admin/tamu/tamu', $databases);
        echo view ('Template/Footer');
    }

    public function updatedatatamu1($id_tamu)
    {
        $data = [
            'title' => 'Admin | Update Data Tamu',
        ];

        $Tamu_model = new Tamu_model();
        $databases['tamu'] = $Tamu_model->find($id_tamu);
        echo view ('Template/Header', $data);
        echo view ('admin/tamu/updatedata', $databases);
        echo view ('Template/Footer');
    }

    public function tambahdatatamu()
    {
        $data = [
            'title' => 'Admin | Insert Data tamu',
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/tamu/tambahdata');
        echo view ('Template/Footer');
    }

    public function tambahtamu()
    {
        $Tamu_model = new Tamu_model();
        $data = [
            'namatamu' => $this->request->getPost('namatamu'),
            'nomortamu' => $this->request->getPost('nomortamu'),
            'jenkel' => $this->request->getPost('jenkel'),
            'alamattamu' => $this->request->getPost('alamattamu'),
        ];
        $Tamu_model->insert($data);
        return redirect()->to('/admin/tamu');
    }

    public function deletetamu($id_tamu) 
    {
        $this->Tamu_model->deleteTamu($id_tamu);

        return redirect()->to('/admin/tamu')
            ->with('success', 'Item deleted successfully.');
    }

    public function updatedatatamu($id_tamu)
    {
        $Tamu_model = new Tamu_model();
        $data = [
            'namatamu' => $this->request->getPost('namatamu'),
            'nomortamu' => $this->request->getPost('nomortamu'),
            'jenkel' => $this->request->getPost('jenkel'),
            'alamattamu' => $this->request->getPost('alamattamu'),
        ];

        $Tamu_model->update($id_tamu, $data);
        return redirect()->to('/admin/tamu')
            ->with('success', 'Item updated successfully.');    
    }
 
    public function viewtamu()
    {
        $databases['tamu'] = $this->Pegawai_model->getTamu();
        $data = [
            'title' => 'Admin | Insert Data tamu',
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/tamu/view', $databases);
        echo view ('Template/Footer');
        
    }
    public function searchtamu()
    {
        $keyword = $this->request->getGet('keyword');

        $Tamu_model = new Tamu_model();

        if (!empty($keyword)) {
            $databases['tamu'] = $Tamu_model->like('namatamu', $keyword)->findAll();
            $databases['keyword'] = $keyword;
        } else {
            $databases['tamu'] = $Tamu_model->findAll();
            $databases['keyword'] = '';
        }

        $data = [
            'title' => 'Search'
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/Tamu/view', $databases);
        echo view ('Template/Footer');
    }

    //kegiatan

    public function adminkegiatan()
    {
        $data = [
            'title' => 'Admin | Data kegiatan',
        ];
        $databases['kegiatan'] = $this->Kegiatan_model->getKegiatan();
        echo view ('Template/Header', $data);
        echo view ('admin/kegiatan/kegiatan', $databases);
        echo view ('Template/Footer');
    }

    

    public function updatedatakegiatan1($id_kegiatan)
    {
        $data = [
            'title' => 'Admin | Update Data Kegiatan',
        ];

        $Kegiatan_model = new Kegiatan_model();
        $databases['kegiatan'] = $Kegiatan_model->find($id_kegiatan);
        echo view ('Template/Header', $data);
        echo view ('admin/kegiatan/updatedata', $databases);
        echo view ('Template/Footer');
    }

    public function tambahdataKegiatan()
    {
        $data = [
            'title' => 'Admin | Insert Data kegiatan',
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/kegiatan/tambahdata');
        echo view ('Template/Footer');
    }

    public function tambahkegiatan()
    {
        $Kegiatan_model = new Kegiatan_model();
        $data = [
            'namakeg' => $this->request->getPost('namakeg'),
            'waktukeg' => $this->request->getPost('waktukeg'),
            'perihal' => $this->request->getPost('perihal'),
            
        ];
        $Kegiatan_model->insert($data);
        return redirect()->to('admin/kegiatan');
    }

    public function deletekegiatan($id_kegiatan) 
    {
        $this->Kegiatan_model->deleteKegiatan($id_kegiatan);

        return redirect()->to('/admin/kegiatan')
            ->with('success', 'Item deleted successfully.');
    }

    
        public function updatedatakegiatan($id_kegiatan)
    {
        $Kegiatan_model = new Kegiatan_model();
        $data = [
            'namakeg' => $this->request->getPost('namakeg'),
            'waktukeg' => $this->request->getPost('waktukeg'),
            'perihal' => $this->request->getPost('perihal'),
        ];

        $Kegiatan_model->update($id_kegiatan, $data);
        return redirect()->to('/admin/kegiatan')
            ->with('success', 'Item updated successfully.');    
    }

       
    
 
    public function viewkegiatan()
    {
        $databases['kegiatan'] = $this->Pegawai_model->getKegiatan();
        $data = [
            'title' => 'Admin | Insert Data kegiatan',
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/kegiatan/view', $databases);
        echo view ('Template/Footer');
        
    }
    public function searchkegiatan()
    {
        $keyword = $this->request->getGet('keyword');

        $Kegiatan_model = new Kegiatan_model();

        if (!empty($keyword)) {
            $databases['kegiatan'] = $Kegiatan_model->like('namakegiatan', $keyword)->findAll();
            $databases['keyword'] = $keyword;
        } else {
            $databases['kegiatan'] = $kegiatan_model->findAll();
            $databases['keyword'] = '';
        }

        $data = [
            'title' => 'Search'
        ];
        echo view ('Template/Header', $data);
        echo view ('admin/kegiatan/view', $databases);
        echo view ('Template/Footer');
    }


}
