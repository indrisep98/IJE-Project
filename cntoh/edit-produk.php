<?php
    include 'header.php';
    include 'koneksi.php';
    $id_produk = $_GET['id_produk'];
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id_produk'");
    foreach ($query as $data)
?>

<div class="right_col" role="main">
          <div class="">
          	<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit <small>Produk</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" method="post" action="update/produk.php" novalidate="novalidate" enctype="multipart/form-data">
                      <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder="Nama Lengkap" required="required" type="text" value="<?php echo $data['nama']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto1">Foto Depan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <img src="images/<?php echo $data['foto1'] ?>" style="width: 100px; height: 80px"><br><br>
                          <input type="file" class="form-control" id="foto1" name="foto1" value="<?php echo $data['foto1']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto2">Foto Detail 1 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <img src="images/<?php echo $data['foto2'] ?>" style="width: 100px; height: 80px"><br><br>
                          <input type="file" class="form-control" id="foto2" name="foto2" value="<?php echo $data['foto2']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto3">Foto Detail 2 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <img src="images/<?php echo $data['foto3'] ?>" style="width: 100px; height: 80px"><br><br>
                          <input type="file" class="form-control" id="foto3" name="foto3" value="<?php echo $data['foto3']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto4">Foto Detail 3 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <img src="images/<?php echo $data['foto4'] ?>" style="width: 400px; height: 80px"><br><br>
                          <input type="file" class="form-control" id="foto4" name="foto4" value="<?php echo $data['foto4']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga">Harga Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="harga" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="harga" placeholder="Harga Produk" required="required" type="text" value="<?php echo $data['harga']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ket">Keterangan Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea style="height: 100%;" name="ket" id="ket" class="form-control col-md-7 col-xs-12" placeholder="Keterangan Produk" required="required"><?php echo $data['ket']; ?></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="dashboard"><button type="button" class="btn btn-primary">Batal</button></a>
                          <button id="send" type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin dengan Data tersebut?')">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php include 'footer.php'; ?>