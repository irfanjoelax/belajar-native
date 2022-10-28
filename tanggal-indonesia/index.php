<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggal Indonesia</title>
</head>

<body>
    <form action="tanggal.php" method="POST">
        <h2>Konversi Tanggal Indonesia</h2>
        <div style="margin-bottom: 1rem;">
            <label for="">Date now</label>
            <input type="date" name="date" value="<?php echo date('Y-m-d') ?>" required>
        </div>
        <div style="margin-bottom: 1rem;">
            <button type="submit">Konversi Sekarang</button>
        </div>
    </form>
</body>

</html>