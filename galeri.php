<?php
	include("koneksi.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Siswa</title>
        <meta name='Author' content='yanimania'/>
        <meta name='Description' content='Daftar Siswa'/>
        <link rel='shortcut icon' type='image icon' href='smk.jpeg'/>
        <link rel='stylesheet' type='text/css' href='bootstrap/bootstrap.css'/>
        <script src="js/jquery.min.js"></script>
        <body style='background:url(<?PHP echo "bootstrap/3.jpg"; ?>) fixed center;'>
        <div class='container-fluid' style='background:url(<?PHP echo "bootstrap/3.jpg"; ?>) fixed center;'>
        <div class='well' style='background:url(<?PHP echo "bootstrap/3.jpg"; ?>) fixed center;'>
        <?PHP include("inc/navbar.php"); ?>
        
        </div>
        <div class='well' style='background:url(<?PHP echo "bootstrap/3.jpg"; ?>) fixed center;'>
            <div class='row-fluid'>
    
                
                <div class='span8'>
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
                    
                        
                        <p style='margin-top:10px' align='center'>
                            <a href='tambahakun.php' class='btn btn-primary'><i class='icon icon-black icon-home'></i> Tambah Account</a>
                            <a href='stockbarang.php' class='btn btn-primary'><i class='icon icon-white icon-user'></i> Stock Barang </a>
                            <a href='penjualan.php' class='btn btn-primary'><i class='icon icon-white icon-camera'></i> Penjualan</a>
                            <a href='laporantransaksi.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> Laporan Transaksi</a>
							<a href='galeri.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> Galeri</a>
							<a href='logout.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> LogOut</a>
                            <table style='margin-top:10px;background:white' class="table table-bordered table-striped table-hover">
                             
							 
							 <div class='span12'>
                    <h2><p align="center"><font color=black>GALERI</font></p></h2>
                    <center><br>
                    <ul><img src="toko3.jpg" width="500" height="300"/>
                        <h4><font color=black>
                            Toko Cemerlang Laptop
                        </font></h4><br>
                        <img src="toko2.jpg" width="500" height="300"/>
                        <h4><font color=black>
                            Pusat Laptop Second Berkualitas dan Bergaransi
                        </font></h4><br>
                        <img src="toko1.jpg" width="500" height="300"/>
                        <h4><font color=black>
                            Service Laptop Segala Kerusakan
                        </font></h4><br>
						<img src="toko4.jpg" width="500" height="300"/>
                        <h4><font color=black>
                            <h4>Ready Keyboard Laptop Segala Merek dan Harga Terjangkau</h4>
							
                        </font></h4><br>
						<img src="toko5.jpg" width="500" height="300"/>
                        <h4><font color=black>
                            <h4>Ready Juga Charger Laptop Segala Merek dan Harga Terjangkau</h4>
							
                        </font></h4><br>
                    </ul></center>
                </div>
		
}
?>
</table>
<?PHP include("inc/footer.php"); ?>
    </body>
</html>