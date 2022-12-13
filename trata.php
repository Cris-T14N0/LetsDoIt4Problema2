<?php
$n = $_POST['n'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        function random(n1)
        {
            do
            {
                // Gerar número com um "alcance" específico
                $ramdomN = rand(10,20);
                print_r($randomNumber);
                print_r("\n");

            }while ($randomN != $n)
        }
    ?>

</body>
</html>