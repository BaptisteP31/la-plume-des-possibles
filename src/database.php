<?php

declare(strict_types= 1);
require_once('config.php');
require_once('Poeme.php');

function getNumberOfPoemes() {
    $query = "SELECT COUNT(*) FROM POEME";
    $result = mysqli_query($GLOBALS['conn'], $query);
    $row = mysqli_fetch_assoc($result);
    return (int)$row['COUNT(*)'];
}

function getPoeme(int $index) {
    $query = "SELECT * FROM POEME WHERE id='$index'";
    $result = mysqli_query($GLOBALS['conn'], $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return new Poeme((int)$row['id'], $row['titre'], $row['auteur'], $row['contenu'], $row['date_creation']);
    } else {
        throw new Exception('Poème non trouvé');
    }
}

function getRandomPoeme() : Poeme {
    $query = "SELECT * FROM POEME ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($GLOBALS["conn"], $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return new Poeme((int)$row['id'], $row['titre'], $row['auteur'], $row['contenu'], $row['date_creation']);
    } else {
        throw new Exception('Poème non trouvé');
    }
}