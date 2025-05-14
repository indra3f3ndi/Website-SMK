<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper cust-body-siswa">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Data Siswa</h1>
                    <a href="/admin/siswa/tambahsiswa" class="btn mt-3" style="background-color: #f2cf30; color: #fff; font-weight: 500;">Tambah Data</a>
                    <a href="/report" class="btn mt-3" style="background-color: red; color: #fff; font-weight: 500;">Cetak PDF</a>
                    <form action="<?= base_url('/admin/siswa/search') ?>" method="get">
                        <label for="keyword" class="sr-only">Kata Kunci</label>
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Masukkan kata kunci">
                      </form>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Siswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 0;
                    foreach ($siswa as $databases):
                        $no++;
                    ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $databases['namasiswa']; ?></td>
                        <td><?= $databases['nomorsiswa']; ?></td>
                        <td><?= $databases['jenkel']; ?></td>
                        <td><?= $databases['alamatsiswa']; ?></td>
                        <td>
                            <a href="<?= base_url('/siswa/update' . $databases['id_siswa']); ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url('admin/siswa/delete' . $databases['id_siswa']); ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
