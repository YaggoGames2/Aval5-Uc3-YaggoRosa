<?php 
$mensagem = "";
$dolar = 5.34;
$euro = 6.26;
$yuan = 0.75;

$valor = filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_FLOAT);
$moeda = filter_input(INPUT_POST, 'moeda', FILTER_SANITIZE_STRING);

if ($valor === false || $valor <= 0) {
    $mensagem = "<p> Valor inválido! Digite um número maior que zero.</p>";
} elseif ($moeda === "dolar") {
    $resultado = $valor / $dolar;
    $mensagem = "<p>R$ $valor = $ " . number_format($resultado, 2, ',', '.') . "</p>";
} elseif ($moeda === "euro") {
    $resultado = $valor / $euro;
    $mensagem = "<p>R$ $valor = €" . number_format($resultado, 2, ',', '.') . "</p>";
} elseif ($moeda === "yuan") {
    $resultado = $valor / $yuan;
    $mensagem = "<p>R$ $valor = ¥" . number_format($resultado, 2, ',', '.') . "</p>";
} else {
    if ($moeda !== null) {
        $mensagem = "<p> Moeda inválida!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/style.css">
    <title>Conversão</title>
</head>
<body>
    <?php echo $mensagem; ?>
</body>
</html>
