<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $komentar-$_POST['komentar'];
    echo "<h1>Data Komentar Anda</h1>"\
    echo "<hr>";
    if(!empty($nama))
    { echo "Nama Anda       :$nama <br>"; }
    if (!empty($email))
    { echo "Email Anda      :$email<br>"; }
    if(!empty($komentar))
    { echo "Komentar Anda   :$komentar<br>"; }
    ?>
    <a href="forminputkomentar.php">INPUT DATA LAGI<a>
</body>
</html>
