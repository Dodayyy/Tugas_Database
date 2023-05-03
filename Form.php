<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>

<body>
    <h2>FORM TAMBAH MAHASISWA</h2>
    <form action="Simpan.php" method="POST">
        NIM : <br>
        <input type="text" name="txtnim"><br>
        Nama : <br>
        <input type="text" name="txtnama"><br>
        Jenis Kelamin : <br>
        <select name="txtjenkel">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        Tempat Tanggal Lahir : <br> <input type="text" name="txtlahir"><br>
        Nomor Hp: <br>
        <input type="text" name="txthp"><br> <button type="submit">Simpan</button>
    </form>
</body>

</html>