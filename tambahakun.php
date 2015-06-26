<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Akun</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<div class='well-shit' style='background:url(<?PHP echo "bootstrap/ca.jpg"; ?>) fixed center;'>
                        
                        <p style='margin-top:10px' align='center'>
                            <a href='tambahakun.php' class='btn btn-primary'><i class='icon icon-black icon-home'></i> Tambah Account</a>
                            <a href='stockbarang.php' class='btn btn-primary'><i class='icon icon-white icon-user'></i> Stock Barang </a>
                            <a href='transaksi.php' class='btn btn-primary'><i class='icon icon-white icon-camera'></i> Penjualan</a>
                            <a href='laporantransaksi.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> Laporan Transaksi</a>
							<a href='galeri.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> Galeri</a>
							<a href='logout.php' class='btn btn-primary'><i class='icon icon-white icon-star'></i> LogOut</a>
                    </div>
	<body>
		<div class="container">
      
      <div class="hero-unit">
       <h2> Form Pendaftaran </h2>
	   <form class="form-horizontal" method="post">
	   <div class="control-group">
	   <label class="control-label">Username</label>
	   <div class="controls"><input type="text"name="username" placeholder="Username"></div>
	   </div>
       <div class="control-group">
	   <label class="control-label">Password</label>
	   <div class="controls"><input type="password"name="password" placeholder="Password"></div>
	   </div>
	  <div class="control-group">
	   <label class="control-label">Level User</label>
	   <div class ="controls">
	   <select name ="level">
	   <option></option>
	   <option values="admin">admin</option>
	   <option values="karyawan">karyawan</option>
	   </select>
	   </div>
	   </div>
	   <div class="control-group">
	   <div class="controls">
	   <button type="submit" class="btn btn-info" name="submit">Submit</button>
	   </div>
	   </div>
	   </form>
		<?php
		include ("koneksi.php");
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password =($_POST['password']);
			$level = $_POST['level'];
			
			$sqlinsert= "INSERT INTO user (username,password,level) VALUES 
			('$username', '$password', '$level')";
			if (mysqli_query($koneksi,$sqlinsert)){
				echo"New record created successfully";
				echo '<META http-equiv="refresh" content="1;URL=tambahakun.php">';
			}else{
				echo "Error: ".$sqlinsert."<br/>".mysqli_error($koneksi);
			}
			mysqli_close($koneksi);
			}
			?>
			
                             
							 <h3 align="center"> DAFTAR KARYAWAN </h3> <!-- menulis daftar nama mahasiswa dengan h3 -->
		<table class= "table table-striped"> <!-- membuat tabel -->
			<tr><!-- membuat baris -->
   <th>NO</th>
   <th>USERNAME </th>
   <th>PASSWORD</th>
   <th>LEVEL </th>
   <th>Edit</th>
   <th>Hapus</th>
</tr>
<?php
$queryselecttugasbesar = "SELECT * FROM user";
$resulttugasbesar = mysqli_query($koneksi, $queryselecttugasbesar);
while($row = mysqli_fetch_array($resulttugasbesar, MYSQLI_ASSOC)){
   echo "<tr align=center>";
   echo "<td>".$row['no']."</td>";
   echo "<td>".$row['username']."</td>";
   echo "<td>".$row['password']."</td>";
   echo "<td>".$row['level']."</td>";
   echo "<td align=center><a href='editakun.php?no=$row[no]'><img src=edit.png width=20 height=20/></a></td>";
echo "<td align=center><a href='hapusakun.php?no=$row[no]'><img src=delete.png width=20 height=20/></a></td>";
   echo "</tr>";
}
?>
	  </div>

      <hr>
      <footer>
        <p>Zona Cemerlang Laptop</p>
      </footer>
    </div> 
	</body>
</html>
