<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Convite para Evento</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      text-align: center;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
    }

    p {
      color: #555;
    }

    .cta-button {
      display: inline-block;
      padding: 10px 20px;
      margin-top: 20px;
      font-size: 16px;
      text-decoration: none;
      color: #fff;
      background-color: #4caf50;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .cta-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Convite para Evento Especial</h1>
    <p>Você está cordialmente convidado para o nosso evento exclusivo. Será uma experiência incrível e mal podemos esperar para compartilhar momentos especiais com você!</p>
    <p>Data: DD/MM/AAAA</p>
    <p>Local: Nome do Local</p>
    <form action="processa_confirmacao.php" method="post">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" required>
      <br>
      <label for="email">Email:</label>
      <input type="email" name="email" required>
      <br>
      <input type="submit" class="cta-button" value="Confirmar Presença">
    </form>
  </div>
</body>
</html>