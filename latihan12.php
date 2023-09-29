<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data POST</title>
    <link rel="stylesheet" href="syle.css">
</head>
<body>
    <div class="container">
    <h1>Form Data POST</h1>
    <form action="submit.php" method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Kirim Data">
    </form>
    </div>
</body>
</html>
