<?php 
	require('navegacion.php');
	$contenido = '<div id="basic-accordian" ><!--Accordion-->

	<div class="tab_container">
		<div id="test1-header" class="accordion_headings header_highlight" >Ingeniería</div>
		<div id="test2-header" class="accordion_headings" >Software</div>
		<div id="test3-header" class="accordion_headings" >Ingeniería de Software</div>
	</div>

<div style="float:left;">
	<div id="test1-content">
		<div class="accordion_child">
			<p>La ingeniería es el estudio y la aplicación de las distintas ramas de la tecnología. El profesional en este ámbito recibe el nombre de ingeniero.</p>
			<p>La actividad del ingeniero supone la concreción de una idea en la realidad. Esto quiere decir que, a través de técnicas, diseños y modelos, y con el conocimiento proveniente de las ciencias, la ingeniería puede resolver problemas y satisfacer necesidades humanas.</p>
			<p>La ingeniería también supone la aplicación de la inventiva y del ingenio para desarrollar una cierta actividad. Esto, por supuesto, no implica que no se utilice el método científico para llevar a cabo los planes.</p>
		</div>
	</div>
  
	<div id="test2-content">
		<div class="accordion_child">
			<p class="cita">Es el conjunto de los programas de cómputo, procedimientos, reglas, documentación y datos asociados que forman parte de las operaciones de un sistema de computación. [Std. 729, IEEE]</p>
			<p class="cita">El software no son solo programas, sino todos los documentos asociados y la configuración de datos que se necesitan para hacer que estos programas operen de manera correcta. Un sistema de software consiste en diversos programas independientes, archivos de configuración que se utilizan para ejecutar estos programas, un sistema de documentación que describe la estructura del sistema, la documentación para el usuario que explica cómo utilizar el sistema y sitios web que permitan a los usuarios descargar la información de productos recientes. [Sommerville, 2004]</p>
			<p class="cita">El software de computadora es el producto que los ingenieros de software construyen y después mantienen en el largo plazo. El software se forma con (1) las instrucciones (programas de computadora) que al ejecutar se proporcionan las características, funciones y el grado de desempeño deseados; (2) las estructuras de datos que permiten que los programas manipulen información de manera adecuada; y (3) los documentos que describen la operación y uso de los programas. [Pressman, 2005]</p>
		</div>
	</div>
  
	<div id="test3-content">
		<div class="accordion_child">
			<p class="cita">Ingeniería del Software es el estudio de los principios y metodologías para desarrollo y mantenimiento de sistemas de software. [Zelkovitz, 1978]</p>
			<p class="cita">Ingeniería del Software es la aplicación práctica del conocimiento científico en el diseño y construcción de programas de computadora y la documentación asociada requerida para desarrollar y operar (funcionar) y mantenerlos. Así Como también desarrollo de software o produccion de software. [Bohem, 1976]</p>
			<p class="cita">La Ingeniería del Software es el establecimiento y uso de principios sólidos de la ingeniería para obtener económicamente un software confiable y que funcione de modo eficiente en máquinas reales. [Bauer, 1972]</p>
			<p class="cita">Ingeniería de Software es la aplicación de un enfoque sistemático, disciplinado y cuantificable al desarrollo operación (funcionamiento) y mantenimiento del software: es decir, la aplicación de ingeniería al software. [IEEE, 1993]</p>
			<p class="cita">La Ingeniería de Software es una disciplina de la ingeniería que comprende todos los aspectos de la producción de software desde las etapas iniciales de la especificación del sistema hasta el mantenimiento de este después que se utiliza. [Sommerville, 2004]</p>
			<p class="cita">La Ingeniería de Software es una disciplina que integra el proceso, los métodos, y las herramientas para el desarrollo de software de computadora. [Pressman, 2005]</p>
			<p>La ingeniería del software abarca un conjunto de tres elementos clave: métodos, herramientas y procedimientos, que facilitan al gestor el control del proceso de desarrollo y suministran a los implementadores bases para construir de forma productiva software de alta calidad.</p>
			<ul>
				<li>Los <b>métodos</b> indican cómo construir técnicamente el software, abarcando amplias tareas de planificación y estimación de proyectos, análisis de requisitos, diseño de estructuras de datos, programas y procedimientos, la codificación, las pruebas y el mantenimiento.</li>
				<li>Las <b>herramientas</b> proporcionan un soporte automático o semiautomático para usar los métodos. Existen herramientas para cada una de las fases anteriores y sistemas que integran las herramientas de cada fase de forma que sirven para todo el proceso de desarrollo. Estas herramientas se denominan CASE (Computer Assisted Software Engineering).</li>
				<li>Los <b>procedimientos</b> definen la secuencia en que se aplican los métodos, los documentos que requieren, los controles que aseguran la calidad y las directrices que permiten a los gestores evaluar los progresos.</li>
			</ul>
		</div>
	</div>
</div>

</div><!--Fin accordion-->
	'; // Contenido
	require('base/general.php');
?>
