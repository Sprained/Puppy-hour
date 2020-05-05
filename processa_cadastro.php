<?php

		require "./PHPMailer/Exception.php";
		require "./PHPMailer/OAuth.php";
		require "./PHPMailer/PHPMailer.php";
		require "./PHPMailer/POP3.php";
		require "./PHPMailer/SMTP.php";

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
		use PHPMailer\PHPMailer\SMTP;

		//print_r($_POST);
		
		class Mensagem {
			private $nomepet = null;
			private $raca = null;
			private $peso = null;
			private $nomedono = null;
			private $endereco = null;
			private $tell = null;
			private $email = null;
			private $vacinado = null;
			private $restricao = null;
			private $alergias = null;
			private $comportamento = null;
			public $status = array('codigo_status' => null, 'descicao_status' => null);

			public function __get($atributo) {
				return $this->$atributo;
			}

			public function __set($atributo, $valor) {
				$this->$atributo = $valor;
			}

			public function mensagemValida() {
				if(empty($this->nomepet) || empty($this->raca) || empty($this->peso) || empty($this->nomedono) || empty($this->endereco) || empty($this->tell) || empty($this->email) || empty($this->vacinado) || empty($this->restricao) || empty($this->alergias) || empty($this->comportamento) ) {
					return false;
				}

				return true;
			}
		}

		$mensagem = new Mensagem();

		$mensagem->__set('nomepet', $_POST['nomepet']);
		$mensagem->__set('raca', $_POST['raca']);
		$mensagem->__set('peso', $_POST['peso']);
		
		if($_POST['vacinas']){
			$mensagem->__set('vacinado', 'Sim');
		}
		else{
			$mensagem->__set('vacinado', 'Não');
		}

		if($_POST['restricao']){
			$mensagem->__set('restricao', $_POST['restricao']);
		}
		else{
			$mensagem->__set('restricao', 'Não');
		}
		
		if($_POST['alergias']){
			$mensagem->__set('alergias', $_POST['alergias']);
		}
		else{
			$mensagem->__set('alergias', 'Não');
		}

		if($_POST['comportamento'] == 1 || $_POST['comportamento'] == 2 || $_POST['comportamento'] == 3){
			$mensagem->__set('comportamento', 'Calmo');
		}
		else if($_POST['comportamento'] == 4 || $_POST['comportamento'] == 5 || $_POST['comportamento'] == 6){
			$mensagem->__set('comportamento', 'Um pouco agressivo');
		}
		else{
			$mensagem->__set('comportamento', 'Agressivo');
		}
		
		$mensagem->__set('nomedono', $_POST['nomedono']);
		$mensagem->__set('endereco', $_POST['endereco']);
		$mensagem->__set('tell', $_POST['tell']);
		$mensagem->__set('email', $_POST['email']);

		//print_r($mensagem);

		if(!$mensagem->mensagemValida()) {
			echo 'Mensagem não é válida';
			die();
		} 

		$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = false;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'passeiop58@gmail.com';                     // SMTP username
	    $mail->Password   = 'teste123@!';                               // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('passeiop58@gmail.com', 'pet remetente');
	    $mail->addAddress('passeiop58@gmail.com', 'destinatario');     // Add a recipient
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    // Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Dados para cadastro ('.$mensagem->__get('email') .')';
	    $mail->Body    = 'Nome do pet: ' .$mensagem->__get('nomepet');
	    $mail->Body    .= '<br/>' .'Raça: ' .$mensagem->__get('raca');
	    $mail->Body    .= '<br/>' .'Peso: ' .$mensagem->__get('peso');
	    $mail->Body    .= '<br/>' .'Nome do dono: ' .$mensagem->__get('nomedono');
	    $mail->Body    .= '<br/>' .'Endereço: ' .$mensagem->__get('endereco');
	    $mail->Body    .= '<br/>' .'Telefone: ' .$mensagem->__get('tell');
	    $mail->Body    .= '<br/>' .'E-mail: ' .$mensagem->__get('email');

	    $mail->AltBody = 'Porfavor utilize um cliente de e-mail que suporte html, obrigado.';

	    $mail->send();
	    $mensagem -> status['codigo_status'] = 1;
	    $mensagem -> status['descicao_status'] = 'E-mail enviado com sucesso!';


	} catch (Exception $e) {
		$mensagem -> status['codigo_status'] = 2;
	    $mensagem -> status['descicao_status'] = 'Não foi possível mandar esse e-mail tente novamente mais tarde. detalhes do erro ' .$mail->ErrorInfo;
	    
	}
?>

<html>
<head>

	<meta charset="utf-8" />
    	<title>Puppy Hour</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
	</div>
	<div class="row">
		<div class="col-md-12">
			<? if($mensagem -> status['codigo_status'] == 1) { ?>

				<div class="container">
					<h1 class="display-4 text-success">Sucesso</h1>
					<p><?= $mensagem -> status['descicao_status'] ?><p>
					<a href="index.php" class="btn btn-sucess btn-lg mt-5 text-black">Voltar</a>
				</div>

			<? } ?>

			<? if($mensagem -> status['codigo_status'] == 2) { ?>
			
				<div class="container">
					<h1 class="display-4 text-danger">Ops!</h1>
					<p><?= $mensagem -> status['descicao_status'] ?><p>
					<a id="btn-enviar-form" href="index.php" class="btn btn-sucess btn-lg mt-5 text-black">Voltar</a>
				</div>

			<? } ?>
		</div>
	</div>

</body>
</html>