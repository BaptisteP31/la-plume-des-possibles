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

    <div class="container">
        <div class="poeme-du-jour">
            <h2>Le poème du jour</h2>
            <?php
                require_once('database.php');
                $poeme = getRandomPoeme();
                echo $poeme;
            ?>
        </div>
    </div>

    <div class="container">
    
    <?php
        require_once('database.php');

        $numberOfPoemes = getNumberOfPoemes();
        
        $max = 10;
        if($numberOfPoemes < 10) {
            $max = $numberOfPoemes;
        }

        $randomIds = array();
        for($i = 0; $i < $max; $i++)
        {
            $randomIds[] = mt_rand(1, $numberOfPoemes);
        }

        foreach($randomIds as $id) {
            try {
                $poeme = getPoeme($id);
                
                echo '<div class="poeme">';
                echo $poeme;
                echo '</div>';

            } catch(Exception $e) {
                continue;
            }
        }
    ?>
    </div>
</body>
</html>