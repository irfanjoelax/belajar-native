<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toodoo App</title>
</head>

<body>
    <form action="store.php" method="POST">
        <h2>Form Create Toodoo App</h2>
        <div style="margin-bottom: 1rem;">
            <label for="">Your Task: </label>
            <input type="string" name="task" size="100" required>
        </div>
        <div style="margin-bottom: 1rem;">
            <button type="submit">Tambahkan</button>
        </div>
    </form>
</body>

</html>