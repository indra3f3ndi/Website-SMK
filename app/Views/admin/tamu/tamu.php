        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper cust-body-guru">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Data tamu</h1>
                    <a href="/admin/tamu/tambahtamu" class="btn mt-3" style="background-color: #f2cf30; color: #fff; font-weight: 500;">Tambah Data</a>
                    <form action="<?= base_url('/admin/tamu/search') ?>" method="get">
                        <label for="keyword" class="sr-only">Kata Kunci</label>
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Masukkan kata kunci">
                      </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Tamu</li>
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
          <th scope="col">Nama Tamu</th>
          <th scope="col">Nomor Induk Tamu</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Alamat</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        $no = 0;
        foreach ($tamu as $databases):
          $no++;
          ?>
        <tr>
          <th scope="row"><?= $no; ?></th>
          <td><?= $databases['namatamu']; ?></td>
          <td><?= $databases['nomortamu']; ?></td>
          <td><?= $databases['jenkel']; ?></td>
          <td><?= $databases['alamattamu']; ?></td>

          <td><a href="<?= base_url('/tamu/update'. $databases['id_tamu']); ?>" class="btn btn-success">Edit</a></td>
          <td><a href="<?= base_url('admin/tamu/delete'. $databases['id_tamu']); ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
