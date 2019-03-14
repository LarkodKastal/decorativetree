<?php 

$post = (!empty($_POST)) ? true : false ;
if ($post) {
	$name 		= $_POST['name'];
	$tel		= $_POST['tel'];
	$message	= $_POST['comment'];
	$error		= '';
	if ( !$name ) { $error .= 'Введите имя.'; }
	if ( !$tel ) { $error .= 'Введите телефон.'; }
	if ( !$message ) { $error .= 'Введите сообщение.'; }
	if (!$error) {
		$mail = 'mefaldies@gmail.com';
		$theme = 'DecorativeTree';
		$mes = "Имя: " . $name . '<br>Телефон: ' . $tel . "<br>Сообщение:  " . $message;
		$send = mail($mail,'DecorativeTree',$mes,'Content-type:text/html; charset = UTF-8');
		if ($send) { 
			setcookie('contact_screen',time(),time()+3600);
			header('Location: http://'.$_SERVER['SERVER_NAME'].'/success'); }
	}
	else { echo '<div class="err">'.$error.'</div>'; }
}
?>