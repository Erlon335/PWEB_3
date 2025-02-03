<?php
// cadastrar_sabor.php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Delicias_Geladas";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $ingredientes = $_POST["ingredientes"];
    $preco = $_POST["preco"];
    $disponibilidade = isset($_POST["disponibilidade"]) ? 1 : 0;
    
    $sql = "INSERT INTO Sabores (nome, descricao, ingredientes, preco, disponibilidade) 
            VALUES ('$nome', '$descricao', '$ingredientes', '$preco', '$disponibilidade')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Sabor cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
$conn->close();
?>