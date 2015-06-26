<?php
include("koneksi.php");
$kode = $_GET['kode'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Barang</title>
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
             $queryselect = "SELECT * FROM stockbarang WHERE kode=$kode";
            $result = mysqli_query($koneksi, $queryselect);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            if (mysqli_num_rows($result) == 0) {
                echo 'sorry';
            } else {
                ?>
                <h3>FORM EDIT barang</h3>
                <table border=1 cellspacing=0>
                    <tr>
                       <td>Kode</td><td>:</td>
                        <td><input type="text"  name="kode" disabled value="  <?php echo $row['kode']; ?>"</td>
                        
                    </tr>
                    <tr>
                        <td>Nama barang</td><td>:</td>
                        <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"size="50"/></td>
                    </tr>
                    <tr>
                        <td>harga beli</td><td>:</td>
                        <td><input type="text" name="hrg_beli" value=" <?php echo $row['hrg_beli']; ?>" size="50"/></td>
                    </tr>
                    <tr>
                        <td>harga jual</td><td>:</td>
                        <td><input type="text" name="hrg_jual" value=" <?php echo $row['hrg_jual']; ?>" style="width: 300px;"/></td>
                    </tr>
                    <tr>
                        <td> jumlah barang </td><td>:</td>
                        <td><input type="text" name="stok" value=" <?php echo $row['stok']; ?>" style="width: 300px;"/></td>
                    </tr>
                    <tr>
						<td colspan=3 align="center"><input type="submit" name="submit"/></td>
                    </tr>	
                </table>
            </form>

            <?php
        }
        if (isset($_POST['submit'])) {
          
            $nama = $_POST['nama'];
            $hrg_beli = $_POST['hrg_beli'];
            $hrg_jual = $_POST['hrg_jual'];
			$stok = $_POST['stok'];
		    $queryupdate = "UPDATE stockbarang SET kode='$kode',
			nama='$nama',hrg_beli='$hrg_beli',hrg_jual='$hrg_jual',stok='$stok' WHERE kode='$kode'";
            if (mysqli_query($koneksi, $queryupdate)) {
                echo "Data Diubah";
                header("Location: stockbarang.php");
            } else {
                echo "Error" . $queryupdate . "<br>" . mysqli_error($koneksi);
            }
            mysqli_close($koneksi);
        }
        ?>
    </body>
</html>