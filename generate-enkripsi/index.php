<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Enkripsi</title>
</head>

<body>
    <form action="encrypt.php" method="POST">
        <h2>Generate Enkripsi Text Anda</h2>
        <div style="margin-bottom: 1rem;">
            <label for="">Input Text</label>
            <input type="text" name="text" size="50" required>
        </div>
        <div style="margin-bottom: 1rem;">
            <button type="submit" name="md5">md5</button>
            <button type="submit" name="sha1">sha1</button>
            <button type="submit" name="hash">hash</button>
            <button type="submit" name="password_hash">password_hash</button>
    </form>
</body>

</html>