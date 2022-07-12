<?php
if(!empty($_POST['nome'])){
$nome = $_POST['nome'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$imc = $peso / ($altura * $altura);


echo "Seu nome é: " . $nome = $_POST['nome'] . "<br/>";
echo "Sua altura é: " . $altura = $_POST['altura'] . "<br/>";
echo "Seu peso é: " . $peso = $_POST['peso'] . "<br/>";
echo "Seu imc é: " . $imc . "<br/>";
if ($imc < 18.5) {
    echo "você está abaixo do peso";
} elseif ($imc <= 24.9) {
    echo "Seu peso está normal";
} elseif ($imc <= 29.9) {
    echo "Você está acima do peso";
} elseif ($imc <= 34.9) {
    echo "Obesidade grau I";
} elseif ($imc <= 39.9) {
    echo "Obesidade grau II";
} else {
    echo "Obesidade grau III";
}
}else{
    echo "preencher formulario";
}
header("refresh:5;url=formulario.php");
