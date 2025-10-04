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

function exibirMensagem($mensagem){
 return $mensagem;
}

$mensagem = "";
$dolar = 5.34;
$euro = 6.26;
$yuan = 0.75;

if (isset($_POST["valor"]) && isset($_POST["moeda"])) {
$valor = filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_FLOAT);
$moeda = filter_input(INPUT_POST, 'moeda', FILTER_SANITIZE_STRING);

$validacao = validarEntradas($valor, $moeda);

if ($validacao === true) {
        if ($moeda === "dolar") {
            $mensagem = converterDolar($valor, $dolar);
        } elseif ($moeda === "euro") {
            $mensagem = converterEuro($valor, $euro);
        } elseif ($moeda === "yuan") {
            $mensagem = converterYuan($valor, $yuan);
        }
    } else {
        $mensagem = exibirMensagem($validacao);
    }
} 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/style2.css">
    <title>Conversão</title>
</head>
<body>
    <div class="mensagem"> 
        <?php echo $mensagem; ?>
    </div>
   
</body>
</html>