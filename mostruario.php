<?php

    include "carro.php";

    $carro = new Carro(); 

    $carro->setCor($_POST["cor"]);
    $carro->setPotencia($_POST["CV"]);
    $carro->setModelo($_POST["Model"]);
    $carro->setMarca($_POST["Marca"]);
    $carro->setKmetragem($_POST["km"]);
    $carro->setvelMax($_POST["Km/h"]);
    $carro->setvelNow($_POST["Vatual"]);
    $liga_desliga = $_POST["On/off"];

?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css">
        <title>Carro</title>
    </head>
    <body>
        <h1>Projeto Carro Vrum</h1>
        <div class="objCarro">
        <ul>
            <img src="images/cor.png" alt="Cor do carro"> <?php echo $carro->getCor(); ?>
            <img src="images/potencia.png" alt="Potência do carro"> <?php echo $carro->getPotencia(); ?>
            <img src="images/modelo.png" alt="Modelo do carro"> <?php echo $carro->getModelo(); ?>
            <img src="images/marca.png" alt="Marca do carro"> <?php echo $carro->getMarca(); ?>
            <img src="images/kilometragem.png" alt="kilometragem do carro"> <?php echo $carro->getKmetragem(); ?>
            <img src="images/velocidadeMaxima.png" alt="Velocidade máxima do carro"> <?php echo $carro->getvelMax(); ?>
            <img src="images/velocidadeAtual.png" alt="Velocidade atual do carro"> <?php echo $carro->getvelNow(); ?>
            <img src="images/ligaDesliga.png" alt="Botão liga/desliga do carro"> 
        </ul>
        </div>
    </body>
    </html>

