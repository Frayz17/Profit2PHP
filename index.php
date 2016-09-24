<?php 
    require __DIR__ . '/autoload.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $users = \App\Models\User::findAll();
            
            var_dump($users);
        ?>
    </body>
</html>
