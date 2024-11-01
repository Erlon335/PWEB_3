<?php
// Inicializa variáveis
$nome = '';
$salario_hora = '';
$horas_trabalhadas = '';
$salario_bruto = '';
$salario_liquido = '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $salario_hora = (float)$_POST['salario_hora'];
    $horas_trabalhadas = (float)$_POST['horas_trabalhadas'];

    // Calcula o salário bruto
    $salario_bruto = $salario_hora * $horas_trabalhadas;

    // Calcula os descontos
    $imposto_renda = $salario_bruto * 0.11;
    $inss = $salario_bruto * 0.08;
    $sindicato = $salario_bruto * 0.05;

    // Calcula o salário líquido
    $salario_liquido = $salario_bruto - ($imposto_renda + $inss + $sindicato);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salário</title>
</head>
<body>
    <h1>Cálculo de Salário Mensal</h1>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="salario_hora">Salário por Hora (R$):</label>
        <input type="number" id="salario_hora" name="salario_hora" step="0.01" min="0" required><br><br>

        <label for="horas_trabalhadas">Horas Trabalhadas no Mês:</label>
        <input type="number" id="horas_trabalhadas" name="horas_trabalhadas" min="0" required><br><br>

        <input type="submit" value="Calcular Salário">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Resultado:</h2>
        <p>Nome: <?php echo htmlspecialchars($nome); ?></p>
        <p>Salário Bruto: R$ <?php echo number_format($salario_bruto, 2, ',', '.'); ?></p>
        <p>Salário Líquido: R$ <?php echo number_format($salario_liquido, 2, ',', '.'); ?></p>
    <?php endif; ?>
</body>
</html>
