
<?php
include("koneksi.php");?>
<?PHP include("inc/navbar.php"); ?>
<h4> FORM INPUT TRANSAKSI</h1>

<html>
    <head>
        <title>Stock Barang User</title>
        <meta name='Author' content='yanimania'/>
        <meta name='Description' content='Daftar Siswa'/>
        <link rel='shortcut icon' type='image icon' href='smk.jpeg'/>
        <link rel='stylesheet' type='text/css' href='bootstrap/bootstrap.css'/>
        <script src="js/jquery.min.js"></script>
        <body style='background:url(<?PHP echo "bootstrap/3.jpg"; ?>) fixed center;'>
        <div class='container-fluid' style='background:url(<?PHP echo "bootstrap/3.jpg"; ?>) fixed center;'>
       
        
        
        </div>
        <div class='well' style='background:url(<?PHP echo "bootstrap/3.jpg"; ?>) fixed center;'>
            <div class='row-fluid'>

<form method="post" action="">
<table>
<tr><td>No Nota</td><td>:</td> 
<td><input type="text" name="nonota" id="nonota"></td></tr>
<tr><td>Kode</td><td>:</td> 
<td><input type="text" name="kode" id="kode"></td></tr>
<tr><td>Nama Barang</td><td>:</td>
<td><input type="text" name="nama" id="nama"></td></tr>
<tr><td>Harga jual  </td><td>:</td>
<td><input type="text" name="hrg_jual"></td></tr>
<tr><td>Jumlah barang </td><td>:</td>
<td><input type="text" name="stok"></td></tr>
<tr><td colspan=3 align="center"><input type="submit" name="submit" value="Submit"></ttd>
</tr>
</table>
<script type="text/javascript">

<?php echo $jsArray; ?>
</script>

    <?php
    if (isset($_POST['submit'])) {
        $nonota = $_POST['nonota'];
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $hrg_jual = $_POST['hrg_jual'];
		$stok = $_POST['stok'];
        $queryinsert = "INSERT INTO jual (nonota,kode,nama,hrg_jual,stok) values 
		('$nonota','$kode','$nama','$hrg_jual',$stok)";
        if (mysqli_query($koneksi, $queryinsert)) {
            echo "Berhasil ditambahkan";
            header("Location: laporantransaksi.php");
        } else {
            echo "Error" . $queryinsert . "<br>" . mysqli_error($koneksi);
        }
        mysqli_close($koneksi);
    }
    ?>
	<h3 align="center"> DAFTAR BARANG </h3> <!-- menulis daftar nama mahasiswa dengan h3 -->
		<table class= "table table-striped"> <!-- membuat tabel -->
			<tr><!-- membuat baris -->
   <th>Kode</th>
   <th>Nama </th>
   <th>Harga Jual </th>
   <th>Stok</th>
  
</tr>
<?php
$queryselecttugasbesar = "SELECT * FROM stockbarang";
$resulttugasbesar = mysqli_query($koneksi, $queryselecttugasbesar);
while($row = mysqli_fetch_array($resulttugasbesar, MYSQLI_ASSOC)){
   echo "<tr align=center>";
   echo "<td>".$row['kode']."</td>";
   echo "<td>".$row['nama']."</td>";
   echo "<td>".$row['hrg_jual']."</td>";
   echo "<td>".$row['stok']."</td>";
   echo "</tr>";
}
?>
</table>
</html>