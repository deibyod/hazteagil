<?php 
	require('navegacion.php');
	$contenido = '<h1>Ciclo de vida del software</h1>
	<p>Por ciclo de vida del software, entendemos la sucesión de etapas por las que pasa el software desde que un nuevo proyecto es concebido hasta que se deja de usar. Estas etapas representan el ciclo de actividades involucradas en el desarrollo, uso y mantenimiento de sistemas de software, además de llevar asociadas una serie de documentos que serán la salida de cada una de estas fases y servirán de entrada en la fase siguiente. Tales actividades son:</p>
	<ul>
	<li><b>Adopción e identificación del sistema:</b> es importante conocer el origen del sistema, así como las motivaciones que impulsaron el desarrollo del sistema (por qué, para qué, etcétera.).</li>
	<li><b>Análisis de requerimientos:</b> identificación de las necesidades del cliente y los usuarios que el sistema debe satisfacer.</li>
	<li><b>Especificación:</b> los requerimientos se realizan en un lenguaje más formal, de manera que se pueda encontrar la función de correspondencia entre las entradas del sistema y las salidas que se supone que genera. Al estar completamente especificado el sistema, se pueden hacer estimaciones cuantitativas del coste, tiempos de diseño y asignación de personal al sistema, así como la planificación general del proyecto.</li>
	<li><b>Especificación de la arquitectura:</b> define las interfaces de interconexión y recursos entre módulos del sistema de manera apropiada para su diseño detallado y administración.</li>
	<li><b>Diseño:</b> en esta etapa, se divide el sistema en partes manejables que, como anteriormente hemos dicho se llaman módulos, y se analizan los elementos que las constituyen. Esto permite afrontar proyectos de muy alta complejidad.</li>
	<li><b>Desarrollo e implementación:</b> codificación y depuración de la etapa de diseño en implementaciones de código fuente operacional.</li>
	<li><b>Integración y prueba del software:</b> ensamble de los componentes de acuerdo a la arquitectura establecida y evaluación del comportamiento de todo el sistema atendiendo a su funcionalidad y eficacia.</li>
	<li><b>Documentación:</b> generación de documentos necesarios para el uso y mantenimiento.</li>
	<li><b>Entrenamiento y uso:</b> instrucciones y guías para los usuarios detallando las posibilidades y limitaciones del sistema, para su uso efectivo.</li>
	<li><b>Mantenimiento del software:</b> actividades para el mantenimiento operativo del sistema. Se clasifican en: evolución, conservación y mantenimiento propiamente dicho.</li>
	</ul>
	<p>Existen diversos modelos de ciclo de vida, pero cada uno de ellos va asociado a unos métodos,   herramientas y procedimientos que debemos usar a lo largo de un proyecto.</p>
	'; // Contenido
	require('base/general.php');
?>
