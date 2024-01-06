<!-- Panggil file koneksi, karena kita membutuhkan nya -->
<?php
  include "koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>update data</title>

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<body bgcolor="4682A9">
<table align="center" border="0" width="900px">
<!--header-->
<tr bgcolor="white">
<td colspan="2" height="90px"><img src="image/banner.jpg" alt='Logo klinik' width="1000" height="250"></td>
<!--tag dihilangkan-->
</tr>

<!--body-->
<tr>
<td width="600px" height="400px" bgcolor="9EDDFF" valign="top">
<!--kolom body1-->
<table border="1">
<tr bgcolor="lavender">                                                
<td align="center" width="200px"><a href=home.html>Home</a></td>
<td align="center" width="200px"><a href=profile.html>Profile</a></td>
<td align="center" width="200px"><a href=produk.html>Produk</a></td>
<td align="center" width="200px"><a href=about-us.html>about us</a></td>
<td align="center" width="200px"><a href="https://www.halodoc.com">Halodoc</a></td>
</tr>
</table>
<body>

  <?php

    // Ambil data dari patameter url browser
    $id = $_GET['id'];

    // Query ambil data dari param jika ada.
    $query = "SELECT * FROM tb_siswa WHERE id = $id";
    // Hasil Query
    $result = mysqli_query($koneksi, $query);
    foreach($result as $data) {
  ?>

  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Form Update Data</h1>
      <form method="POST">
        <!-- Inputan tersembunyi untuk menyimpan data id yang digunakan untuk mengupdate data, lebih aman di banding menggunakan id dari params -->
        <input type="hidden" value="<?= $data['id'] ?>" name="id">
        <div class="mb-3">
          <label for="inputNis" class="form-label">No RM</label>
          <input type="number" class="form-control" id="inputNis" value="<?= $data['nis'] ?>" name="nis" placeholder="Masukan Nis Siswa">
        </div>
        <div class="mb-3">
          <label for="inputNama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="inputNama" value="<?= $data['nama'] ?>" name="nama" placeholder="Masukan Nama Siswa">
        </div>
        <div class="mb-3">
          <label for="inputKelas" class="form-label">alamat</label>
          <input type="text" class="form-control" id="inputKelas" value="<?= $data['kelas'] ?>" name="kelas" placeholder="Masukan alamat Siswa">
        </div>
        <div class="mb-3">
          <label for="inputKelas" class="form-label">diagnosa</label>
          <input type="text" class="form-control" id="inputdiagnosa" value="<?= $data['diagnosa'] ?>" name="diagnosa" placeholder="Masukan diagnosa Siswa">
        </div>
        <div class="mb-3">
          <label for="inputKelas" class="form-label">ruang</label>
          <input type="text" class="form-control" id="inputruang" value="<?= $data['ruang'] ?>" name="ruang" placeholder="Masukan ruang Siswa">
        </div>
        <div class="mb-3">
          <label for="inputKelas" class="form-label">telepon</label>
          <input type="text" class="form-control" id="inputtelepon" value="<?= $data['telepon'] ?>" name="telepon" placeholder="Masukan telepon Siswa">
        </div>
        <input name="daftar" type="submit" class="btn btn-primary" value="Update">
        <a href="home.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php } ?>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['daftar'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $id = $_POST['id'];
      $nis = $_POST['nis'];
      $nama = $_POST['nama'];
      $kelas = $_POST['kelas'];
      $diagnosa = $_POST['diagnosa'];
      $ruang = $_POST['ruang'];
      $telepon = $_POST['telepon'];

      // Membuat Query
      $query = "UPDATE tb_siswa SET nis = '$nis', nama = '$nama', kelas = '$kelas', diagnosa = '$diagnosa', ruang = '$ruang', telepon = '$telepon' WHERE id = '$id'";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: home.php");
      } else {
        echo "<script>alert('Data Gagal di update!')</script>";
      }

    }    

  ?>

</body>
</html>
  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['daftar'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $nis = $_POST['nis'];
      $nama = $_POST['nama'];
      $kelas = $_POST['kelas'];
      $diagnosa = $_POST['diagnosa'];
      $ruang = $_POST['ruang'];
      $telepon = $_POST['telepon'];

      // Membuat Query
      $query = "INSERT INTO tb_siswa (nis, nama, kelas, diagnosa, ruang, telepon) VALUES('".$nis."', '".$nama."', '".$kelas."', '".$diagnosa."', '".$ruang."', '".$telepon."')";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: home.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>
</td>
<td align="center" width="200px" bgcolor="lightskyblue">
    <form><br/><br/>           
        <input class="search" type="search" placeholder="Search...">               
        <input class="button" type="submit" value="Search">       
        </form> <br/><br/>
    <img src="image/halodoc.jpg" alt='vaksin' width="200" height="50"><br/><br/><br/>
<hr width="200">
<h4>Menu utama</h4>
<hr width="150">
<table>
<tr>
    <td width="200" height="50" align="center" valign="middle"><a href="https://www.halodoc.com/tanya-dokter"><img src="image/tanya dokter.png" alt="tanya dokter" width="100" height="100"><br/>Tanya dokter</a></td>
</tr>
<tr>
    <td width="200" height="50" align="center" valign="middle"><a href="https://www.halodoc.com/obat-dan-vitamin"><br/><img src="image/toko kesehatan.png" alt="toko kesehatan" width="100" height="100"><br/>Toko kesehatan</a></td>
</tr>
<tr>
    <td width="200" height="50" align="center" valign="middle"><a href="https://www.halodoc.com/janji-medis"><br/><img src="image/janji medis.png" alt="Janji medis" width="100" height="100"><br/>Janji medis</a></td>  
</tr>
<tr>
    <td width="200" height="50" align="center" valign="middle"><a href="https://www.halodoc.com/rumah-sakit"><br/><img src="image/janji rs.png" alt="janji rs" width="100" height="100"><br/>Buat janji RS</a></td>  
</tr>
<tr>
    <td width="200" height="50" align="center" valign="middle"><a href="https://www.halodoc.com/homelab/packages"><br/><img src="image/homelab.png" alt="homelab" width="100" height="100"><br/>Home Lab</a></td> 
</tr>
</table>
<hr width="200">
<h4>Layanan khusus Halodoc</h4>
Gunakan Layanan Khusus Halodoc untuk menunjang kesehatanmu. Mulai dari tes lab, vaksinasi, perawatan sesuai kondisi kesehatan, hingga informasi parenting.
<hr width="150">
<ul align="left">
<li><a href="https://www.halodoc.com/tanya-bidan/">Layanan bidan</a></li>
<li><a href="https://www.halodoc.com/janji-medis/departemen/covid-19-test">Tes covid-19</a></li>
<li><a href="https://www.halodoc.com/diabetic-care-id/">Perawatan diabetes</a></li>
<li><a href="https://www.halodoc.com/kesehatan-jantung/">Kesehatan jantung</a></li>
<li><a href="https://www.halodoc.com/janji-medis/departemen/vaksinasi-covid-19">Vaksin covid-19</a></li>
<li><a href="https://health.halodoc.com/skin-health-id/">Kesehatan kulit</a></li>
<li><a href="https://health.halodoc.com/sexual-health-id/">Kesehatan seksual</a></li>
<li><a href="https://www.halodoc.com/kesehatan-mental">Kesehatan mental</a></li>
<li><a href="https://www.halodoc.com/tanya-dokter/kategori/dokter-hewan">Kesehatan hewan</a></li>
<li><a href="https://www.halodoc.com/parent-homepage-id/">Parenting</a></li>
</ul>
<br/>
<hr width="200">
<h4>Penunjang Kesehatan</h4>
<hr width="150">
<ul align="left">
<li><a href="https://www.halodoc.com/stress-checker/">Cek stress</a></li>
<li><a href="https://www.halodoc.com/artikel/kalender-menstruasi-di-aplikasi-halodoc">Kalender menstruasi</a></li>
<li><a href="https://www.halodoc.com/bmi-calculator/">Kalkulator BMI</a></li>
<li><a href="https://www.halodoc.com/artikel/kalender-kehamilan-di-aplikasi-halodoc ">Kalender kehamilan</a></li>
<li><a href="https://www.halodoc.com/heart-risk-calculator/">Risiko jantung</a></li>
<li><a href="https://www.halodoc.com/diabetes-risk-calculator/">Risisko diabetes</a></li>
<li><a href="https://www.halodoc.com/artikel/pengingat-obat-di-aplikasi-halodoc">Pengingat obat</a></li>
<li><a href="https://halodoc.kitabisa.com/">Donasi</a></li>
<li><a href="https://www.halodoc.com/depression-test/home">Tes depresi</a></li>
<li><a href="https://www.halodoc.com/anxiety-test/home">Tes gangguan kecemasan</a></li>
</ul>
<hr width="200">
<a href="https://marketing.halodoc.com/hembor-2023/"><img src="image/hembor.webp" alt="hembor" width="250" height="150"></a>
<a href="https://marketing.halodoc.com/asma/"><br/><br/><img src="image/asma.webp" alt="asma" width="250" height="150"></a>
<a href="https://marketing.halodoc.com/halodoc-maybank-promo/"><br/><br/><img src="image/jaga sehat.webp" alt="sehat" width="250" height="150"></a>
</tr>  
</table>

<!--footer-->
<tr bgcolor="grey">
<td colspan="2" height="120px">
<table align="center" border="0" cellpadding="15" cellspacing="18">
<tr>
<td align="center">
<h4>Follow Us</h4>
<a href="https://www.instagram.com/halodoc/"><img src="image/instagram.png" alt="logo instagram" width="50" height="50"></a>
<a href="https://twitter.com/HaloDocID"><img src="image/twitter.png" alt="logo twitter" width="50" height="50"></a>
<a href="https://web.facebook.com/HalodocID/?_rdc=1&_rdr"><img src="image/facebook.jpg" alt="logo facebook" width="50" height="50"></a>
</td>
<td align="center">
<h4>Lokasi Kami</h4>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11201.212438860473!2d110.4054185918643!3d-6.982560348473014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b41831c7b9d%3A0xcb17f1f8f9b49a67!2sRumah%20Sakit%20Umum%20Pusat%20Dr.%20Kariadi!5e0!3m2!1sid!2sid!4v1696574398923!5m2!1sid!2sid" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</td align="center">
<td align="center">
<h4>Tentang Kami</h4>
<iframe width="200" height="150" src="https://www.youtube.com/embed/nMJ0obJJMlw?si=0KqjIKrPXX5rE7Gt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<iframe width="200" height="150" src="https://www.youtube.com/embed/SSTM2XaQ4u4?si=v_9LoZtNw7l9TM9C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</td>
</tr>
</table>
<p align="center">&copy; 2023 Halodoc. Hak Cipta Dilindungi Undang-undang.<i>Salsabila Fitriyani_D22.2022.03451</i></p>
</td>
<!--tag dihilangkan-->
</tr>
</body>
</head>
</html>