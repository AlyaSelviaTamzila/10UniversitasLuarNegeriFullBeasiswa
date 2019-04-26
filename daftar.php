!DOCTYPE html
<html>
    <head>
        <title>10 Universitas Luar Negeri Full Beasiswa</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <body>
        <div class = "menu">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="info.php">Info</a></li>
                <li><a href="tutorial.php">Tutorial</a></li>
                <li><a href="form-daftar.php" style="margin-left: 450px;">SignUp</a>
            </ul>
        </div>

        <div class = "header">
            <h1>Kuliah Gratis</h1> 
            <h3>10 Universitas Luar Negeri Tawaran Full Beasiswa</h3>
        </div>

        <?php
            include ("connect.php");

            if(isset($_POST['daftar'])){
                $nis = $_POST['nis'];
                $nama_lengkap = $_POST['nama_lengkap'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $email = $_POST['email'];

                $sql = "INSERT INTO daftar(nis,nama_lengkap,tgl_lahir,email)
                VALUES('$nis','$nama_lengkap','$tgl_lahir','$email')";
                $query = mysqli_query($connect,$sql);

                if(query){
                    header('Location:read.php?status=sukses');
                }else{
                    header('Location:form-daftar.php?status=sukses');
                }
            }
          ?>
     </body>
</html>