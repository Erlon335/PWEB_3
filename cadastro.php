<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $data_admissao = $_POST['data_admissao'];
    $data_alta = $_POST['data_alta'];

    // Formata a string a ser salva
    $dados = implode('$@#@$', [$id, $nome, $data_nascimento, $genero, $data_admissao, $data_alta]);

    // Salva os dados no arquivo
    file_put_contents('veiculo.txt', $dados . PHP_EOL, FILE_APPEND);

    // Mensagem de sucesso
    echo "<p>Paciente cadastrado com sucesso!</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pacientes</title>
</head>
<body>
    <h1>Cadastro de Pacientes</h1>
    <form method="POST" action="">
        <label for="id">ID do Paciente:</label>
        <input type="text" id="id" name="id" required><br><br>

        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

        <label for="genero">Gênero:</label>
        <select id="genero" name="genero" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select><br><br>

        <label for="data_admissao">Data de Admissão:</label>
        <input type="date" id="data_admissao" name="data_admissao" required><br><br>

        <label for="data_alta">Data de Alta (se aplicável):</label>
        <input type="date" id="data_alta" name="data_alta"><br><br>

        <input type="submit" value="Cadastrar Paciente">
    </form>
</body>
</html>
