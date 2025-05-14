<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Insert Data Pegawai</h1>
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
  <form action="/admin/pegawai/tambahpegawai" method="post">
  <div class="mb-3">
    <label for="pegawai" class="form-label">Nama Pegawai</label>
    <input type="text" class="form-control" id="pegawai" name="namapegawai" required>
  </div>
  <select class="mb-3 mt-3" style="height: 2.8rem; width: 100%; outline: none; border: 0.5px gainsboro solid; border-radius: 5px;" required name="jenkel">
  <option selected value="">Jenis Kelamin</option>
  <option value="Laki-Laki">Laki - Laki</option>
  <option value="Perempuan">Perempuan</option>
</select>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" required>
  </div>
  <button type="submit" class="btn" style="background-color: #f2cf30; color: #fff; font-weight: 500;">Tambah</button>
</form>     
  </div>
</div>
 