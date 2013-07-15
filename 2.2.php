<?php 
	require('navegacion.php');
	$contenido = '<h1>El Manifiesto Ágil</h1>
	
<div id="basic-accordian" ><!--Accordion-->

	<div class="tab_container">
		<div id="test1-header" class="accordion_headings header_highlight" >Valores Agilistas</div>
		<div id="test2-header" class="accordion_headings" >Principios Agilistas</div>
	</div>

<div style="float:left;">
	<div id="test1-content">
		<div class="accordion_child">
		
	<p>El Manifiesto comienza enumerando los principales valores del desarrollo ágil. Se valora:</p>
	
<div id="multimedia"><img src="imagenes/manifiesto.jpg"  class="jsnipLightBox thumbImg" alt="Manifiesto ágil"/></div>

	<h3>AL INDIVIDUO Y LAS INTERACCIONES DEL EQUIPO DE DESARROLLO <i>sobre</i> el proceso y las herramientas</h3>
	<p>La gente es el principal factor de éxito de un proyecto software. Si se sigue un buen proceso de desarrollo, pero el equipo falla, el éxito no está asegurado; sin embargo, si el equipo funciona, es más fácil conseguir el objetivo final, aunque no se tenga un proceso bien definido. No se necesitan desarrolladores brillantes, sino desarrolladores que se adapten bien al trabajo en equipo. Así mismo, las herramientas (compiladores, depuradores, control de versiones, etc.) son importantes para mejorar el rendimiento del equipo, pero el disponer más recursos que los estrictamente necesarios también puede afectar negativamente. En resumen, es más importante construir un buen equipo que construir el entorno. Muchas veces se comete el error de construir primero el entorno y esperar que el equipo se adapte automáticamente. Es mejor crear el equipo y que éste configure su propio entorno de desarrollo en base a sus necesidades.</p>
	
	<h3>DESARROLLAR SOFTWARE QUE FUNCIONA <i>más que</i> conseguir una buena documentación</h3>
	<p>Aunque se parte de la base de que el software sin documentación es un desastre, la regla a seguir es “no producir documentos a menos que sean necesarios de forma inmediata para tomar un decisión importante”. Estos documentos deben ser cortos y centrarse en lo fundamental. Si una vez iniciado el proyecto, un nuevo miembro se incorpora al equipo de desarrollo, se considera que los dos elementos que más le van a servir para ponerse al día son: el propio código y la interacción con el equipo.</p>
	
	<h3>LA COLABORACIÓN CON EL CLIENTE <i>más que</i> la negociación de un contrato</h3>
	Las características particulares del desarrollo de software hace que muchos proyectos hayan fracasado por intentar cumplir unos plazos y unos costes preestablecidos al inicio del mismo, según los requisitos que el cliente manifestaba en ese momento. Por ello, se propone que exista una interacción constante entre el cliente y el equipo de desarrollo. Esta colaboración entre ambos será la que marque la marcha del proyecto y asegure su éxito.
	
	<h3>RESPONDER A LOS CAMBIOS <i>más que</i> seguir estrictamente un plan</h3>
	La habilidad de responder a los cambios que puedan surgir a los largo del proyecto (cambios en los requisitos, en la tecnología, en el equipo, etc.) determina también el éxito o fracaso del mismo. Por lo tanto, la planificación no debe ser estricta puesto que hay muchas variables en juego, debe ser flexible para poder adaptarse a los cambios que puedan surgir. Una buena estrategia es hacer planificaciones detalladas para unas pocas semanas y planificaciones mucho más abiertas para unos pocos meses.
	
	<p>Los valores anteriores inspiran los doce principios del manifiesto.</p>
	
		</div>
	</div>
  
	<div id="test2-content">
		<div class="accordion_child">
			
	<p>Estos principios son las características que diferencian un proceso ágil de uno tradicional. Los dos primeros son generales y resumen gran parte del espíritu ágil. Son:</p>
<ol type="I">
<li><b>La prioridad es satisfacer al cliente mediante tempranas y continuas entregas de software que le aporte un valor.</b> Un proceso es ágil si a las pocas semanas de empezar ya entrega software que funcione aunque sea rudimentario. El cliente decide si pone en marcha dicho software con la funcionalidad que ahora le proporciona o simplemente lo revisa e informa de posibles cambios a realizar.</li>
<li><b>Dar la bienvenida a los cambios.</b> Se capturan los cambios para que el cliente tenga una ventaja competitiva. Este principio es una actitud que deben adoptar los miembros del equipo de desarrollo. Los cambios en los requisitos deben verse como algo positivo. Les va a permitir aprender más, a la vez que logran una mayor satisfacción del cliente. Este principio implica además que la estructura del software debe ser flexible para poder incorporar los cambios sin demasiado coste añadido. El paradigma orientado a objetos puede ayudar a conseguir esta flexibilidad.</li>
<p><b><i>* Luego existen una serie de principios que tienen que ver directamente con el proceso de desarrollo de software a seguir.</i></b></p>
<li><b>Entregar frecuentemente software que funcione desde un par de semanas a un par de meses, con el menor intervalo de tiempo posible entre entregas.</b> Las entregas al cliente se insiste en que sean software, no planificaciones, ni documentación de análisis o de diseño.</li>
<li><b>La gente del negocio y los desarrolladores deben trabajar juntos a lo largo del proyecto.</b> El proceso de desarrollo necesita ser guiado por el cliente, por lo que la interacción con el equipo es muy frecuente.</li>
<li><b>Construir el proyecto en torno a individuos motivados.</b> Darles el entorno y el apoyo que necesitan y confiar en ellos para conseguir finalizar el trabajo. La gente es el principal factor de éxito, todo los demás (proceso, entorno, gestión, etc.) queda en segundo plano. Si cualquiera de ellos tiene un efecto negativo sobre los individuos debe ser cambiado.</li>
<li><b>El diálogo cara a cara es el método más eficiente y efectivo para comunicar información dentro de un equipo de desarrollo.</b> Los miembros de equipo deben hablar entre ellos, éste es el principal modo de comunicación. Se pueden crear documentos pero no todo estará en ellos, no es lo que el equipo espera.</li>
<li><b>El software que funciona es la medida principal de progreso.</b> El estado de un proyecto no viene dado por la documentación generada o la fase en la que se encuentre, sino por el código generado y en funcionamiento. Por ejemplo, un proyecto se encuentra al 50% si el 50% de los requisitos ya están en funcionamiento.</li>
<li><b>Los procesos ágiles promueven un desarrollo sostenible.</b> Los promotores, desarrolladores y usuarios deberían ser capaces de mantener una paz constante. No se trata de desarrollar lo más rápido posible, sino de mantener el ritmo de desarrollo durante toda la duración del proyecto, asegurando en todo momento que la calidad de lo producido es máxima.</li>
<p><b><i>*Finalmente los últimos principios están más directamente relacionados con el equipo de desarrollo, en cuanto metas a seguir y organización del mismo.</i></b></p>
<li><b>La atención continua a la calidad técnica y al buen diseño mejora la agilidad.</b> Producir código claro y robusto es la clave para avanzar más rápidamente en el proyecto.</li>
<li><b>La simplicidad es esencial.</b> Tomar los caminos más simples que sean consistentes con los objetivos perseguidos. Si el código producido es simple y de alta calidad será más sencillo adaptarlo a los cambios que puedan surgir.</li>
<li><b>Las mejores arquitecturas, requisitos y diseños surgen de los equipos organizados por sí mismos.</b> Todo el equipo es informado de las responsabilidades y éstas recaen sobre todos sus miembros. Es el propio equipo el que decide la mejor forma de organizarse, de acuerdo a los objetivos que se persigan.</li>
<li><b>En intervalos regulares, el equipo reflexiona respecto a cómo llegar a ser más efectivo, y según esto ajusta su comportamiento.</b> Puesto que el entorno está cambiando continuamente, el equipo también debe ajustarse al nuevo escenario de forma continua. Puede cambiar su organización, sus reglas, sus convenciones, sus relaciones, etc., para seguir siendo ágil.</li>
</ol>
<p><b>Los firmantes de los valores y principios de este Manifiesto son:</b> Kent Beck, Mike Beedle, Arie van Bennekum, Alistair Cockburn, Ward Cunningham, Martin Fowler, James Grenning, Jim Highsmith, Andrew Hunt, Ron Jeffries, Jon Kern, Brian Marick, Robert C. Martin, Steve Mellor, Ken Schwaber, Jeff Sutherland y Dave Thomas.</p>

		</div>
	</div>

</div>

</div><!--Fin accordion-->
	'; // Contenido
	require('base/general.php');
?>
