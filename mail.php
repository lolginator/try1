<?php
if ($_POST['subject'] == 1) {
	$subject = "Вопрос";
}
else if ($_POST['subject'] == 2) {
	$subject = "Личный";
}
else if ($_POST['subject'] == 3) {
	$subject = "Благодарность";
}else {
	$subject = "Вопрос"
}

$to = "lolginator555@gmail.com"
$from = trim($_POST['email'])

$message = htmlmessagechars($_POST['message'])
$message = urldecode($message)
$message = trim($message)

if (mail($to, $subject, $message)) {
	echo "Письмо отправлено"
}else{
	echo "Письмо не отправлено"
}

?>