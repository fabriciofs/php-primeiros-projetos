<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SendMail</title>
</head>

<body>
  <form action="/testeUpload/upload.php" method="post" enctype="multipart/form-data">
    Selecione uma imagem:
    <input type="file" name="fileToUpload">
    <br>
    <button type="submit">Enviar Imagem</button>
  </form>
</body>

</html>