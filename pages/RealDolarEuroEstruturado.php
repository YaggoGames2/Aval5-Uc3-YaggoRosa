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

?>