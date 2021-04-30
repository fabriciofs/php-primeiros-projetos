<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require '../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dados = [
  'nome' => $_POST['nome'] ?? '',
  'pais' => strtoupper($_POST['pais']) ?? '',
  'mensagem' => $_POST['mensagem'] ?? ''
];

$mail = new PHPMailer(true);

try {
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
  $mail->isSMTP();
  $mail->Host = $_ENV["MAIL_HOST"];
  $mail->SMTPAuth = true;
  $mail->Username = $_ENV["MAIL_USERNAME"];
  $mail->Password = $_ENV["MAIL_PASSWORD"];
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;
  $mail->CharSet = 'UTF-8';

  $mail->setFrom('envia@teste.com', 'Envia');

  $mail->addAddress('redcebe@teste.com', 'Recebe');

  $mail->isHTML(true);
  $mail->Subject = "Contato do meu primeiro site PHP";

  $corpo = "<b>Nome: </b> {$dados['nome']} <br/>";
  $corpo .= "<b>Pais: </b> {$dados['pais']} <br/>";
  $corpo .= "<b>Mensagem: </b> {$dados['mensagem']} <br/>";
  $mail->Body = $corpo;
  $mail->send();

  echo "Mensagem enviada com sucesso";
} catch (\Exception $e) {
  echo $e->getMessage();
}
