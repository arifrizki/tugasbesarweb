<?php
session_start(); 
              include ("koneksi.php");

              if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = $_POST['pass'];

                $sqlselect = "SELECT * FROM user WHERE username='$username' AND password='$password'";
                $result = mysqli_query($koneksi, $sqlselect);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                if (mysqli_num_rows($result) == 1 ) {
                  session_start(); // mengaktifkan SESSION
                  $_SESSION['nama'] = $row['nama'];
                  $_SESSION['level'] = $row['level'];

                  header("location: admin.php");
                }else {
                  header("location: logingagal.php");
                }
                mysqli_close($koneksi);
              }
             ?>
