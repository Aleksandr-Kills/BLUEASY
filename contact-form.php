
<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
$antispam = htmlspecialchars($_POST["antispam"]);

$address = "salgari12345@gmail.com";
$sub = "Сообщение с сайта ХХХ";

$mes = "Сообщение с сайта ХХХ.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения:
$message";

if (empty($antispam))
{
    $from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
    if (mail($address, $sub, $mes, $from)) {
        header('Refresh: 5; URL=http://aleksandr-t-portfolio.zzz.com.ua/');
        echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на главную страницу</body>';}
    else {
        header('Refresh: 5; URL=http://aleksandr-t-portfolio.zzz.com.ua/');
        echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY</body>';}
}
exit;
?>
