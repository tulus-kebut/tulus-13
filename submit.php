<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="gg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    echo "Nama: $name<br>";
    echo "Email: $email<br>";
}
?>
</body>
</html>

