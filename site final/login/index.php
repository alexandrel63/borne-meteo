<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion-BMAC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="back">
	<a href="../index.php"><img src="images/back.png" alt="Flèche de retour"></a>
	</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" action="../panel/panel.php" method="POST">
					<span class="login100-form-title p-b-70">
						Connexion
					</span>
					<span class="login100-form-avatar">
						<img src="images/avatar.png" alt="AVATAR">
					</span>
					<?php if(isset($_GET['error']) AND $_GET['error'] == "")
						{
							echo '<p>' . $_GET['error'] . '</p>';
						}
					?>
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Entrer un nom d'utilisateur">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Nom d'utilisateur"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Entrer un mot de passe">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Mot de passe"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Se connecter
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>