<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST['submit'])) {
  $check = getimagesize($_FILES['fileToUpload']['tmp_name']);

  if ($check !== false) {
    echo "O arquivo é uma imagem - {$check['mime']}.<br/>";
  } else {
    echo "O arquivo não é uma imagem";
    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  echo "Desculpe, arquivo ja existe";
  $uploadOk = 0;
}

if ($_FILES['fileToUpload']['size'] > 150000) {
  echo "Desculpe, arquivo muito grande " . $_FILES['fileToUpload']['size'];
  $uploadOk = 0;
}


if ($uploadOk === 1) {
  if (!file_exists('uploads')) {
    mkdir('uploads', 0777, true);
  }

  if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
    echo "O arquivo " . basename($_FILES['fileToUpload']['name']) . " foi enviado com sucesso!";
  }
}
