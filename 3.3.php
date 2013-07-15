<?php 
	require('navegacion.php');
	$contenido = '<h1>Scrum</h1>
	<h2>Organización del trabajo: reuniones</h2>
	<p>Como hemos comentado anteriormente, en Scrum, se trabaja en período de tiempo iterativos, de duración fija, denominados Sprints. Para organizar cada Sprint, las reuniones propuestas por Scrum son las siguientes:</p>

<div id="multimedia"><img src="imagenes/ciclodescrum.png"  class="jsnipLightBox thumbImg" alt="Ciclo de Scrum"/></div>

<ol>
<li>Planificación</li>
<li>Reunión diaria</li>
<li>Revisión </li>
<li>Retrospectiva</li>
</ol>
<p>Veamos en qué consiste cada una de ellas, y como llevarlas a la práctica.</p>
	
<div id="basic-accordian" ><!--Accordion-->

	<div class="tab_container">
		<div id="test1-header" class="accordion_headings header_highlight" >Planificación</div>
		<div id="test2-header" class="accordion_headings" >Daily Scrum</div>
		<div id="test3-header" class="accordion_headings" >Revisión</div>
		<div id="test4-header" class="accordion_headings" >Retrospectiva</div>
	</div>

<div style="float:left;">
	<div id="test1-content">
		<div class="accordion_child">

<h3>Reunión de Planificación del Sprint</h3>
<p>Rompiendo con el mito, que en el ambiente IT se suele rumorear, de que en las metodologías ágiles no existe una planificación ni definición precisa del alcance, llegamos a la ceremonia clave de un Sprint: la planificación.</p>
<p>La planificación es lo primero que debe hacerse al comienzo de cada Sprint. Durante esta reunión participan el Dueño de Producto, el Scrum Master y el Scrum Team.</p>
<p>El objetivo de esta ceremonia, es que el Dueño de Producto pueda presentar al equipo, las historias de usuario prioritarias, comprendidas en el Backlog de producto; que el equipo comprenda el alcance de las mismas mediante preguntas; y que ambos negocien cuáles pueden ser desarrolladas en el Sprint que se está planificando.</p>
<p>Una vez definido el alcance del sprint, el equipo dividirá cada historia de usuario, en tareas, las cuales serán necesarias para desarrollar la funcionalidad descrita en la historia.</p>
<p>Estas tareas, tendrán un esfuerzo de desarrollo estimado (generalmente mediante técnicas como Planning Poker), tras lo cual, serán pasadas al backlog de Sprint y de allí se visualizarán en el tablero una vez que cada miembro se haya asignado aquellas que considere puede realizar. La planificación puede demandar solo unas horas, o toda una jornada laboral completa.</p>
		
		</div>
	</div>
  
	<div id="test2-content">
		<div class="accordion_child">

<h3>Daily Scrum</h3>
<p>Las reuniones diarias para Scrum, son "conversaciones" de no más de 5-15 minutos, que el Scrum Master tendrá al comienzo de cada día, con cada miembro del equipo. </p>
<p>En esta conversación, el Scrum Master deberá ponerse al día de lo que cada miembro ha desarrollado (en la jornada previa), lo que hará en la fecha actual, pero por sobre todo, conocer cuáles impedimentos estén surgiendo, a fin de resolverlos y que el Scrum Team pueda continuar sus labores, sin preocupaciones.</p>
Reunión de Revisión del Sprint 
<p>Durante la reunión de revisión en Scrum, el equipo presentará al Dueño de Producto las funcionalidades desarrolladas. Las explicará y hará una demostración de ellas, a fin de que, tanto Dueño de Producto como la audiencia, puedan experimentarlas.</p>
<p>En la reunión de revisión es donde el Dueño de Producto podrá sugerir mejoras a las funcionalidades desarrolladas, aprobarlas por completo o porque no, también rechazarlas, aunque esto último, jamás lo he visto en la práctica.</p>
<p>La ceremonia de revisión se lleva a cabo el último día del Sprint, y no tiene una duración fija. En la práctica, se utiliza el tiempo que sea necesario.</p>

		</div>
	</div>
	
<div id="test3-content">
		<div class="accordion_child">

<h3>Reunión de Revisión del Sprint</h3>
<p>Las reuniones diarias para Scrum, son "conversaciones" de no más de 5-15 minutos, que el Scrum Master tendrá al comienzo de cada día, con cada miembro del equipo. </p>
<p>En esta conversación, el Scrum Master deberá ponerse al día de lo que cada miembro ha desarrollado (en la jornada previa), lo que hará en la fecha actual, pero por sobre todo, conocer cuáles impedimentos estén surgiendo, a fin de resolverlos y que el Scrum Team pueda continuar sus labores, sin preocupaciones.</p>
<p>Durante la reunión de revisión en Scrum, el equipo presentará al Dueño de Producto las funcionalidades desarrolladas. Las explicará y hará una demostración de ellas, a fin de que, tanto Dueño de Producto como la audiencia, puedan experimentarlas.</p>
<p>En la reunión de revisión es donde el Dueño de Producto podrá sugerir mejoras a las funcionalidades desarrolladas, aprobarlas por completo o porque no, también rechazarlas, aunque esto último, jamás lo he visto en la práctica.</p>
<p>La ceremonia de revisión se lleva a cabo el último día del Sprint, y no tiene una duración fija. En la práctica, se utiliza el tiempo que sea necesario.</p>

		</div>
	</div>
	
	<div id="test4-content">
		<div class="accordion_child">

<h3>Retrospectiva del Sprint: en la búsqueda de la perfección</h3>
<p>No es en vano la frase "en la búsqueda de la perfección". Como última reunión del Sprint, Scrum propone efectuar al equipo, una retrospectiva en forma conjunta con el Scrum Master y opcionalmente, el Dueño de Producto.</p>
<p>El objetivo de esta retrospectiva, como su nombre lo indica, es "mirar hacia atrás", realizar un análisis de lo que se ha hecho y sus resultados correspondientes, y decidir qué medidas concretas emplear, a fin de mejorar esos resultados.</p>
<p>La retrospectiva en Scrum suele ser vista como una "terapia de aprendizaje", donde la finalidad es "aprender de los aciertos, de los errores y mejorar todo aquello que sea factible".</p>

		</div>
	</div>
	
</div>

</div><!--Fin accordion-->
	
	'; // Contenido
	require('base/general.php');
?>
