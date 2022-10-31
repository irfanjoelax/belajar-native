<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toodoo App</title>
</head>

<body>
    <?php
    // WAJIB!! masukkan file koneksi ke database MySQL
    include 'connection.php';

    // mengambil link parameter ?id= pada URL Browser
    $id = $_GET['id'];

    // variabel untuk menjalankan fungsi query MySQL dengan PHP
    $query = mysqli_query($conn, "SELECT * FROM todo WHERE id='$id' LIMIT 1") or die(mysqli_error($conn));

    // variabel untuk menampung 1 data dari database yang dipilih
    $data = mysqli_fetch_array($query);
    ?>
    <form action="update.php" method="POST">
        <h2>Form Create Toodoo App</h2>
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <div style="margin-bottom: 1rem;">
            <label for="">Your Task: </label>
            <input type="string" name="task" value="<?php echo $data['task'] ?>" size="100" required>
        </div>
        <div style="margin-bottom: 1rem;">
            <button type="submit">Perbarui</button>
        </div>
    </form>
</body>

</html>