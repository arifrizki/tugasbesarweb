<?php
	include("koneksi.php");
?>
<!DOCTYPE html>
<html>
    <head>
            
			
        <title>Stock Barang</title>
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
                            <a href='transaksi.php' class='btn btn-primary'><i class='icon icon-white icon-camera'></i> Penjualan</a>
                            <a href='laporantransaksi.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> Laporan Transaksi</a>
							<a href='galeri.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> Galeri</a>
							<a href='logout.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> LogOut</a>
                            <table style='margin-top:10px;background:white' class="table table-bordered table-striped table-hover">
                             
							 <h3 align="center"> DAFTAR BARANG </h3> <!-- menulis daftar nama mahasiswa dengan h3 -->
		<table class= "table table-striped"> <!-- membuat tabel -->
			<tr><!-- membuat baris -->
   <th>Kode</th>
   <th>Nama </th>
   <th>Harga Beli</th>
   <th>Harga Jual </th>
   <th>Stok</th>
   <th>Edit</th>
   <th>Hapus</th>
   <th>Tambah</th>
</tr>
<?php
$queryselecttugasbesar = "SELECT * FROM stockbarang";
$resulttugasbesar = mysqli_query($koneksi, $queryselecttugasbesar);
while($row = mysqli_fetch_array($resulttugasbesar, MYSQLI_ASSOC)){
   echo "<tr align=center>";
   echo "<td>".$row['kode']."</td>";
   echo "<td>".$row['nama']."</td>";
   echo "<td>".$row['hrg_beli']."</td>";
   echo "<td>".$row['hrg_jual']."</td>";
   echo "<td>".$row['stok']."</td>";
   echo "<td align=center><a href='editbarang.php?kode=$row[kode]'><img src=edit.png width=20 height=20/></a></td>";
   echo "<td align=center><a href='hapusbarang.php?kode=$row[kode]'><img src=delete.png width=20 height=20/></a></td>";
   echo "<td align=center><a href='tambahbarang.php?kode=$row[kode]'><img src=tambah.png width=30 height=30/></a></td>";
   echo "</tr>";
}
?>
</table>
<?PHP include("inc/footer.php"); ?>
    </body>
</html>