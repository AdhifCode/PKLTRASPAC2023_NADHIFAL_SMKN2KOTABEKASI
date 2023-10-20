<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Identifikasi RGB</title>
</head>
<body>
    <h1>Identifikasi RGB lalu di jadikan image baru</h1>
    
    <form action="rgbtes.php" method="post" enctype="multipart/form-data">
        <label for="gambar">Pilih Gambar:</label>
        <input type="file" name="gambar" accept="image/*" required>
        <br>
        <input type="submit" value="Gas Kang">
    </form>
</body>
</html>
