<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Dasar</title>
</head>

<body>
    <form action="result.php" method="POST">
        <h2>Kalkulator Dasar Hitung Matematika</h2>
        <div style="margin-bottom: 1rem;">
            <label for="">Angka (1)</label>
            <input type="number" name="angka_1" required>
        </div>
        <div style="margin-bottom: 1rem;">
            <label for="">Angka (2)</label>
            <input type="number" name="angka_2" required>
        </div>
        <div style="margin-bottom: 1rem;">
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
            <button type="submit" name="kali">Kali</button>
            <button type="submit" name="bagi">Bagi</button>
        </div>
    </form>
</body>

</html>