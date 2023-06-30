<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicom.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="estilos.css">
	<title>Web-Klein</title>
</head>
<body>
	<!--MENU ENCABEZADO-->
	<div class="contenedor-header">
		<header>
			<div class="logo">
				<a href="http://localhost/Web-Klein"><span>Klein</span></a>
			</div>
			<nav id="nav">
				<ul>
					<li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
					<li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
					<li><a href="#skills" onclick="seleccionar()">SKILLS</a></li>
					<li><a href="#curriculum" onclick="seleccionar()">CURRICULUM</a></li>
					<li><a href="#portfolio" onclick="seleccionar()">PORTFOLIO</a></li>
					<li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
				</ul>
			</nav>
			<div class="nav-responsive" onclick="mostrarOcultarMenu()">
				<i class="fa-solid fa-bars"></i>
			</div>
		</header>
	</div>

	<!--SECTION INICIO-->
	<section id="inicio" class="inicio">
		<div class="contenido-banner">
			<div class="contenedor-img">
				<img src="img/hero.jpg" alt="">
			</div>
			<h1>Guillermo Klein</h1>
			<h2>Creativo Plublicitario</h2>
			<div class="redes">
				<a href="https://www.linkedin.com/in/gonzalo-civita/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
				<a href="https://www.facebook.com/profile.php?id=100093978883105&mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/gkleincba" target="_blank"><i class="fa-brands fa-instagram"></i></a>
				<a href="https://www.behance.net/gklein" target="_blank"><i class="fa-brands fa-square-behance"></i></a>
			</div>
		</div>
	</section>

	<!--SECTION SOBRE MI-->
	<section id="sobremi" class="sobremi">
		<div class="contenido-seccion">
			<h2>Sobre Mi</h2>
			<p><span>¡Hola a todos¡ Soy Guillermo Klein</span>, un creativo y emprendedor apasionado por la originalidad.
			<br>
			<br>
			A lo largo de mi trayectoria, he explorado diversas disciplinas académicas, desde Cine y Tv hasta arquitectura, diseño gráfico y animaciones 3D entre otras cosas... Mi objetivo siempre ha sido transmitir emociones y despertar la imaginación a través de mis trabajos.
			<br>
			<br>
			He tenido el privilegio de cofundar varios emprendimientos y mi objetivo siempre ha sido crear y mostrar los productos/servicios de una manera original. Esta experiencia me dio la sabiduría para ponerme en el lugar del cliente y del emprendedor.
			<br>
			<br>
 			Aquí encontrarás una selección de mis trabajos más destacados, donde podrás sumergirte en un mundo de creatividad, imaginación y persistencia. Cada pieza tiene una historia que contar y refleja mi visión única del mundo que me rodea.
 			<br>
 			<br>
			Creo firmemente en la importancia de la inspiración y la experimentación, y espero poder motivar a otros artistas y entusiastas de la publicidad a explorar su propia creatividad.
			<br>
			<br>
			Te invito a explorar mi galería, a conocer mis proyectos actuales y a acompañarme en este viaje fuera de lo común. Espero que encuentres inspiración y disfrutes de mis creaciones tanto como yo disfruté creándolas. ¡Bienvenidos a mi mundo creativo!</p>

			<div class="fila">
				<!--DATOS PERSONALES-->
				<div class="col">
					<h3>Datos Personales</h3>
					<ul>
						<li>
							<strong>Cumpleaños</strong>
							17-04-1990
						</li>
					</ul>
					<ul>
						<li>
							<strong>Teléfono</strong>
							351-5110599
						</li>
					</ul>
					<ul>
						<li>
							<strong>Email</strong>
							gonzalocivita@gmail.com
						</li>
					</ul>
					<ul>
						<li>
							<strong>Website</strong>
							www.gonzalociv.com
						</li>
					</ul>
					<ul>
						<li>
							<strong>Residencia</strong>
							Córdoba, Argentina
						</li>
					</ul>
					<ul>
						<li>
							<strong>Cargo</strong>
							FREELANCE
						</li>
					</ul>
				</div>

		</div>
	</section>
	<script src="script.js"></script>
</body>
</html>