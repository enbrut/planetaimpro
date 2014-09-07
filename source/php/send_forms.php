
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Comañía, improvisación, impro, teatro, Planeta Impro, Impro Show, Impro Fighters, diversión">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Planeta Impro</title>
	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<link rel="stylesheet" href="css/responsive-nav.css">

	<link rel="stylesheet" href="css/style_esp.css" />

	<link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

	<!-- Core CSS File. The CSS code needed to make eventCalendar works -->
	<link rel="stylesheet" href="css/eventCalendar.css">

	<!-- Theme CSS file: it makes eventCalendar nicer -->
	<link rel="stylesheet" href="css/eventCalendar_theme_responsive.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/responsive-nav.js"></script>
	<!--[if lte IE 8]><script src="js/espond.js"></script><![endif]-->

	<script src="js/prefixfree.min.js"></script>
	<script src="js/modernizr.custom.48127.js"></script>
	<!-- Gogle Analytics -->
	<script src="js/analytics.js"></script>
	<script src="js/ga.js"></script>
	<script src="js/pi_links_ga.js"></script>
</head>
<body>
<?php

$data = array( 
	"Nom" => $_POST["name"],
	"Email" => $_POST["email"],
	"Telèfon" => $_POST["tel"],
	"Tipus de contractació" => $_POST["tipo_contratacion"],
	"Nom empresa" => $_POST["empresa"],
	"Espectacle" => $_POST["espectaculo"],
	"Tipus d'espai" => $_POST["espacio"],
	"Data aproximada" => $_POST["fecha"],
	"Població" => $_POST["poblacion"],
	"Public estimat" => $_POST["public"],
	"Comentaris" => $_POST["comentario"]
);

$to .= 'Planeta Impro <info@planetaimpro.com>';
$subject =  "Contractacio web de {$data['Nom']}";

// The message
$message = "<h1>Dades del formulari:</h1>";

foreach($data as $key => $value) {
  $message .= "<b>$key:</b> $value\n<br />";
}

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Additional headers
$headers .= "From: Planeta Impro <no-reply@planetaimpro.com>" . "\r\n";
$headers .= "Reply-To: {$data['Nom']} <{$data['Email']}>" . "\r\n";
//$headers .= 'Bcc: soniap.001@gmail.com' . "\r\n";

// Send
//
$sent = mail($to, $subject, $message, $headers);
?>
<?php if (sent): ?>
	<div id="wrapper">
	<header id="mainheader">
		<div id="idioma">
			<ul>
				<li><a>Català</a> | </li>
				<li><a>Castellano</a> | </li>
				<li><a>English</a></li>
			</ul>
		</div>
		<div id="social">
			<ul data-category="social">
				<li id="facebook" data-action="facebook"><a href="https://www.facebook.com/PLANETAIMPRO.OFICIAL" target="blank"></a><li>
				<li id="twitter" data-action="twitter"><a href="https://twitter.com/PLANETAIMPRO" target="blank"></a></li>
				<li id="youtube" data-action="youtube"><a href="http://www.youtube.com/user/PlanetaimproTV" target="blank"></a></li>
			</ul>
		</div>
		<nav role="navigation" id="menu" class="nav-collapse">
			<ul>
				<li><a href="companyia.html"><span>Compañía</span></a></li>
				<li><a href="espectacles.html"><span>Espectáculos</span></a></li>
				<li><a href="eventos.html"><span>Eventos</span></a></li>
				<li><a href="formacion.html"><span>Formación</span></a></li>
				<li><a href="prensa.html"><span>Prensa</span></a></li>
				<li><a href="contacto.html"><span>Contacto</span></a></li>
			</ul>
		</nav>	
		<h1>
			<a href="index.html"><img src="img/logo_planeta_impro.png" alt="Logo Planeta Impro"></a>
		</h1>
	</header>
	
	<p class="resposta-form">Responderemos tu solicitud en breve</p>
	</div>

<?php else: ?>

	<div id="wrapper">
	<header id="mainheader">
		<div id="idioma">
			<ul>
				<li><a>Català</a> | </li>
				<li><a>Castellano</a> | </li>
				<li><a>English</a></li>
			</ul>
		</div>
		<div id="social">
		<ul data-category="social">
				<li id="facebook" data-action="facebook"><a href="https://www.facebook.com/PLANETAIMPRO.OFICIAL" target="blank"></a><li>
				<li id="twitter" data-action="twitter"><a href="https://twitter.com/PLANETAIMPRO" target="blank"></a></li>
				<li id="youtube" data-action="youtube"><a href="http://www.youtube.com/user/PlanetaimproTV" target="blank"></a></li>
			</ul>
		</div>
		<nav role="navigation" id="menu" class="nav-collapse">
			<ul>
				<li><a href="companyia.html"><span>Compañía</span></a></li>
				<li><a href="espectacles.html"><span>Espectáculos</span></a></li>
				<li><a href="eventos.html"><span>Eventos</span></a></li>
				<li><a href="formacion.html"><span>Formación</span></a></li>
				<li><a href="prensa.html"><span>Prensa</span></a></li>
				<li><a href="contacto.html"><span>Contacto</span></a></li>
			</ul>
		</nav>	
		<h1>
			<a href="index.html"><img src="img/logo_planeta_impro.png" alt="Logo Planeta Impro"></a>
		</h1>
	</header>
 <p class="resposta-form">Ha habido un problema con el envío del formulario, inténtalo más tarde.</p>
 </div>
<?php endif; ?>
<!-- Menú -->
	<script>
		var nav = responsiveNav(".nav-collapse");
	</script>
</body>
</html>
