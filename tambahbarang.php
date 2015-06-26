<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
    <head><title>FORM tambah Barang</title>
    <body>
        <form method="post" action="">
            <table>
                <h4> FORM TAMBAH BARANG</h1>
                    <tr><td>Nama barang </td><td>:</td>
                        <td><input type="text" name="nama"></td></tr>
                    <tr><td>Harga beli </td><td>:</td>
                        <td><input type="text" name="hrg_beli"></td></tr>
                    <tr><td>Harga jual  </td><td>:</td>
                        <td><input type="text" name="hrg_jual"></td></tr>
					<tr><td>Jumlah barang </td><td>:</td>
                        <td><input type="text" name="stok"></td></tr>
                    <tr><td colspan=3 align="center"><input type="submit" name="submit" value="Submit"></ttd>
                    </tr>
            </table>
        </form>
    </body>
    <?php
    if (isset($_POST['submit'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $hrg_beli = $_POST['hrg_beli'];
        
        $hrg_jual = $_POST['hrg_jual'];
		$stok = $_POST['stok'];
        $queryinsert = "INSERT INTO stockbarang (kode,nama,hrg_beli,hrg_jual,stok) values 
		('$kode','$nama','$hrg_beli','$hrg_jual',$stok)";
        if (mysqli_query($koneksi, $queryinsert)) {
            echo "Berhasil ditambahkan";
            header("Location: stockbarang.php");
        } else {
            echo "Error" . $queryinsert . "<br>" . mysqli_error($koneksi);
        }
        mysqli_close($koneksi);
    }
    ?>
</html>
