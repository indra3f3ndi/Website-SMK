        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper cust-body-guru">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Data Guru</h1>
                    <a href="/admin/guru/tambahguru" class="btn mt-3" style="background-color: #f2cf30; color: #fff; font-weight: 500;">Tambah Data</a>
                    <form action="<?= base_url('/admin/guru/search') ?>" method="get">
                        <label for="keyword" class="sr-only">Kata Kunci</label>
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Masukkan kata kunci">
                      </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Guru</li>
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
          <th scope="col">Nama Guru</th>
          <th scope="col">Nomor Induk Guru</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Alamat</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        $no = 0;
        foreach ($guru as $databases):
          $no++;
          ?>
        <tr>
          <th scope="row"><?= $no; ?></th>
          <td><?= $databases['namaguru']; ?></td>
          <td><?= $databases['nomorguru']; ?></td>
          <td><?= $databases['jenkel']; ?></td>
          <td><?= $databases['alamatguru']; ?></td>

          <td><a href="<?= base_url('/admin/guru/updatedata'. $databases['id_guru']); ?>" class="btn btn-success">Edit</a></td>
          <td><a href="<?= base_url('admin/guru/delete'. $databases['id_guru']); ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
