<?php
// Inicializa variáveis
$nome = '';
$nota1 = '';
$nota2 = '';
$media = '';
$conceito = '';
$resultado = '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $nota1 = (float)$_POST['nota1'];
    $nota2 = (float)$_POST['nota2'];

    // Calcula a média
    $media = ($nota1 + $nota2) / 2;

    // Determina o conceito e o resultado
    if ($media >= 9.1 && $media <= 10.0) {
        $conceito = 'A';
        $resultado = "APROVADO";
    } elseif ($media >= 7.6 && $media < 9.1) {
        $conceito = 'B';
        $resultado = "APROVADO";
    } elseif ($media >= 6.1 && $media < 7.6) {
        $conceito = 'C';
        $resultado = "APROVADO";
    } elseif ($media >= 4.1 && $media < 6.1) {
        $conceito = 'D';
        $resultado = "REPROVADO";
    } elseif ($media >= 0.0 && $media < 4.1) {
        $conceito = 'E';
        $resultado = "REPROVADO";
    } else {
        $conceito = 'N/A'; // Para notas inválidas
        $resultado = "Notas inválidas";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média</title>
</head>
<body>
    <h1>Cálculo de Média do Aluno</h1>
    <form method="POST" action="">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" step="0.1" min="0" max="10" required><br><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" step="0.1" min="0" max="10" required><br><br>

        <input type="submit" value="Calcular Média">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Resultado:</h2>
        <p>Nome: <?php echo htmlspecialchars($nome); ?></p>
        <p>Média: <?php echo number_format($media, 1); ?></p>
        <p>Conceito: <?php echo $conceito; ?></p>
        <p>Status: <?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
