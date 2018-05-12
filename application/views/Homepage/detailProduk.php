<?php
 $link = new mysqli ('localhost','root','','dbs_toko_sport');
 //query menampilkan detail idProduk
 $kProduk = $link -> query("SELECT * FROM tbl_produk WHERE id_produk='$idProduk';");
 //fungsi memecah query menjadi array
 $fProduk = $kProduk -> fetch_array();
 $namaProduk = $fProduk['nama_produk'];
 $tipe  = $fProduk['tipe'];
 $size  = $fProduk['size'];
 $harga = $fProduk['harga'];
 $stock = $fProduk['stock'];


?>

<table>
  <tr>
    <td>Nama</td><td><?php echo "$namaProduk"; ?></td>
  </tr>
  <tr>
    <td>Tipe</td><td><?php echo "$tipe"; ?></td>
  </tr>
  <tr>
    <td>Size</td><td><?php echo "$size"; ?></td>
  </tr>
  <tr>
    <td>Harga</td><td><?php echo "$harga"; ?></td>
  </tr>
  <tr>
    <td>Stok</td><td><?php echo "$stock"; ?></td>
  </tr>
</table>
