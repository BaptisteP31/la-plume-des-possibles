<?php

declare(strict_types= 1);
require_once('config.php');
require_once('Poeme.php');

function getPoeme(int $index) {
    $query = "SELECT * FROM POEME WHERE id='$index'";
    $result = mysqli_query($GLOBALS['conn'], $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return new Poeme((int)$row['id'], $row['titre'], $row['auteur'], $row['contenu']);
    } else {
        return 'Poème non trouvé';
    }
}

function getRandomPoeme() {
    $query = "SELECT * FROM POEME ORDER BY RAND() LIMIT 1";
    echo $query;
}