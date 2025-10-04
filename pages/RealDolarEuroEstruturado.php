<?php
function validarEntradas($valor, $moeda) {
    if ($valor === false || $valor <= 0) {
        return "Valor inválido! Digite um número maior que zero.";
    }if (empty($moeda)) {
        return "Selecione uma moeda para conversão.";
    }
  $moedasValidas = ["dolar", "euro", "yuan"];

    if (!in_array($moeda, $moedasValidas)) {
        return "Moeda inválida! Escolha uma opção correta.";
    }
return true;
}

function converterDolar($valor, $moeda) {
    $resultado = $valor / $moeda;
    return "R$ $valor = $ " . number_format($resultado, 2, ',', '.');
}

function converterEuro($valor, $moeda) {
    $resultado = $valor / $moeda;
    return "R$ $valor = €" . number_format($resultado, 2, ',', '.');
}

function converterYuan( $valor, $moeda) {   
    $resultado = $valor / $moeda;
    return "R$ $valor = ¥". number_format($resultado, 2,',', '.');
}
?>