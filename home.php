<!-- Panggil file koneksi, karena kita membutuhkan nya -->
<?php
  include "koneksi.php"
?>
<html>
<head>
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<title>Layout</title>
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
<section class="row">
    <div class="col-md-6 offset-md-1 align-self-center"> 
      <h1 class="text-center">03451-Salsabila Fitriyani</h1>
      <a href="tambah.php" class="btn btn-primary mb-2">Tambah</a>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">No RM</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Alamat</th>
            <th scope="col">Diagnosa</th>
            <th scope="col">Ruang</th>
            <th scope="col">Telepon</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
          <?php
              // variable no digunakan untuk meng-increments field no pada table. Karena nanti kita akan melooping data hasil query select kita. 
              $no = 1;
              // Simpan query kita kedalam variable agar lebih rapi, dan bisa reusable.
              // Arti dari query di bawah adalah pilih semua data dari table tb_siswa.
              $query = "SELECT * FROM tb_siswa";
              // Eksekusi Query
              // Simpan hasil eksekusi query kita ke dalam variable. Di sini variable nya saya kasih nama result.
              $result = mysqli_query($koneksi, $query);
              // Done. Waktunya Looping
          ?>
        <tbody>
          <?php
            foreach ($result as $data){
              echo "
                <tr>
                  <th scope='row'>". $no++ ."</th>
                  <td>". $data["nis"] ."</td>
                  <td>". $data["nama"] ."</td>
                  <td>". $data["kelas"] ."</td>
                  <td>". $data["diagnosa"] ."</td>
                  <td>". $data["ruang"] ."</td>
                  <td>". $data["telepon"] ."</td>
                  <td> 
                    <a href='update.php?id=".$data["id"]."' type='button' class='btn btn-success'>Update</a>
                    <a href='delete.php?id=".$data["id"]."' type='button' class='btn btn-danger' onlick='return confirm('Yakin ingin menghapus data?')'>Delete</a>
                  </td>
                </tr>  
              ";
            }
          ?>
        </tbody>  
      </table>
    </div>
  </section>
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