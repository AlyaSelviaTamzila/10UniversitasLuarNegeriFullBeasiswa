<?php

include 'connect.php';



?>

<!DOCTYPE html>
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
                <li><a href="form-daftar.php" style="margin-left: 450px;">SignUp</a></li>
            </ul>
        </div>

        <div class = "header">
            <h1>Kuliah Gratis</h1> 
            <h3>10 Universitas Luar Negeri Tawaran Full Beasiswa</h3>
        </div>

        <div class = "dtr">
        </form>
            <table border = '1'>
            <h2>Data Pendaftaran</h2>
            <tr>
                <th>Nis</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
            </tr>
    
            <?php
            $query = "SELECT * FROM daftar";
            $result = mysqli_query($connect, $query);
            $num = mysqli_num_rows($result);
        
                if($num > 0){
                    $no = 1;
                    while($data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>". $data['nis'] ."</td>";
                        echo "<td>". $data['nama_lengkap'] . "</td>";
                        echo "<td>". $data['tgl_lahir'] . "</td>";
                        echo "<td>". $data['email'] . "</td>";
                        echo "</tr>";
                        $no++;
                    }
                }else{
                    echo "<td colspan = '4'>Tidak ada data</td>";
                }
            ?>
            </div>
            </table>
    </body>
</html>
