<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengenal Tabel HTML</title>
</head>
<body>
    <table border="2">
        <tr>
            <td>Nama  </td>
            <td><?php echo $_POST["nama"]; ?></td>
        </tr>
        <tr>
            <td>Email  </td>
            <td><?php echo $_POST["email"]; ?></td>
        </tr>
        <tr>
            <td>Usia  </td>
            <td><?php echo $_POST["usia"]; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir  </td>
            <td><?php echo $_POST["tgl"]; ?></td>
        </tr>
        <tr>
            <td>Alamat  </td>
            <td><?php echo $_POST["alamat"]; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin  </td>
            <td><?php echo $_POST["jenis_kelamin"]; ?></td>
        </tr>
        <tr>
            <td>Status  </td>
            <td><?php echo $_POST["status"]; ?></td>
        </tr>
        <tr>
            <td>Hobi  </td>
            <td><?php echo $_POST["hobi"]; ?></td>
        </tr>
        <tr>
            <td>Lainnya </td>
            <td><?php echo $_POST["lainnya"]; ?></td>
        </tr>
    </table>
</body>
</html>
