<?php
/**
 * User: Jesus Leones
 * Date: 24/06/2021
 */
require_once 'classes/calculadora.php';

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];


$calculadora = new calculadora();


$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);

switch ($operacao)
{
    case 'somar':
        $calculadora->somar();
        break;
    case 'subtrair':
        $calculadora->subtrair();
        break;
    case 'dividir':
        $calculadora->dividir();
        break;
    case 'multiplicar':
        $calculadora->multiplicar();
        break;
}


echo $calculadora->getTotal();
?>