<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toodoo App</title>
</head>

<body>
    <h1>Toodoo App</h1>
    <a href="create.php">+ Tambah</a>
    <table border="1" width="100%" style="margin-top: 1rem;">
        <tr>
            <td width="10%">No.</td>
            <td width="70%">Task</td>
            <td width="20%">Action</td>
        </tr>
        <?php
        // WAJIB!! masukkan file koneksi ke database MySQL
        include 'connection.php';

        // variabel untuk penomoran table
        $no = 1;

        // variabel untuk menjalankan fungsi query MySQL dengan PHP
        $query = mysqli_query($conn, "SELECT * FROM todo ORDER BY id DESC");

        // lakukan pengulangan sejumlah data pada table 'todo' database
        while ($data = mysqli_fetch_array($query)) :
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?= $data['task'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
                    |
                    <a href="delete.php?id=<?= $data['id'] ?>">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>