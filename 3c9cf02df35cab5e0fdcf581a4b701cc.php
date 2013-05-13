<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>Desafio Hacker</title>

<link rel="stylesheet" href="/assets/css/bootstrap.min.css" media="all" />
<link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css" media="all" />
<link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="/assets/css/cyborg.css" media="all" />

</head>
<body>
<div class="container">
<content>
<h1>Desafío Hacker</h1>
<h2>1 n00b - ¿Como funciona Internet?</h2>

<div class="row-fluid">

	<div class="span6">
	<?php if ( false ) { ?>

	<?php } else { ?>
	<img src="/assets/img/stallman-aburrido.jpg" />
	
	<p><strong>- Ah, de vuelta vos! Por lo menos esta vez no estas usando la computadora de tu abuelita.</strong></p>
	<p><strong>- Si je, mi abuelita.</strong> le respondes antes de que piense que no sabes usar el teclado.</p>
	<p><strong>- De todas formas, para cualquier misión necesitaras un nivel 3 de Conocimiento de redes...</strong> 
	"Hmmm" se queja y murmura cosas en Klingon mientras se rasca la barba.</p>
	<p><strong>- Veamos ¿Cuál es la IP pública de scanme.nmap.org? y ¿Qué puertos tiene abierto? </strong></p>
	<p>¿Ehh, una prueba? te decis para adentro pero recordas que ya la cagaste con eso del Window$. Abris una consola y como poseido por el espiritu de Aaron Swartz empezas a tipear en un extraño lenguaje.</p>

	<textarea name="answer">127.0.0.1
22
23
80</textarea>
<input class="btn submit btn-inverse" type="submit" value="Responder" />
	<?php } ?>
	</div>

	<div class="span6 alert alert-block">
	<p>Internet esta construida sobre el <strong>protocolo TCP/IP</strong> pero tambien utiliza otros protocolos (ICMP, DNS, etc).</p>

	<p>El <a href="http://es.wikipedia.org/wiki/Transmission_Control_Protocol" target="_blank">protocolo TCP</a> es el encargado en intercambiar información entre diferentes programas a travez de una red, sin que se pierda, dañe o desordene. Para distinguir diferentes aplicaciones utiliza <strong>puertos</strong>. Por ejemplo 22 para SSH, 80 para la web, 110 para el correo POP3, etc.</p>
	
	<p>El <a href="http://es.wikipedia.org/wiki/Protocolo_de_Internet" target="_blank">protocolo IP</a> es el encargado de identificar los nodos de origen y destino. Tambien se encarga de enrutar paquetes desde el origen al destino. Existe otro protocolo llamado <a href="http://es.wikipedia.org/wiki/Domain_Name_System" target="_blank">DNS</a> que convierte los <strong>dominios</strong> a <strong>direcciones ip</strong>.</p>

	<p>Un paquete tendrá la ip y puerto de origen, la ip y puerto de destino, el tipo y más cosas que podes investigar por tu cuenta.</p>

	<h3><i class="icon-wrench"></i> Herramientas</h3>

	<p>El protocolo TCP y otros protocolos que se utilizan en Internet tiene diferentes tipos de paquetes que cumplen diferentes funciones, como preguntar si un puerto esta abierto, iniciar una conexion, terminarla, etc. Para ver el trafico de paquetes en tu maquina (incluso aveces en tu red privada) podes usar algun <strong>analizador de trafico</strong> como <a href="http://www.wireshark.org/" target="_blank">WireShark</a>.</p>

	<p>Para averiguar que puertos tiene abiertos cierta ip podes usar un <strong>escaner de puertos</strong> como el <a href="http://nmap.org/" target="_blank">NMap</a>.</p>

	<h3>¿Como instalar cosas en GNU/Linux?</h3>

	<p>Depende que distribucion tengas, en Debian y derivados (como Ubuntu, Trisquel y la mayoria) <code># apt-get install aplicacion</code> alcanza (el <code>#</code> significa que estas como superusuario o root, <code>&gt;</code> significa cualquier usuario). Empezá a escribir el nombre de la aplicación y dale tab un par de veces para mostrar las opciones.</p>

	<p><code># apt-get install nmap zenmap wireshark</code></p>

	<h3>¿Como usar programas en GNU/Linux?</h3>

	<p>Para ejecutar un programa desde la consola solo tenes que escribir el nombre del programa.</p>
	<p>Si queres aprender como usar un programa podes intentar con el parametro <code>--help</code> o el comando <code>man</code> seguido del nombre del programa.</p>
<p>Ejecuta estos comandos <code>&gt; ls</code> <code>&gt; man nmap</code> <code>&gt; ping --help</code> <code>&gt; dig google.com</code> y <strong>juega con estos programas</strong>.</p>
	</div>

</div>
</content>
</div>
</body></html>
