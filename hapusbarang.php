<?php 
	include("koneksi.php");
	$kode = $_GET['kode'];
 ?>
 <html>
 <head>
 	<title>Hapus Barang</title>
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
 </head>
 <body>
 	<form method="post">
 		<?php 
		$queryselecttugasbesar = "SELECT * FROM stockbarang WHERE kode=$kode";
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
 		 		<td> <input type="text" name="kode" disabled value=" 
 		 			<?php echo $row['kode']; ?>" size="50"/> </td>
 		 	</tr>
			
 		 	<tr>
 		 		<td colspan=3 align="center">
 		 			<input type="submit" name="submit" value="Hapus"/>
 		 			<input type="button" value="Cancel" onclick="window.location='stockbarang.php'">
 		 		</td>
 		 	</tr>
 		 </table>	
 	</form>
 	<?php 
 		}
 		if (isset($_POST['submit'])) {
 			$queryupdate = "DELETE FROM stockbarang WHERE kode=$kode";
 			if (mysqli_query($koneksi, $queryupdate)) {
 			echo "Data terhapus";
 			header("location: stockbarang.php");
 		}else{
 			echo "Error: ". $queryselect ."<br>". mysqli_error($koneksi);
 		}
 		mysqli_close($koneksi);
 	}
 	 ?>

 </body>
 </html>