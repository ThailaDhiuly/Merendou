<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registre-se</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images1/merendou.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util1.css">
	<link rel="stylesheet" type="text/css" href="css1/main1.css">
<!--===============================================================================================-->
</head>
<body>
<!-- Header -->
			<header id="header">
				<a href="index.html"><img src="images1/logo_merendou.png" class="logo"></a>
				<nav>
					<div class="imgmenu">
						<a href="#menu"><img src="images1/f0c9.png" class="icon_m"></a>
					</div>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
					<li><a href="generic.php">Procurar</a></li>
				</ul>
			</nav>
<div class="limiter">		
	<div class="container-login100" style="background-image: url('images1/fundo.jpg');">
		<div class="container-contact1" style="background-image: url('images1/lousa.jpg');">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images1/logo_merendou.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form">
				<span class="contact1-form-title">
					Cadastre-se
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Digite seu nome, por obséquio!">
					<input class="input1" type="text" name="nome" placeholder="Nome">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Digite seu E-mail, por obséquio!">
					<input class="input1" type="text" name="email" placeholder="E-mail">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Digite seu CPF, por obséquio">
					<input class="input1" type="text" name="subject" placeholder="CPF">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Digite sua senha, por obséquio">
					<input class="input1" type="password" name="senha" placeholder="Senha">
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Pronto!
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>



<!--===============================================================================================-->
	<script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js1/main.js"></script>

</body>
</html>
