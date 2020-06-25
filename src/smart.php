<?php 

$text = $_POST['text'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$color = $_POST['color'];
$lacquer = $_POST['lacquer'];
$case = $_POST['case'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'saigakovwork@yandex.ru';                 // Наш логин
$mail->Password = 'cirCuk-resren-4xizxy';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('saigakovwork@yandex.ru', 'Malysh');   // От кого письмо 
$mail->addAddress('ira.gnedysh@mail.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	Имя: ' . $name . ' <br>
	Номер телефона: ' . $phone . '<br>
	E-mail: ' . $email . '<br> Заказ: ' . $text . 
	'<br> Цвет: ' . $color . '<br> Лак: ' . $lacquer .
	'<br> Мягкий чехол: ' . $case . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>