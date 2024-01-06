<!-- Panggil file koneksi, karena kita membutuhkan nya -->
<?php
  include "koneksi.php"
?>
<html>
<head>
     <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<title>Layout</title>
<body bgcolor="lightblue">
<table align="center" border="0" width="900px">
<!--header-->
<tr bgcolor="white">
<td colspan="2" height="90px"><img src="image/banner.jpg" alt='Logo klinik' width="1000" height="250"></td>
<!--tag dihilangkan-->
</tr>

<!--body-->
<tr>
<td width="600px" height="400px" bgcolor="white" valign="top">
<!--kolom body1-->
<table border="1">
<tr bgcolor="lavender">                                                
    <td align="center" width="200px"><a href=home.php>Home</a></td>
    <td align="center" width="200px"><a href=profile.php>Profile</a></td>
    <td align="center" width="200px"><a href=produk.php>Produk</a></td>
    <td align="center" width="200px"><a href=about-us.php>about us</a></td>
    <td align="center" width="200px"><a href="https://www.halodoc.com">Halodoc</a></td>
</tr>
</table>
<table>
<tr>
<td><h2>Solusi Kesehatan Terlengkap di Indonesia</h2></td>
</tr>
<tr>
    <td>Aplikasi kesehatan #1 di Indonesia dengan 20juta+ download</td>
<table bgcolor="lavender">
    <tr><br/><br/><br/>
        <td><img src="image/aplikasi.jpg" alt="apk" width="40" height="40"></td>
        <td><img src="image/aman.jpg" alt="aman" width="40" height="40"></td>
        <td><img src="image/kapan saja.jpg" alt="kapan saja" width="40" height="40"></td>
    </tr>
    <tr>
        <td><h3>Aplikasi terpercaya</h3></td>
        <td><h3>Mudah, aman dan praktis</h3></td>
        <td><h3>Kapan saja dan dimana saja</h3></td>
    </tr>
    <tr>
        <td>Dapatkan solusi kesehatan dari dokter tepercaya, tenaga medis tersertifikasi dan obat-obatan asli, dalam satu aplikasi!</td>
        <td>Dapatkan obat, vitamin dan berbagai macam kebutuhan kesehatanmu dengan cepat, 1 jam sampai!</td>
        <td>Konsultasi dokter 24 jam dan pesan tes lab di rumah, bisa pakai manfaat asuransi kesehatan juga!</td>
    </tr>
    </table>
<table>
    <tr cellpadding="30"><br/><br/><br/>
        <td><h3>Semua Kebutuhan Kesehatanmu dan Keluarga dalam Satu Aplikasi</h3>
        Coba Halodoc dari smartphone-mu sekarang. Mulai dari konsultasi dengan dokter umum & spesialis, beli obat & vitamin online, medical check-up, tes laboratorium dari rumah, cek gula darah dan diabetes, buat janji rumah sakit tanpa antre, hingga tes Covid-19 dan PCR dengan mudah dan praktis<td></td>
        <td><img src="image/halodoc service.jpg" alt="servive" width="300" height="200">
    </tr>
</table>
<table>
    <tr><br/><br/><br/>
        <td><h3>Chat dengan Dokter</h3>
        Konsultasi dokter online di Halodoc tersedia 24 jam. Tanya dokter umum dan dokter spesialis, bisa pakai asuransi kesehatan!<br/><a href="https://www.halodoc.com/tanya-dokter" bgcolor="lavender"><h3>Chat sekarang</h3></a></td>
        <td><img src="image/chat dokter.jpg" alt="chat dokter" width="150" height="300"></td>

    </tr>
</table>
<table>
    <tr>
        <td><img src="image/mentalhealt.jpg" alt="mentalhealt" width="300" height="200"></td>
            <td><h3>Kesehatan mental</h3>
            Fitur yang membantu mengetahui gambaran kondisi kesehatan mentalmu dengan bantuan profesional.<br/><a href="https://www.halodoc.com/kesehatan/kesehatan-mental"><h3>Kunjungi sekarang</h3></a></td>
        </td>
    </tr>
</table>
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
<br/>
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
<tr bgcolor="lavender">
<td colspan="2" height="120px" width="600">
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
</td>
</tr>
<p align="center">&copy; 2023 Halodoc. Hak Cipta Dilindungi Undang-undang.<i>Salsabila Fitriyani_D22.2022.03451</i></p>
</td>
<!--tag dihilangkan-->
</tr>
</body>
</head>
</html>