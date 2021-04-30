<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SendMail</title>
</head>

<body>
  <form action="/testeEmail/sendmail.php" method="POST">
    <label for="nome">Nome Completo</label>
    <input type="text" name="nome" placeholder="Informe o seu nome...">
    <br><br>
    <label for="pais">País</label>
    <select name="pais">
      <option value="">Selecione um País</option>
      <option value="bra">Brasil</option>
      <option value="usa">Estados Unidos</option>
      <option value="ger">Alemanha</option>
    </select>
    <br><br>
    <label for="mensagem">Mensagem</label>
    <textarea name="mensagem" placeholder="Insira sua mensagem aqui..."></textarea>
    <br><br>
    <button type="submit">Enviar</button>
  </form>
</body>

</html>