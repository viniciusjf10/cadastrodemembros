<?php
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

	<script language=javascript type="text/javascript">
		function myFunction() {
			var popup = document.getElementById("myPopup");
			popup.classList.toggle("show");
		}		
	</script>

	<title>Login Rinobot</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/LogoTopoPagina.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
<!--===============================================================================================-->
</head>
<body>
	<!-- START Bootstrap-Cookie-Alert -->
<div class="alert text-center cookiealert" role="alert">
    <b>Você gosta de cookies?</b> &#x1F36A; Nós os utilizamos para melhorar sua experiência em nosso site. <a href="https://cookiesandyou.com/" target="_blank">Saiba mais.</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies">
        Eu aceito
    </button>
</div>
<!-- END Bootstrap-Cookie-Alert -->
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<span class="login100-form-title">
					Sistema de gestão integrado Rinobot Team
				</span>
				
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/LogoTopoPagina.jpg" alt="IMG">
					<span> <p>Próximas datas importantes</p>
						<p>IronCup: XX/XX/XX a YY/YY/YY.</p>
						<p>Smile: XX/XX/XX a YY/YY/YY.</p>
						<p>Reunião Geral: XX/XX/XX.</p>
				 </span>
				</div>
				
				<form class="login100-form validate-form" action="./validaEmail.php" method="POST" >
					<div class="wrap-input100 validate-input" data-validate = "O login é obrigatório">
						<input class="input100" type="text" name="login" placeholder="Login">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "A senha é obrigatória">
						<input class="input100" type="password" name="password" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button  class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Esqueceu
						</span>
						<a class="txt2" href="#demo-modal">
							Login ou senha?
						</a>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Duvidas de
						</span>
						<a class="txt2" href="#demo-modalLO">
							Login ?
						</a>
					</div>
				</form>

			</div>
		</div>
	</div>

<!--===============================================================================================-->	

<div id="demo-modal" class="modal">
    <div class="modal__content">
        <h1>Recuperação de login e senha:</h1>
		<br>
        <p>
            Caso necessite de recuperar login ou senha entre em contato com o Diretor de Gestão.
        </p>
		
		<p>
			Lembre-se de informar seu nome e matrícula interna ou matrícula da UFJF.
		</p>

        <a href="#" class="modal__close">X</a>
    </div>
</div>

<div id="demo-modalLO" class="modal">
    <div class="modal__content">
        <h1>Informações para login:</h1>
		<br>
        <p>
            O login é feito usando sua matrícula interna e senha informada no momento do cadastro.
        </p>

        <a href="#" class="modal__close">X</a>
    </div>
</div>

<div id="demo-modalIN" class="modal">
    <div class="modal__content">
        <h1>Sua matrícula não esta ativa.</h1>
		<br>
        <p>
            Entre em contato com o Diretor de Gestão para maiores esclarecimentos.
        </p>
        <a href="#" class="modal__close">X</a>
    </div>
</div>


<div id="demo-modalSI" class="modal">
    <div class="modal__content">
        <h1>Senha incorreta</h1>
		<br>
        <p>
            Caso deseje entre em contato com o Diretor de Gestão para solicitar alteração.
        </p>
        <a href="#" class="modal__close">X</a>
    </div>
</div>
	
<div id="demo-modalEI" class="modal">
    <div class="modal__content">
        <h1>Login incorreto</h1>
		<br>
        <p>
            Senha ou login incorreto, tente novamente.
        </p>
        <a href="#" class="modal__close">X</a>
    </div>
</div>



<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

</body>
</html>