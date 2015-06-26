<?php 
	include("koneksi.php");
	$no = $_GET['no'];
 ?>
 <html>
 <head>
 	<title>Hapus Karyawan</title>
 </head>
 <body>
 	<form method="post">
 		<?php 
		$queryselecttugasbesar = "SELECT * FROM user WHERE no=$no";
			$resulttugasbesar = mysqli_query($koneksi, $queryselecttugasbesar);
			$row = mysqli_fetch_array($resulttugasbesar, MYSQLI_ASSOC);
			if(mysqli_num_rows($resulttugasbesar) == 0){
				
		} else {
 		 ?>
 		 <h4><font color='red'>Apakah anda ingin mengapusnya?</font></h4>
 		 <table>
 		 	<tr>
 		 		<td>ID KARYAWAN</td>
 		 		<td>:</td>
 		 		<td> <input type="text" name="no" value=" 
 		 			<?php echo $row['no']; ?>" size="50"/> </td>
 		 	</tr>
 		 	<tr>
 		 		<td colspan=3 align="center">
 		 			<input type="submit" name="submit" value="Hapus"/>
 		 			<input type="button" value="Cancel" onclick="window.location='tambahakun.php'">
 		 		</td>
 		 	</tr>
 		 </table>	
 	</form>
 	<?php 
 		}
 		if (isset($_POST['submit'])) {
 			$queryupdate = "DELETE FROM user WHERE no=$no";
 			if (mysqli_query($koneksi, $queryupdate)) {
 			echo "Data terhapus";
 			header("location: tambahakun.php");
 		}else{
 			echo "Error: ". $queryselect ."<br>". mysqli_error($koneksi);
 		}
 		mysqli_close($koneksi);
 	}
 	 ?>

 </body>
 </html>