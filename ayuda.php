<?php 
	$titulo = 'Ayuda'; // Título
	$contenido = '<h1>Información de ayuda</h1>
	<p class="nota">La ayuda se actualizará en forma constante, al igual que los contenidos según se vaya viendo la necesidad.</p>
<h3>Contenidos</h3>
<p>La información general de como estan estructurados los contenidos la puedesencontrar en el botón respectivo en la parte superior derecha,o puedes hacer <a href="info.php">click aquí</a>.</p>
<p>En la parte superior encontraras el título del MDM seguido del título de la etapa o menú en el que te encuentres. Posteriormente, en la parte medio, podrás ver el título del tema que estas viendo organizado así (con la exepción de contenidos que usan acordeón o tab):</p>
<h2>Título principal</h2>
<h2>Subtitulo principal</h2>
<h3>Subtitulo</h3>
<p>Contenido</p>
<hr \>
<h3>Función de los botones</h3>
<p>El uso es muy sencillo y el principal elemento para orientarte sobre el manejo del mismo es el <i>tooltip</i>. El tooltip es un mensaje que aparece sobre determinados elementos en el material al poner el cursor sobre ellos, generalmente realizan una descripción del mismo.</p>
<p align="center"><a href="#" title="Aquí aparece una descripción">Ejemplo de Tooltip: Pon el cursor aquí</a></p>
<p>Si quieres conocer las funciones de cada botón simplemente pon tu cursor sobre el, prueba haciendolo en esta ventada sobre los iconos de las franjas verdes.</p>
<p>También podrás encontrar botones entre los contenidos con funciones específicas como el siguiente: </p>
<p><span class="botones"><a href="#"><span style="font-family:socialbats;">[</span> Tomar Evaluación</a></span></p>
<hr \>

<div id="multimedia"><img src="imagenes/logo.jpg"  class="jsnipLightBox thumbImg" alt="Ejemplo de lightbox en imágenes."/></div>

<h3>Imágenes y videos</h3>
<p>Las imágenes y videos utilizan un <i>lightbox</i> para aumentar el tamaño de la imagen y mostrar su descripción en forma dinámica y clara, y únicamente si quién tima el curso desea verla con más detalle.</p>
<p>Haz click sobre la imagen (logo de LocXue) para ver un ejemplo.</p>
<hr \>
<h3>Organización de temas</h3>
Para facilitar el entendimiento y organización de los temas, además de dinamizar el material, en algunas ocasiones se utilizan <i>acordiones</i> o <i>tabs</i> para presentarlos; en ellos podrás seleccionar el tema que desees en la medida que avanzas.
<div id="basic-accordian" ><!--Accordion-->

	<div class="tab_container">
		<div id="test1-header" class="accordion_headings header_highlight" >Ejemplo tema 1</div>
		<div id="test2-header" class="accordion_headings" >Ejemplo tema 2</div>
		<div id="test3-header" class="accordion_headings" >Ejemplo tema 3</div>
		<div id="test4-header" class="accordion_headings" >Ejemplo tema 4</div>
	</div>
	
<div style="float:left;">
	<div id="test1-content">
		<div class="accordion_child">
			Contenido del tema 1. Aquí podrás encontrar imágenes o incluso tooltips adicionales. Generalmente son subtemas de un tema.
		</div>
	</div>

	<div id="test2-content">
		<div class="accordion_child">
			Contenido del tema 2. Aquí podrás encontrar imágenes o incluso tooltips adicionales. Generalmente son subtemas de un tema.
		</div>
	</div>
	
	<div id="test3-content">
		<div class="accordion_child">
			Contenido del tema 3. Aquí podrás encontrar imágenes o incluso tooltips adicionales. Generalmente son subtemas de un tema.
		</div>
	</div>
	
	<div id="test4-content">
		<div class="accordion_child">
			Contenido del tema 4. Aquí podrás encontrar imágenes o incluso tooltips adicionales. Generalmente son subtemas de un tema.
		</div>
	</div>
</div>

</div><!--Fin accordion-->
<hr \>
<h2>¿Aún tienes dudas?</h2>
<p>Si llegas a necesitar ayuda puedes contactarnos y consultarnos lo que desees en las redes sociales y espacios virtuales que vez en la esquina superior-izquierda.</p>
	'; // Contenido
	require('base/general.php');
?>
