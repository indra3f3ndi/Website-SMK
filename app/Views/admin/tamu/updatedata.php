<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update Data Tamu</h1>
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


  <form action="<?= base_url('/tamu/update'. $tamu['id_tamu'] )?>" method="post">
  <div class="mb-3">
    <label for="tamu" class="form-label">Nama Tamu</label>
    <input type="text" class="form-control" id="tamu" name="namatamu" value="<?= $tamu['namatamu'] ?>" required>
  </div>
  <div class="mb-3">
    <label for="nomortamu" class="form-label">Nomor Tamu</label>
    <input type="text" class="form-control" id="nomortamu" name="nomortamu" value="<?= $tamu['nomortamu'] ?>" required>
  </div>

  <select class="mb-3 mt-3" style="height: 2.8rem; width: 100%; outline: none; border: 0.5px gainsboro solid; border-radius: 5px;" required name="jenkel">
  <option selected value="">Jenis Kelamin</option>
  <option value="Laki-Laki">Laki - Laki</option>
  <option value="Perempuan">Perempuan</option>
</select>
  <div class="mb-3">
    <label for="alamattamu" class="form-label">Alamat Tamu</label>
    <input type="text" class="form-control" id="alamattamu" name="alamattamu" value="<?= $tamu['alamattamu'] ?>" required>
  </div>
  <button type="submit" class="btn" style="background-color: #f2cf30; color: #fff; font-weight: 500;">Update</button>
</form>     
  </div>
</div>
 