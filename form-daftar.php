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

        <div class = "daftar">
            <form action = "daftar.php" method="POST">
                <h1>Isi Data</h1>
                    <table>
                        <tr>
                            <td><label for="nis">NIS</label></td>
                            <td>:</td>
                            <td><input type="text" name="nis" placeholder="Masukkan NIS">
                        </tr>
                        <tr>
                            <td><label for="nama_lengkap">Nama Lengkap</label></td>
                            <td>:</td>
                            <td><input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                        </tr>
                        <tr>
                            <td><label for="tgl_lahir">Tanggal Lahir</label></td>
                            <td>:</td>
                            <td><input type="text" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td>:</td>
                            <td><input type="email" name="email" placeholder="Masukkan Email">
                        </tr>
                        <tr>
                            <td><button type="submit" class="button" name="daftar">Daftar</button></td>
                        </tr>
                    </table>
            </form>
        </div>
    </body>
</html>
