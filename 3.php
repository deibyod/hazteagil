<?php 
	require('navegacion.php');
	$contenido = '

<h1>RESUMEN</h1>
<p>En esta etapa nos centraremos de lleno en las tres metodologías mas representativas en el mundo agilista del desarrollo: Scrum, Kanban y XP, veremos los conceptos básicos, roles y practicas de las metodologías. </p>

<h1>INTRODUCCION</h1>
<p>Las metodologías de desarrollo ágiles en auge en este momento en el mundo son: Scrum, Kanban y XP, las tres poseen practicas agilistas que ayudan a los equipos de trabajo a abordar proyectos tanto sencillos como complejos y de igual forma pequeños y grandes. Hay artefactos de gran utilidad en estas metodologías como la identificación de roles en scrum, la regla de las 40 horas en XP y la utilización de tableros kanban. Es importante resaltar que las practicas de estas tres metodologías se puede adaptar a las necesidades del equipo de trabajo y tomar las mejores practicas de cada metodología según sea necesario para abordar un proyecto </p>

<h1>Scrum</h1>
	<h2>¿Qué es Scrum?</h2>
	<p>En 1986, los profesores de Empresariales Hirotaka Takeuchi e Ikujiro Nonaka, propusieron un modelo de desarrollo de procesos que presentaba una alternativa al modelo de entonces. </p>
	<p><b>Haciendo una comparación con el mundo de los deportes:</b></p>

<p>En el fútbol, el entrenador y los jugadores se reúnen antes de empezar la primera parte para poner en común la estrategia que van a seguir a lo largo del partido. Una vez empezado el partido, los jugadores no vuelven a reunirse para discutir sobre tácticas hasta el descanso, en donde pondrán en común la forma en la que van a abordar la segunda parte en su totalidad (exceptuando mensajes muy esporádicos enviados desde el banquillo por el entrenador).  En resumen, decisiones estratégicas que afectan a periodos de tiempo amplios y largos intervalos temporales entre reuniones estratégicas.</p>
<div id="multimedia"><img src="imagenes/scrum.jpg"  class="jsnipLightBox thumbImg" alt="Scrum en un juego de Rugby"/></div>
<p>En el rugby, en cambio, los jugadores intentan avanzar yardas en sucesivos intentos (también llamados downs u oportunidades). Entre cada uno de estos intentos, los jugadores se reúnen formando una piña para poner en común la estrategia que van a seguir. En esa toma de decisiones, plantean la táctica únicamente para este down (¡ya decidiremos lo de más adelante cuando veamos los resultados de este intento!). En resumen:deciciones muy específicas para intervalos cortos y reuniones frecuentes para tomar esas decisiones.</p>

<p>Precisamente en 1991, Peter DeGrace y Leslie Hulet Stahl, llamaron a este modelo de procesos Scrum, que es el nombre que tiene el pelotón de jugadores que se forma tras cada interrupción en un partido de rugby. El eje principal de esta metodología de procesos (y de muchas otras metodologías agile) está en realizar un desarrollo iterativo e incremental.</p>
<p><b>Iterativo</b>, porque se segmenta el tiempo en <b>sprints</b>, o periodos fijos de tiempo (normalmente entre 1 y 4 semanas). En cada uno de estos periodos o iteraciones, se crea un producto de software que puede ser probado por el cliente. No importa que empiece siendo un producto con funcionalidad pobre, ya que queremos que sea…</p>
<p><b>Incremental</b>, porque en cada sprint vamos incrementando la funcionalidad del producto.</p>
<p>Este modelo se contrapone al modelo clásico de desarrollo del software (diseño en cascada), donde existe un solo ciclo en el que se realiza una fase de análisis previo, una segunda fase de diseño y una fase final de implementación.</p>
<p>En palabras de Henrik Kniberg, el modelo clásico de desarrollo de software se asemeja a disparar a una diana utilizando el proyectil de un cañón. Gastaríamos bastante tiempo inicialmente en elaborar complejos cálculos para calcular la trayectoria y la inclinación a la que tenemos que colocar el cañón. Una vez realizada este análisis previo, encenderíamos la mecha y cruzaríamos los dedos.</p>
<p>¿Pero esto funcionaría en el mundo real? El problema es que el entorno del desarrollo de software no es perfecto. ¿Qué ocurre si sopla el viento durante la trayectoria del proyectil? ¿Y si el cañón tiene un defecto en el calibrado? ¿Qué ocurre si la diana se mueve de su posición original?</p>
<p>Muchos han intentado cambiar estas variables del mundo del software, pero se ha demostrado que es un entorno cambiante y cuanto antes nos demos cuenta de eso, mejor. Sabemos que ahí fuera, en el mundo real, los servidores se caen, las conexiones se pierden, los programadores enferman y los campos electromagnéticos destrozan pulverizan nuestros discos duros.</p>
<p>Con esta metáfora, el modelo de <b>Scrum</b> se asemejaría más a un misil inteligente, el cual lanzaríamos sin hacer muchos cálculos, ya que el propio proyectil sabe cambiar su trayectoria mientras va volando en ruta. Ese es el camino de Scrum y del desarrollo ágil: el poder revisar el desarrollo de forma frecuente, continuada e incremental.</p>
<p>Para conseguir esta necesidad, Scrum propone dos tipos de roles: <b>roles cerdo</b> (comprometidos con el proyecto) y <b>roles gallina</b> (involucrados con el proyecto).</p>

<p class="nota">Según una encuesta publicada por VersionOne en 2010 realizada a 4770 entrevistados de 91 países. La misma, revela que el 58% de los encuestados, utiliza Scrum como metodología para la gestión de proyectos de desarrollo de Software.</p>
	'; // Contenido
	require('base/general.php');
?>
