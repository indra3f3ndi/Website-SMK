<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Insert Data Kegiatan</h1>
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
      <form action="/kegiatan/updatedata" method="post">
        <div class="mb-3">
          <label for="namakeg" class="form-label">Nama Kegiatan</label>
          <input type="text" class="form-control" id="namakeg" name="namakeg" required>
        </div>
        <div class="mb-3">
          <label for="waktukeg" class="form-label">Waktu Kegiatan</label>
          <input type="date" class="form-control" id="waktukeg" name="waktukeg" required>
        </div>
        <div class="mb-3">
          <label for="perihal" class="form-label">Perihal</label>
          <input type="text" class="form-control" id="perihal" name="perihal" required>
        </div>
        <button type="submit" class="btn" style="background-color: #f2cf30; color: #fff; font-weight: 500;">Tambah</button>
      </form>     
    </div>
  </div>
</div>
