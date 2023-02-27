<?php
// informações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teste";

// cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// verifica se houve erro na conexão com o banco de dados
if ($conn->connect_error) {
  die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// define as variáveis a partir dos dados enviados pelo formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
$sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
  echo "Mensagem enviada com sucesso!";
} else {
  echo "Erro ao enviar mensagem: " . $conn->error;
}

$conn->close();

