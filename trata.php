<?php
$n = $_POST['n'];
$contador = 0;
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
    echo "Números aleatórios gerados até $n:";
    ?>

    <p>

    <?php
    
    //Ciclo de repetição
    do
    {
    
    $contador++;
    
    $RanFunction = Random();
    echo "$RanFunction";
    print_r("\n");

    //Parar quando o número gerado for igual ao nº que foi escolhido pelo utilizador
    } while ($RanFunction != $n)
    ?>

    <p>

    <?php
    if($contador >= 2)
    {
        Echo "Foram necessárias $contador vezes para conseguir chegar ao número introduzido.";
    }
    else
    {
        Echo "Foi necessário $contador vez para conseguir chegar ao número introduzido.";
    }
    ?>

    <br>

    <a href="index.php">Votlar à página inicial</a>
</body>
</html>