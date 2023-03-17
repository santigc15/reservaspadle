<!DOCTYPE html>
<html>

<head>
	<title>Ejemplo de cabecera con imágenes y sección con imagen de fondo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>

<body>
	<header>
		<div class="logo">
		<a href="index.php"><img src="./assets/img/logo.png" alt="Logo de la empresa"></a>
		</div>
	</header>
	<main>
		<section class="fondo">
			<div class="overlay">
				<div class="botones">
					<a href="login.php"><button>Login</button></a>
					<a href="registro.php"><button>Registrate</button></a>
				</div>
			</div>
		</section>
		<section class="imagenes container">
			<div>
				<a href="reservas.views.php?id=1"><img src="./assets/img/pistaAzul.jpg" alt="pistaAzul"></a>
				<a href="reservas.views.php?id=1"><button>Reservar pista Azul</button></a>
			</div>
			<div>
				<a href="reservas.views.php?id=2"><img src="./assets/img/pistaRoja.jpg" alt="pistaRoja"></a>
				<a href="reservas.views.php?id=2"><button>Reservar pista Roja</button></a>
			</div>
			<div>
				<a href="reservas.views.php?id=3"><img src="./assets/img/pistaVerde.jpg" alt="pistaVerde"></a>
				<a href="reservas.views.php?id=3"><button>Reservar pista Verde</button></a>
			</div>
			<div>
				<a href="reservas.views.php?id=4"><img src="./assets/img/pistaPro.jpg" alt="pistaPRO"></a>
				<a href="reservas.views.php?id=4"><button>Reservar pista Pro</button></a>
			</div>
		</section>
	</main>
</body>

</html>