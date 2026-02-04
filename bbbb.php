<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>form kartu pelajar</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="nama" placeholder="nama" required>
             <input type="number" name="umur" placeholder="umur" required>
              <input type="text" name="sekolah" placeholder="sekolah" required>
               <input type="text" name="kelas" placeholder="kelas" required>
                <input type="file" name="photo" placeholder="photo" required>
                <button type="submit" name="kirinm">buat kartu</button>
        </form>
    </div>
</body>
</html>
<?php
;set($_POST['kirim'])):
'=new pelajar();'