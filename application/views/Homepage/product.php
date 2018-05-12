<?php
 $link = new mysqli('localhost','root','','dbs_toko_sport');
 $alamatSitus = site_url();
?>

<section id="product" style="padding-top:20px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Product</h2>
        <h3 class="section-subheading text-muted" >We do have a lot of product in our studio.</h3>
      </div>
    </div>
    <div class="row text-center">

      <?php
      //tampilin table
      $kProduk = $link-> query("SELECT * FROM tbl_produk ORDER BY id DESC LIMIT 0,3;");
      //pecah query
      while($fProduk = $kProduk->fetch_array()){
        $namaProduk = $fProduk['nama_produk'];
        $idProduk = $fProduk['id_produk'];
        $tipe  = $fProduk['tipe'];
        $size  = $fProduk['size'];
        $harga = $fProduk['harga'];
        $stock = $fProduk['stock'];
        $urlink = base_url('asset');

        echo "
        <div class='col-md-4'>
          <span class='fa-stack fa-4x'>
              <img src='$urlink/img/product/$idProduk.jpg' style='width:100px; class='img-circle'>
          </span>
          <h4 class='service-heading'>$namaProduk</h4>
          <div style=\"font-family: 'Source Sans Pro', sans-serif;\">
          <table class='table table-striped'>
            <tr>
              <td>Type</td><td>$tipe</td>
            </tr>
            <tr>
              <td>Price</td><td>$harga</td>
            </tr>
            <tr>
              <td>Size</td><td>$size</td>
            </tr>
            <tr>
              <td>Stock</td><td>$stock</td>
            </tr>
            <tr>
              <td colspan='2'><a class='btn btn-primary btn-sm text-uppercase js-scroll-trigger' href='$alamatSitus/product/list/$idProduk'>Detail Produk</a></td>
            </tr>
          </table>
          </div>
        </div>
        ";
        }
        ?>


      <div class="col-md-12" style="padding-top:100px;">
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo site_url('product') ?>"> More Product </a>
      </div>
    </div>
  </div>
</section>
