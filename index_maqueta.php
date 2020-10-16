<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>LIBRERIA LA ALTERNATIVA</title>
		<link rel="stylesheet" href="assets/css/styles.css" />
	</head>
	<body>
		<div id="container">
			<!-- CABECERA -->
			<header id="header">
				<div id="logo">
                                    <img src="assets/img/Logo-libreria.jpg" alt="Camiseta Logo" />
					<a href="index.php">
						LIBRERIA LA ALTERNATIVA
					</a>
				</div>
			</header>

			<!-- MENU -->
			<nav id="menu">
				<ul>
					<li>
						<a href="#">Inicio</a>
					</li>
					
					</li>
					<li>
						<a href="#">Impresiones y Grabados</a>
					</li>
					<li>
						<a href="#">Nosotros</a>
					</li>
					<li>
						<a href="#">Contacto</a>
					</li>
				</ul>
			</nav>

			<div id="content">

				<!-- BARRA LATERAL -->
				<aside id="lateral">

					<div id="login" class="block_aside">
						<h3>Entrar a la web</h3>
						<form action="#" method="post">
							<label for="email">Email</label>
							<input type="email" name="email" />
							<label for="password">Contraseña</label>
							<input type="password" name="password" />
							<input type="submit" value="Enviar" />
						</form>
						
						<ul>
							<li><a href="#">Mis pedidos</a></li>
							<li><a href="#">Gestionar pedidos</a></li>
							<li><a href="#">Gestionar categorias</a></li>
						</ul>
					</div>

				</aside>

				<!-- CONTENIDO CENTRAL -->
				<div id="central">
					<h1>Productos destacados</h1>
					
                                        
					<div class="product">
                                            <img src="assets/img/navaja.jpg" />
						<h2>Navaja</h2>
						<p>Q 2.00</p>
						<a href="" class="button">Comprar</a>
					</div>

					<div class="product">
                                            <img src="assets/img/silicon.jpg" />
						<h2>Silicon liquido 30 ml</h2>
						<p>Q 2.00</p>
						<a href="" class="button">Comprar</a>
					</div>

					<div class="product">
                                            <img src="assets/img/tijera.jpg" />
						<h2>Tijera escolar</h2>
						<p>Q 5.00</p>
						<a href="" class="button">Comprar</a>
					</div>
                                        <div class="product">
                                            <img src="assets/img/navaja.jpg" />
						<h2>Navaja</h2>
						<p>Q 2.00</p>
						<a href="" class="button">Comprar</a>
					</div>

					<div class="product">
                                            <img src="assets/img/silicon.jpg" />
						<h2>Silicon liquido 30 ml</h2>
						<p>Q 2.00</p>
						<a href="" class="button">Comprar</a>
					</div>

					<div class="product">
                                            <img src="assets/img/tijera.jpg" />
						<h2>Tijera escolar</h2>
						<p>Q 5.00</p>
						<a href="" class="button">Comprar</a>
					</div>
                                        

				</div>
			</div>

			<!-- PIE DE PÁGINA -->
			<footer id="footer">
				<p>Desarrollado por Jery Ramírez &copy; <?= date('Y') ?></p>
			</footer>
		</div>
	</body>
</html>