<?php
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$coment = $_POST['user_coment'];
$token = "571910719:AAELqiCvlvpyN3j9H5yVcLiaIyjOq5pObak";
$chat_id = "-260947490";
$arr = array(
  'Имя : ' => $name,
  'Телефон : ' => $phone,
  'Сообщение : ' => $coment
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: send-mail.html');
} else {
  header('Location: error.html');
}
?>