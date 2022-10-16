<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=10.0">
    <title>Membuat Form Sederhana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="http://fonts.cdnfonts.com/css/zombie" rel="stylesheet">
                
</head>
<body class="body">
    <div class="judul">FORMULIR PENDAFTARAN ONLINE</div>
    
    <br>
    
    <form action="test2_form-proses-pendaftaran.php" method="POST" class="form">
    <div class="told-to-input">Masukkan data diri anda di bawah ini</div>
    
    <br>
    
    <div>
        <label><b>Nama</b></label> <br>
        <input type="text" name="nama">
    </div>
    <div>
        <label><b>Email</b></label> <br>
        <input type="email" name="email">
    </div>
    <div>
        <label><b>Usia</b></label> <br>
        <input type="number" name="usia">
    </div>
    <div>
        <label><b>Tanggal Lahir</b></label> <br>
        <input type="date" name="tgl">
    </div>
    <div>
        <label><b>Alamat</b></label> <br>
        <textarea name="alamat"></textarea>
    </div>
    <div>
        <label><b>Jenis Kelamin</b></label> <br>
        <input type="radio" name="jenis_kelamin" value="Laki - Laki"> Laki-Laki <br>
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
    </div>
    <div>
        <label><b>Status</b></label> <br>
        <select name="status">
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
        </select>
    </div>
    <div>
        <label><b>Hobi</b></label> <br>
        <input type="checkbox" name="hobi" value="Sepak Bola"> Sepak Bola <br>
        <input type="checkbox" name="hobi" value="Basketball"> Basketball <br>
        <input type="checkbox" name="hobi" value="Bulu Tangkis"> Bulu Tangkis <br>
        <input type="checkbox" name="hobi" value="ngoding"> Ngoding <br>
    </div>
    <div>
        <label><b>Lainnya :</b></label>
        <input type="text" name="lainnya">
    </div>
    <div>
        <button class="submit">Submit</button>
    </div>
</form>
</body>
</html>