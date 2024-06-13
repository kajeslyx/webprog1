<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>BUKU TAMU</h1>
    <p style="text-transform : capitalize;">Komentar dan saran anda sangat kami butuhkan <br> untuk meningkatkan kualitas situs kami</p>
    <hr>
    <form action="tampilkomentar.php" method="post">
        <pre style="fontsize=12px">
Nama Anda       : <input type="text" name="nama" size="24">
Email Anda      : <input type="text" name="email" size="24">
Komentar Anda   : <textarea name="komentar" id="" cols="28" rows="10"></textarea>
        </pre>
        <input type ="submit" value="Kirim"><input type="reset" value="Batal">
    </form>
</body>
</html>