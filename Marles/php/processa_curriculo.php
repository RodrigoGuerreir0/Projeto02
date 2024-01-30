<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$experiencia = $_POST["experiencia"];

function validarcurriculo($nome, $email, $telefone, $experiencia)
{
    // Conexão com o banco de dados (ajuste as credenciais conforme necessário)
    $host = "localhost";
    $nome_DB = "bd_marlestextil";
    $usuario = "root";
    $senha = "";

    // Cria a conexão
    try {
        $conexao = new PDO("mysql:host={$host};dbname={$nome_DB}", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }

    // Prepara a declaração SQL
    $stmt = $conexao->prepare("INSERT INTO curriculos (nome, email, telefone, experiencia) VALUES (:nome, :email, :email, :experiencia)");
    $stmt->bindValue(1, $nome, PDO::PARAM_STR);
    $stmt->bindValue(2, $email, PDO::PARAM_STR);
    $stmt->bindValue(3, $telefone, PDO::PARAM_STR);
    $stmt->bindValue(4, $experiencia, PDO::PARAM_STR);

    // Executa a declaração SQL
    if ($stmt->execute()) {
        // Redireciona para uma página de confirmação
        header("Location: confirmacao.php");
        exit();
    } else {
        echo "Erro ao cadastrar o currículo: " . $stmt->errorInfo()[2];
    }

    // Fecha a declaração e a conexão
    $stmt->closeCursor(); 
    $conexao = null; 
}
validarcurriculo($nome, $email, $telefone, $experiencia);
?>
