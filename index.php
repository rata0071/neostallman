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
<h2>0 Abuela - ¿Tenés GNU/Linux?</h2>

<div class="row-fluid">

<div class="span6">
<?php

$ua = $_SERVER["HTTP_USER_AGENT"];

$linux = strpos($ua, 'Linux');

if ( $linux ) { ?>

<p>Ya tenés GNU/Linux. Pasas al <a href="/3c9cf02df35cab5e0fdcf581a4b701cc.php">siguiente nivel</a></p>

<p>Y acordate, cada vez que decis Linux (en vez de GNU/Linux) <strong>Stallman mata un gatito</strong>.</p>
<p><img src="/assets/img/rms.png" title='"Deci GNU/Linux ta que te pario" dijo Stallman y le arojo un gato a un asistente' /></p>

<?php } else { ?>
<p><img src="/assets/img/stallman.jpg" border="0" /></p>
<p>La pantalla lentamente se ilumina, del desorden de fosforo verde surge una imagen, es Neo Stallman el primer hacker.</p>

<p><strong>- ¿Vienes aqui en busca de una mision usando Window$?</strong></p>
<p>Confundido te preguntas de que mision esta hablando cuando sigue...</p>
<p><strong>- Ningun hacker de verdad usa Window$, vuelve cuando sepas usar una computadora.</strong></p>
<p>Ni siquiera pudiste preguntar que otra cosa aparte de Window$ existia cuando Neo Stallman te desconecto de la red.</p>

<?php } ?>

</div>
<div class="span6 alert alert-block">
Algunas cosas podes hacer en Window$ y talvez estes acostumbrado, pero a la larga, un verdadero hacker necesita GNU/Linux.<br />
Por eso para superar este desafio tenés que instalar alguna distribución de GNU/Linux, por ejemplo 
<a href="http://www.gnewsense.org/" title="Basada en Debian y Ubuntu, con el patrocinio de la FSF.">GnewSense</a>, 
<a href="http://trisquel.info/" title="Basada en Ubuntu.">Trisquel</a>, 
<a href="http://parabolagnulinux.org/" title="Basada en Arch.">Parabola</a> o 
<a href="http://proyecto.ututo.net/cmsd/" title="Basada en Gentoo.">Ututo</a>.<br />
No tengas miedo de probar varias <a hred="http://www.gnu.org/distros/free-distros.html">distrinuciones libres</a>.<br />
<strong>Nota: algunas computadoras tienen doble booteo, osea pueden iniciar con Window$ o GNU/Linux, INVESTIGA!!!</strong>
</div>

</div>
</content>
</div>
</body></html>
