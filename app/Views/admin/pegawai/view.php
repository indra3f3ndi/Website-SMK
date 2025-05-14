        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper cust-body">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Data Pegawai</h1>
                    <div class="input-box">
                      <a href="/admin/pegawai/tambahpegawai" class="btn mt-3" style="background-color: #f2cf30; color: #fff; font-weight: 500;">Tambah Data</a>
                    </div>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pegawai</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Alamat</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 0;
        foreach ($pegawai as $databases):
          $no++;
          ?>
        <tr>
          <th scope="row"><?= $no; ?></th>
          <td><?= $databases['namapegawai']; ?></td>
          <td><?= $databases['jenkel']; ?></td>
          <td><?= $databases['alamat']; ?></td>

          <td><a href="<?= base_url('admin/pegawai/update'. $databases['id']); ?>" class="btn btn-success">Edit</a></td>
          
          <td><a href="<?= base_url('admin/pegawai/delete'. $databases['id']); ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
