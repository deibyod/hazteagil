<?php 
	require('navegacion.php');
	$contenido = '<h1>Kanban</h1>
	<p>Kanban, llega como metodología de gestión de proyectos, de la mano de la automotriz Toyota, representando estadísticamente, la metodología ágil que menor resistencia presenta en las compañías acostumbradas a las metodologías tradicionales.</p>


<p>La palabra Kanban, de origen japonés, se compone de dos términos: Kan que puede traducirse como "visual" y ban, como "insignia", siendo una traducción aproximada, "insignia visual".</p>
	
<div id="basic-accordian" ><!--Accordion-->

	<div class="tab_container">
		<div id="test1-header" class="accordion_headings header_highlight" >Orígenes</div>
		<div id="test2-header" class="accordion_headings" >Las tres reglas de Kanban</div>
	</div>

<div style="float:left;">
	<div id="test1-content">
		<div class="accordion_child">
		
<p>Kanban se basa en un sistema de producción que dispara trabajo solo cuando existe capacidad para procesarlo. El disparador de trabajo es representado por tarjetas kanban de las cuales se dispone de una cantidad limitada.</p>
<p>Cada tarjeta Kanban acompaña a un item de trabajo durante todo el proceso de producción, hasta que éste, es empujado fuera del sistema, liberando una tarjeta. Un nuevo ítem de trabajo, solo podrá ser ingresado/aceptado si se dispone de una tarjeta kanban libre.</p>
<p>Este proceso de producción, donde un trabajo se introduce al sistema solo cuando existe disponibilidad para procesarlo, se denomina pull (tirar) en contrapartida al mecanismo push (empujar), donde el trabajo se introduce en función de la demanda.</p>
<p>En el desarrollo de Software, Kanban fue introducido por David Anderson de la Unidad de Negocios XIT de Microsoft, en 2004, reemplazando el sistemas de tarjetas por un tablero visual similar al de Scrum, pero con características extendidas que veremos a continuación.</p>
		
		</div>
	</div>
  
	<div id="test2-content">
		<div class="accordion_child">
	
<div id="multimedia"><img src="imagenes/Kanban.jpg"  class="jsnipLightBox thumbImg" alt="Esquema de Integración de código y tablero Kanban"/></div>


	
<p>Con tan solo tres simples reglas, Kanban demuestra ser una de las metodologías adaptativas que menos resistencia al cambio presenta. Dichas reglas son:</p>
<ol>
<li>Mostrar el proceso</li>
<li>Limitar el trabajo en curso</li>
<li>Optimizar el flujo de trabajo</li>
</ol>
<p>Veamos cada una de ellas.</p>

<h2>Regla #1: Mostrar el proceso</h2>
<p>Consiste en la visualización de todo el proceso de desarrollo, mediante un tablero físico, generalmente, públicamente asequible. El objetivo de mostrar el proceso, consiste en:</p>
<ul>
<li>Entender mejor el proceso de trabajo actual;</li>
<li>Conocer los problemas que puedan surgir y tomar decisiones;</li>
<li>Mejorar la comunicación entre todos los interesados/participantes del proyecto;</li>
<li>Hacer los futuros procesos más predecibles.</li>
</ul>
<p>Un tablero Kanban, se divide en columnas las cuales representan un proceso de trabajo. Un ejemplo clásico de columnas para dividir un tablero Kanaban, sería el siguiente:</p>
<p align="center"><b>Cola de entrada | Análisis | Desarrollo | Test | Deploy | Producción</b></p>
<p>La cantidad y nombre de las columnas, varía de acuerdo a las necesidades de cada equipo y en la mayoría de los casos, éstas, son subdivididas en dos columnas: cola de espera y en curso.</p>

<h2>Regla #2: Limitar el trabajo en curso (WIP)</h2>



<p>Los límites del WIP (work in progress - trabajo en curso) consisten en acordar anticipadamente, la cantidad de ítems que pueden abordarse por cada proceso (es decir, por columnas del tablero). </p>

<div id="multimedia"><img src="imagenes/wip.jpg"  class="jsnipLightBox thumbImg" alt="Ejemplo de tablero Kanban con WIP (Trabajo en curso)"/></div>

<p>El principal objetivo de establecer estos límites, es el de detectar cuellos de botella.</p>
<p>Los cuellos de botella representan el estancamiento de un proceso determinado. Viendo el tablero ficticio de la imagen, se puede comprender mejor.</p>

<p>En el tablero anterior, podemos visualizar claramente, que en la columna "pruebas" se produce un cuello de botella, pues el límite WIP está cubierto, mientras que el proceso siguiente (deploy), está totalmente libre. Esto, claramente marca un problema a resolver en el proceso correspondiente a las pruebas.</p>
<p>Es un valor a tener en cuenta, que la resolución de cuellos de botella, la mayoría de las veces, motiva la colaboración del equipo entre los diferentes procesos. Pues mientras existen procesos colapsados, existen a la vez, procesos libres para aceptar nuevos ítems. El cuello de botella ha generado un estancamiento, y los procesos libres, pueden ayudar a "desenredar" a los procesos colapsados.</p>

<h2>Regla #3: Optimizar el flujo de trabajo</h2>
<p>El objetivo es la producción estable, continua y previsible. Midiendo el tiempo que el ciclo completo de ejecución del proyecto demanda (por ejemplo, cantidad de días desde el inicio del análisis hasta el fin del deploy - según el ejemplo del tablero anterior), se obtiene el CycleTime.</p>
<p>Al dividir, el CycleTime por el WIP, se obtiene el "rendimiento de trabajo", denominado Throughput, es decir, la cantidad de ítems que un equipo puede terminar en un determinado período de tiempo.</p>
<p><b>Throughput = CycleTime/WIP</b></p>
<p>Con estos valores, la optimización del flujo de trabajo consistirá en la búsqueda de:</p>
<ul>
<li>Minimizar el CycleTime</li>
<li>Maximizar el Throughput</li>
<li>Lograr una variabilidad mínima entre CycleTime y Throughput</li>
</ul>

		</div>
	</div>
	
</div>

</div><!--Fin accordion-->
	
	'; // Contenido
	require('base/general.php');
?>
