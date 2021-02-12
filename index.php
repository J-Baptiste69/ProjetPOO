<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$player1 = new Warrior('Cloup');
$player2 = new Magician('Vivi');
//$player2 = new Archer ('ola');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baston</title>
</head>
<body>
        <div>
            <p><?php
            while ($player1->isAlive() && $player2->isAlive()) {
                echo $player1->turn($player2) . '<br>';
                $result = "$player1->name a gagné !";
                if ($player2->isAlive()){
                    echo $player2->turn($player1) .'<br><br>';
                    $result = "$player2->name a gagné !";
                }
            } ?>

        </div>
    <p><?php echo '<br>' .$result; ?></p>

</body>
</html>