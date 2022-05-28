<div class="container-fluid">
    <h3><?php echo $title; ?></h3>
</div>
<br>
<form method="post" action="<?php echo base_url('home/proses_tambah_data') ; ?>" >
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-sm-2 col-form-label">Stok Barang</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="stok">
  </div>
  </div>
    <div class="form-group row">
    <label for="harga" class="col-sm-2 col-form-label">Harga Barang</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="harga">
    </div>
  </div>
    <div class="form-group row">
    <label for="harga" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>
</form>