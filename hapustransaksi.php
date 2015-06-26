<?php 
	include("koneksi.php");
	$nonota = $_GET['nonota'];
 ?>
 <html>
 <head>
 	<title>Hapus Transaksi</title>
 </head>
 <body>
 	<form method="post">
 		<?php 
		$queryselecttugasbesar = "SELECT * FROM jual WHERE nonota=$nonota";
			$resulttugasbesar = mysqli_query($koneksi, $queryselecttugasbesar);
			$row = mysqli_fetch_array($resulttugasbesar, MYSQLI_ASSOC);
			if(mysqli_num_rows($resulttugasbesar) == 0){
				
		} else {
 		 ?>
 		 <h4><font color='red'>Apakah anda ingin mengapusnya?</font></h4>
 		 <table>
 		 	<tr>
 		 		<td>ID barang</td>
 		 		<td>:</td>
 		 		<td> <input type="text" name="nonota" value=" 
 		 			<?php echo $row['nonota']; ?>" size="50"/> </td>
 		 	</tr>
 		 	<tr>
 		 		<td colspan=3 align="center">
 		 			<input type="submit" name="submit" value="Hapus"/>
 		 			<input type="button" value="Cancel" onclick="window.location='laporantransaksi.php'">
 		 		</td>
 		 	</tr>
 		 </table>	
 	</form>
 	<?php 
 		}
 		if (isset($_POST['submit'])) {
 			$queryupdate = "DELETE FROM jual WHERE nonota=$nonota";
 			if (mysqli_query($koneksi, $queryupdate)) {
 			echo "Data terhapus";
 			header("location: laporantransaksi.php");
 		}else{
 			echo "Error: ". $queryselect ."<br>". mysqli_error($koneksi);
 		}
 		mysqli_close($koneksi);
 	}
 	 ?>

 </body>
 </html>