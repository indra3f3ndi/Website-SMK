<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update Data Guru</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<div class="content">
  <div class="container-fluid"> 
    <?php if(session()->has('succes')): ?>
        <div class="alert alert-succes"><?= session('succes') ?></div>
    <?php elseif(session()->has('error')) :?>
        <div class="alert alert-danger"><?= session('error') ?></div>
    <?php endif; ?>


  <form action="<?= base_url('/admin/guru/updateguru'. $guru['id_guru'] )?>" method="post">
  <div class="mb-3">
    <label for="guru" class="form-label">Nama Guru</label>
    <input type="text" class="form-control" id="guru" name="namaguru" value="<?= $guru['namaguru'] ?>" required>
  </div>
  <div class="mb-3">
    <label for="nomorguru" class="form-label">Nomor Guru</label>
    <input type="text" class="form-control" id="nomorguru" name="nomorguru" value="<?= $guru['nomorguru'] ?>" required>
  </div>

  <select class="mb-3 mt-3" style="height: 2.8rem; width: 100%; outline: none; border: 0.5px gainsboro solid; border-radius: 5px;" required name="jenkel">
  <option selected value="">Jenis Kelamin</option>
  <option value="Laki-Laki">Laki - Laki</option>
  <option value="Perempuan">Perempuan</option>
</select>
  <div class="mb-3">
    <label for="alamatguru" class="form-label">Alamat Guru</label>
    <input type="text" class="form-control" id="alamatguru" name="alamatguru" value="<?= $guru['alamatguru'] ?>" required>
  </div>
  <button type="submit" class="btn" style="background-color: #f2cf30; color: #fff; font-weight: 500;">Update</button>
</form>     
  </div>
</div>
 