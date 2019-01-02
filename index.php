<?php 

if (!empty($_POST)) {
	
	$message = "Вам пришло новое сообщение с сайта: \n" 
	. "Имя отправителя: " . $_POST['userName'] . "\n"
	. "Email отравителя: " . $_POST['userEmail'] . "\n"
	. "Сообщение: \n " . $_POST['message'];

	$headers = "From: info@shevchuk777.com";

	$resultMail = mail("info@rostyslav555.com", "Сообщение с сайта", $message, $headers);

if ($resultMail) {
		echo "Сообщение отправлено успешно!";
	} else{
		echo "Что то пошло не так. Письмо не отправлено=(";
	}

}


?> 

<form action="index.php" method="post">
	<input type="text" name="userName" placeholder="Ваше имя"><br>
	<input type="text" name="userEmail" placeholder="Ваш email"><br>
	<textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
	<input type="submit" value="Отправить форму!">
</form>
