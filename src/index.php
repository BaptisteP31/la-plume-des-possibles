<?php
    declare(strict_types= 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>La plume des possibles</title>
</head>
<body>
    <h1>La plume des possibles</h1>
    <?php
        require_once('database.php');
        echo getPoeme(1); 
    ?>
</body>
</html>