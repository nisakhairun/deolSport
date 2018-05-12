<?php
  $link = new mysqli('localhost','root','','dbs_toko_sport');
  $alamatSitus = site_url();
  //query menampilkan seluruh idProduk
  $kProduk = $link -> query("SELECT * FROM tbl_produk;");
  //manampilkan table produk dan memecaah query menjadi array
  while($fProduk = $kProduk -> fetch_array()){
    $namaProduk = $fProduk['nama_produk'];
    $idProduk = $fProduk['id_produk'];
    $tipe  = $fProduk['tipe'];
    $size  = $fProduk['size'];
    $harga = $fProduk['harga'];
    $stock = $fProduk['stock'];

    echo "
    <table>
      <tr>
        <td>Nama Produk</td><td>$namaProduk</td>
      </tr>
      <tr>
        <td>Harga</td><td>$harga</td>
      </tr>
      <tr>
        <td>Size</td><td>$size</td>
      </tr>
      <tr>
        <td>Stok</td><td>$stock</td>
      </tr>
      <tr>
        <td></td><td><a class='btn btn-primary btn-sm text-uppercase js-scroll-trigger' href='$alamatSitus/product/list/$idProduk'>Detail Produk</a></td>
      </tr>
    </table><hr/>
    ";
  }







?>
