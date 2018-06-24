<?php

//echo 'aca estoy';
session_start();

$inactivo = 900;

if (isset($_SESSION['tiempo'])) {
	 $vida_session = time() - $_SESSION['tiempo'];
	 if ($vida_session > $inactivo) {
		  session_destroy();
		  header("Location: index.php");
	 }
}

$_SESSION['tiempo'] = time();

include_once('sql.class.php');

//DIR ROOT VARS
$root = '/home/u870763007/public_html';
$src = '';


Class System {

	 static public function is_mobile() {
		  $iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
		  $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
		  $palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
		  $berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
		  $ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
		  if ($iphone || $android || $palmpre || $ipod || $berry == true) {
			   return true;
		  } else {
			   return false;
		  }
	 }

	 static public function date_to_client($fecha) {
		  $anio = substr($fecha, 0, 4);
		  $mes = substr($fecha, 5, 2);
		  $dia = substr($fecha, 8, 2);
		  return ($dia . "-" . $mes . "-" . $anio);
	 }

	 static public function date_to_server($fecha) {
		  $dia = substr($fecha, 0, 2);
		  $mes = substr($fecha, 3, 2);
		  $anio = substr($fecha, 6, 4);
		  return ($anio . "-" . $mes . "-" . $dia);
	 }

	 static public function dates_interval($fecha_principal, $fecha_secundaria, $obtener = 's', $redondear = false, $reordenar = true) {
		  if (is_numeric($fecha_principal) && is_numeric($fecha_secundaria)) {
			   $f0 = $fecha_principal;
			   $f1 = $fecha_secundaria;
		  } else {
			   $f0 = strtotime($fecha_principal);
			   $f1 = strtotime($fecha_secundaria);
		  }
		  if ($f0 < $f1 && $reordenar) {
			   $tmp = $f1;
			   $f1 = $f0;
			   $f0 = $tmp;
		  }
		  $resultado = ($f0 - $f1);
		  switch ($obtener) {
			   default: break;
			   case "m" : $resultado = $resultado / 60;
				    break;
			   case "h" : $resultado = $resultado / 60 / 60;
				    break;
			   case "d" : $resultado = $resultado / 60 / 60 / 24;
				    break;
			   case "w" : $resultado = $resultado / 60 / 60 / 24 / 7;
				    break;
		  }
		  if ($redondear)
			   $resultado = round($resultado);
		  return $resultado;
	 }

	 static public function print_pre($var) {
		  echo"<pre>";
		  print_r($var);
		  echo"</pre>";
	 }


	 static public function enviar_email_SMTP($de, $password, $denombre, $para, $asunto = '', $cuerpo = '', $cc = '', $cco = '', $respondera = '') {
            
		  date_default_timezone_set('Etc/UTC');
		  require_once('/home/u634332082/public_html/includes/PHPMailer-master/PHPMailerAutoload.php');
                 

//Create a new PHPMailer instance
		  $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
		  $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
		  $mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
		  $mail->Debugoutput = 'html';
		  $mail->Timeout = 10;
//Set the hostname of the mail server
		  $mail->Host = "mx1.hostinger.com.ar";
//Set the SMTP port number - likely to be 25, 465 or 587
		  $mail->SMTPSecure = "ssl";
		  $mail->Port = 465;
//Whether to use SMTP authentication
		  $mail->SMTPAuth = true;
//Username to use for SMTP authentication
		  $mail->Username = $de;
//Password to use for SMTP authentication
		  $mail->Password = $password;
//Set who the message is to be sent from
//$mail->setFrom('lucas.marioni@btcj.com.ar', 'First Last');
		  $mail->setFrom($de, $denombre);
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
		  $mail->addAddress($para);
//Set the subject line
		  $mail->Subject = $asunto;
//Read an HTML message body from an external file, convert referenced images to embedded,
//$mail->isHTML(false);
//convert HTML into a basic plain-text alternative body
		  $mail->msgHTML(utf8_decode($cuerpo));
//$body = file_get_contents('contents.html');
//$mail->MsgHTML($body);
//Replace the plain text body with one created manually
//$mail->AltBody = $cuerpo;
//$mail->Body = $cuerpo;
		  if (strlen($respondera) > 3) {
			   $mail->AddReplyTo($respondera, '');
		  } //respondera      
		  if (strlen($cc) > 3) {
			   $mail->AddCC($cc, '');
		  }
		 /* if (strlen($cc1) > 3) {
			   $mail->AddCC($cc1, '');
		  }*/
		  if (strlen($cco) > 3) {
			   $mail->AddBCC($cco, '');
		  }
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
		  echo $mail->ErrorInfo;
//send the message, check for errors
		  if (!$mail->send()) {
			  //   echo "Mailer Error: " . $mail->ErrorInfo;
			   return false;
		  } else {
			   //echo "Message sent!";
			   return true;
		  }
	 }

}
