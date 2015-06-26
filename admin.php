<?php
// memulai session
session_start();
error_reporting(0);
if (isset($_SESSION['level']))
{
    // jika level admin
    if ($_SESSION['level'] == "admin")
   {   
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "karyawan")
   {
       header('location:user.php');
   }
}
if (!isset($_SESSION['level']))
{
    header('location:../index.php');
}
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta name='Author' content='yanimania'/>
        <meta name='Description' content='Daftar Siswa'/>
        <link rel='shortcut icon' type='image icon' href='smk.jpeg'/>
        <link rel='stylesheet' type='text/css' href='bootstrap/bootstrap.css'/>
        <link rel="stylesheet" href="flexslider.css" type="text/css" media="screen"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="jquery.flexslider-min.js"></script>
<script src="js/jquery.min.js"></script>
    <body style='background:url(<?PHP echo "bootstrap/ab.jpg"; ?>) fixed center;'>

        <div class='container-fluid' style='background:url(<?PHP echo "bootstrap/ca.jpg"; ?>) fixed center;'>
            <div class='well' style='background:url(<?PHP echo "bootstrap/AC.jpg"; ?>) fixed center;'>
            <?PHP include("inc/navbar.php"); ?>
        </div>
            <div class='well' style='background:url(<?PHP echo "bootstrap/ca.jpg"; ?>) fixed center;'>
            
            <div class='row-fluid'>


                <div class='span12'>
                    <!-- untuk menampilkan pesan -->
                    <?PHP
                    if (isset($_GET['pesan'])) {
                        $pesan = $_GET['pesan'];
                        $isi = $_GET['isi'];
                        if ($pesan == 1) {
                            echo "<div class='alert alert-success'>
		<a class='close' data-dismiss='alert'>×</a>
		<b>Sukses!</b> $isi
		</div>";
                        }
                        if ($pesan == 2) {
                            echo "<div class='alert alert-danger'>
		<a class='close' data-dismiss='alert'>×</a>
		<b>Gagal!</b> $isi
		</div>";
                        }
                    }
                    ?>
                    <div class='well-shit' style='background:url(<?PHP echo "bootstrap/ca.jpg"; ?>) fixed center;'>
                        
                        <p style='margin-top:10px' align='center'>
                            <a href='tambahakun.php' class='btn btn-primary'><i class='icon icon-black icon-home'></i> Tambah Account</a>
                            <a href='stockbarang.php' class='btn btn-primary'><i class='icon icon-white icon-user'></i> Stock Barang </a>
                            <a href='transaksi.php' class='btn btn-primary'><i class='icon icon-white icon-camera'></i> Penjualan</a>
                            <a href='laporantransaksi.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> Laporan Transaksi</a>
							<a href='galeri.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> Galeri</a>
							<a href='logout.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> LogOut</a>
                    </div>

                    <div class="navbar navbar">
                        <div class="navbar" style='background:url(<?PHP echo "bootstrap/ca.jpg"; ?>) fixed center;'>
                            <div class="container">
                            <a class="brand"><img src='images.jpg' height='800px' width='600px'/></a>
                            <h3><font color=#590d26><p>ZONA ADMIN CEMERLANG LAPTOP</p></h3>
                                
                                <h4><p style="text-align:justify">Cemerlang Laptop
                                <br>Pusat Laptop Second Berkualitas dan Bergaransi - Ready Sparepart Laptop - Service Laptop Segala Kerusakan .<br>
                                <br>Zona Admin Cemerlang Laptop
                                <br>Silahkan lihat data stock </p></h4>
            
                            </div>
                        </div>
                    </div>

                </div>
                <?PHP include("inc/footer.php"); ?>
            </div>
        </div>
    </div>
    </body>
</html>