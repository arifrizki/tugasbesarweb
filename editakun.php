<?php
include("koneksi.php");
$no = $_GET['no'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Karyawan</title>
    </head>
    <body>
        <form method="post">
            <?php
             $queryselect = "SELECT * FROM user WHERE no=$no";
            $result = mysqli_query($koneksi, $queryselect);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            if (mysqli_num_rows($result) == 0) {
                echo 'sorry';
            } else {
                ?>
                <h3>FORM EDIT KARYAWAN</h3>
                <table border=1 cellspacing=0>
                    <tr>
                       <td>no</td><td>:</td>
                        <td><input type="text" name="no" value="<?php echo $row['no']; ?>"size="50"/></td>
                    </tr>
                    <tr>
                        <td>USERNAME</td><td>:</td>
                        <td><input type="text" name="username" value="<?php echo $row['username']; ?>"size="50"/></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td><td>:</td>
                        <td><input type="text" name="password" value=" <?php echo $row['password']; ?>" size="50"/></td>
                    </tr>
                    <tr>
                        <td>LEVEL</td><td>:</td>
                        <td><input type="text" name="level" value=" <?php echo $row['level']; ?>" style="width: 300px;"/></td>
                    </tr>
						<td colspan=3 align="center"><input type="submit" name="submit"/></td>
                    </tr>	
                </table>
            </form>

            <?php
        }
        if (isset($_POST['submit'])) {
            $no = $_POST['no'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $level = $_POST['level'];
		    $queryupdate = "UPDATE user SET no='$no',
			username='$username',password='$password',level='$level' WHERE no='$no'";
            if (mysqli_query($koneksi, $queryupdate)) {
                echo "Data Diubah";
                header("Location: tambahakun.php");
            } else {
                echo "Error" . $queryupdate . "<br>" . mysqli_error($koneksi);
            }
            mysqli_close($koneksi);
        }
        ?>
    </body>
</html>