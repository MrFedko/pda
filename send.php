<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Укажите ваш адрес электронной почты, на который будут приходить сообщения
  $to = 'miklerst@mail.ru';

  // Тема электронной почты
  $subject = 'Новое сообщение от формы';

  // Содержание электронной почты
  $body = "Имя: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Телефон: " . $phone . "\n";
  $body .= "Сообщение: " . $message . "\n";

  // Заголовки электронной почты
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  // Отправка электронной почты
  if (mail($to, $subject, $body, $headers)) {
    header("Location: index.html"); // Перенаправление на страницу index.html
    exit(); // Остановка выполнения скрипта
  } else {
    echo "Что-то пошло не так. Пожалуйста, повторите попытку позже.";
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо! Мы свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1>Спасибо! Мы свяжемся с вами!</h1>
</body>
</html>