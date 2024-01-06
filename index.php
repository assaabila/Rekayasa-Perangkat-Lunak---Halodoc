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
<td align="center" width="600px"><h2><br/><br/>Solusi Kesehatan Terlengkap</h2><br/>Chat dokter, kunjungi rumah sakit, beli obat, cek lab dan update informasi seputar kesehatan, semua bisa di Halodoc!</td>
</tr>
<tr><td align="center"><br/><br/><img src="image/halodoc index.jpg" alt="halodoc" width="550" height="250"></td></tr>
<tr><td align="center"><h3><br/><br/>Tentang halodoc</h3>
<hr width="200"></td></tr>
<tr><td><h3><br/><br/>Apakah konsul Halodoc gratis?</h3></td></tr>
<tr><td>Biaya penggunaan layanan Chat dengan Dokter digunakan untuk meningkatkan mutu pelayanan kami dan pengalamanmu dalam bertransaksi di Halodoc. Saat ini nominal biaya layanan yang kami tetapkan adalah Rp1.000 per pesanan.</td></tr>
<tr><td><h3><br/>Halodoc apakah bisa pakai BPJS?</h3></td></tr>
<tr><td>Adapun, pada tahap awal kerja sama ini, peserta Jaminan Kesehatan Nasional-Kartu Indonesia Sehat (JKN-KIS) akan mendapatkan akses dan layanan kesehatan secara digital Halodoc, seperti konten promosi kesehatan yang terintegrasi dengan aplikasi Mobile JKN BPJS Kesehatan.</td></tr>
<tr><td><h3><br/>Bagaimana cara bertanya di Halodoc?</h3></td></tr>
<tr><td>Pilih 'Chat dengan Dokter' pada menu bagian bawah layar. Cari dan pilih dokter sesuai dengan kebutuhanmu. Jika dokter mengizinkan konsultasi terjadwal, profil dokter akan memiliki tombol 'Jadwalkan', atau kamu mendapatkan pilihan untuk 'Konsultasi Nanti' setelah kamu pilih 'Chat'. Pilih tanggal dan waktu konsultasi.</td></tr>
<tr><td><h3><br/><br/>Kebutuhan obat dan vitamin</h3><p>Halodoc memiliki fitur yang memudahkan akses kesehatan. Salah satunya memudahkan orang membeli obat saat sakit tanpa harus ke luar rumah, seperti obat batuk, flu, demam, maag, diare, alergi, sakit mata, sakit kulit, nyeri otot dan sendi, asma, diabetes, hipertensi, hingga penyakit jantung. 
    <br/>Bahkan, kamu dapat membeli kebutuhan kesehatan lainnya di bagian Vitamin, First Aid, Wanita, Kontrasepsi, Health Supplement, Consumer Goods, Ibu dan Anak, Medical Device, Stamina, Antibiotik, Herbal, Dietary, Antiseptik, dan lain - lain.
    Jika kamu ragu mengenai obat yang ingin dibeli, tanya dokter Halodoc di fitur Contact Doctor.<br/> Bicarakan keluhan kesehatan yang kamu alami dan jangan ragu bertanya mengenai cara penanganan yang tepat. Sebab bila dibutuhkan, dokter akan memberikan resep obat yang dapat dibeli langsung di fitur Pharmacy Delivery pada aplikasi Halodoc
    Ada dua jenis diskusi yang dapat dilakukan oleh pengguna Halodoc. Pertama, diskusi yang bersifat emergensi. Sebagian besar kasus ini dapat diselesaikan dengan anamnesa atau tindakan medis digital. Misalnya pada kasus kulit merah dan mata bengkak, dokter akan melihat kondisi lewat gambar yang dikirim atau video call untuk mengetahui gejala penyakit yang dialami. Jenis diskusi yang kedua adalah tindak lanjut (follow up) setelah diskusi pertama.</p></td></tr>
<tr><td align="center"><h3><br/><br/><br/>Belanja sesuai Kategori</h3></td></tr>
    <table cellspacing="60" bgcolor="lavender">
    <tr>
    <td width="50" height="50" align="center" valign="middle"><a href="https://www.halodoc.com/obat-dan-vitamin"><img src="image/susu.png" alt="susu" width="100" height="100"><br/>Susu</a></td>
    <td width="50" height="50" align="center" valign="middle"><a href="https://www.halodoc.com/obat-dan-vitamin"><img src="image/ibu.png" alt="ibu" width="100" height="100"><br/>Ibu&anak</a></td>
    <td width="50" height="50" align="center" valign="middle"><a href="https://www.halodoc.com/obat-dan-vitamin"><img src="image/nasal.png" alt="nasal" width="100" height="100"><br/>Nasal care</a></td>
    <td width="50" height="50" align="center" valign="middle"><a href="https://www.halodoc.com/obat-dan-vitamin"><img src="image/mata.png" alt="mata" width="100" height="100"><br/>Lensa kontak</a></td>
</tr>
</table>
</td>
<td align="center" width="200px" bgcolor="lightskyblue">
    <form><br/><br/>           
        <input class="search" type="search" placeholder="Search...">               
        <input class="button" type="submit" value="Search">       
        </form> <br/><br/>
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