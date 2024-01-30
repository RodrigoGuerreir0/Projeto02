<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);

    // Aqui você pode adicionar lógica para salvar os dados no banco de dados ou enviar um email de confirmação, por exemplo.

    // Exemplo simples de exibição dos dados (você pode substituir isso pela lógica desejada):
    echo "<h2>Confirmação de Presença Recebida</h2>";
    echo "<p>Obrigado, $nome, por confirmar a sua presença! Entraremos em contato com você em breve.</p>";
} else {
    // Se alguém tentar acessar diretamente este script, redireciona para a página de convite.
    header("Location: convite_evento.php");
    exit();
}
?>