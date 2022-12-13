<?php
$n = $_POST['n'];

//Gerar número aleatório:
function random()
{
// Gerar número com um "alcance" específico
    $randomN = rand(10,20);
    print_r("\n");

    return $randomN;
}
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
    echo "Números aleatórios gerados até: $n";
    ?>
    <br>

    <?php
    
    do{
        
    $RanFunction = Random();
    echo "$RanFunction";

    }while($RanFunction != $n)
    ?>
</body>
</html>