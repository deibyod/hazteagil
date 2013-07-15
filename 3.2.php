<?php 
	require('navegacion.php');
	$contenido = '<h1>Scrum</h1>

	<div id="multimedia"><img src="imagenes/esquemascrum.jpg"  class="jsnipLightBox thumbImg" alt="esquema de scrum y sus artefactos"/></div>

	<h2>Herramientas de trabajo: artefactos</h2>
	<p>Scrum, propone tres herramientas o "artefactos" para mantener organizados nuestros proyectos. Estos artefactos, ayudan a planificar y revisar cada uno de los Sprints, aportando medios ineludibles para efectuar cada una de las ceremonias que veremos en un siguiente capítulo.</p>
	<p>Describiremos ahora cada uno de los artefactos, su definición e importancia para Scrum.</p>
	
<div id="basic-accordian" ><!--Accordion-->

	<div class="tab_container">
		<div id="test1-header" class="accordion_headings header_highlight" >Backlog de Producto</div>
		<div id="test2-header" class="accordion_headings" >Backlog de Sprint </div>
		<div id="test3-header" class="accordion_headings" >Incremento de Funcionalidad </div>
	</div>

<div style="float:left;">
	<div id="test1-content">
		<div class="accordion_child">
		
<p>El Backlog de Producto es un listado dinámico y públicamente visible para todos los involucrados en el proyecto.</p>

<p>En él, el Dueño de Producto, mantiene una lista actualizada de requerimientos funcionales para el software. Esta lista, representa "qué es lo que se pretende" pero sin mencionar "cómo hacerlo", ya que esta última, como vimos en el capítulo anterior, será tarea del Scrum Team.</p>

<p>El Backlog de Producto, es creado y modificado únicamente por el Dueño de Producto. Durante la ceremonia de planificación, el Scrum Team obtendrá los items del producto, que deberá desarrollar durante el Sprint. Formato del Backlog de Producto.</p>
<p>El Backlog de producto, es una lista de items que representan los requerimientos funcionales esperados para el software.</p>

<p>Para cada uno de estos ítem, será necesario especificar:</p>
<ul>
    <li>El grado de prioridad</li>
    <li>Esfuerzo que demanda</li>
    <li>Granulidad</li>
    <li>Criterios de aceptación</li>
</ul>

<h3>Priorización de los ítems del Backlog de Producto</h3>
<p>Los items del backlog de producto, deben guardar un orden de prioridad, cuya base se apoye en:</p>
<ul>
    <li>Beneficios de implementar una funcionalidad</li>
    </li>Pérdida o costo que demande posponer la implementación de una funcionalidad</li>
    </li>Riesgos de implementarla</li>
    </li>Coherencia con los intereses del negocio</li>
    </li>Valor diferencial con respecto a productos de la competencia</li>
</ul>

<h3>Estimación de esfuerzo</h3>
<p>A diferencia de las metodologías tradicionales, Scrum, propone la estimación de esfuerzo y complejidad que demanda el desarrollo de las funcionalidades, solo para aquellas cuyo orden sea prioritario.</p>
<p>Estas estimaciones, no se efectúan sobre items poco prioritarios ni tampoco sobre aquellos donde exista un alto grado de incertidumbre.</p>
<p>De esta manera, se evita la pérdida de tiempo en estimaciones irrelevantes, postergándolas para el momento en el cual realmente sea necesario comenzar a desarrollarlas.</p>

<h3>Granulidad de los ítems</h3>
<p>Los items del Backlog de Producto no necesariamente deben tener una granulidad pareja. Es posible encontrar ítems tales como "es necesario contar con un módulo de control de stock y logística" o uno tan pequeño como "Modificar el color de fondo de los mensajes de error del sistema, de negro a rojo".</p>
<p>Ítems de tan baja granulidad, suelen agruparse en un formato denominado "Historias de Usuario" mientras que los de alta granulidad, son los denominados Temas o Epics.</p>

<p><b>Una historia de usuario es aquella que puede escribirse con la siguiente frase:</b></p>

<p><i>Como [un usuario], puedo [una funcionalidad] para [un beneficio]</i></p>
<p><i>Como usuario registrado, puedo cargar un voucher para calcular mi descuento en la compra.</i></p>

<h3>Criterios de Aceptación</h3>
<div id="multimedia"><img src="imagenes/criteriosdeaceptacion.jpg"  class="jsnipLightBox thumbImg" alt="Ejemplo de criterios de aceptación"/></div>
<p>Cada ítem del Backlog de Producto, es necesario que especifique cuales son los criterios de aceptación (o test de aceptación que debe superar), para considerar cumplido el requisito.</p>
		
		</div>
	</div>
  
	<div id="test2-content">
		<div class="accordion_child">

<p>El Backlog de Sprint es la recopilación sintética de items del Backlog de Producto, negociados entre el Dueño de Producto y el Scrum Team en la ceremonia de planificación, reunión que se realiza al comienzo del Sprint.</p>
<p>Esta recopilación, que durante la planificación ha sido propuesta por el Dueño de Producto y ya negociada, es aquella que el Scrum Team se compromete a construir durante el Sprint en curso.</p>
<p>El Backlog de Sprint, generalmente (y muy recomendado), se visualiza mediante tableros físicos (también llamados Scrum Taskboard) que hacen visible el proceso de construcción, a toda persona que ingrese al área de desarrollo.</p>
<p>Para armar el Backlog de Sprint, el Scrum Team, divide los items en tareas (tasks) de que no demanden una labor superar a una jornada de trabajo. Es decir, que una tarea, no debería superar las 8 horas de trabajo.</p>
<p>Estas tareas, serán divididas en pendientes, en curso y terminadas y cada una de ellas, debe permitir visualizar, como mínimo, el esfuerzo que demanda su construcción y el nombre del miembro del equipo que se ha asignado dicha tarea.</p>
</p>Es muy frecuente, a la vez de ser una práctica recomendada, que cada tarea sea a la vez, "etiquetada", diferenciando, por ejemplo, cuando representa un bug, una tarea de diseño, un test, etc.</p>

<h3>Dividiendo un ítem del Backlog de producto en tareas </h3>
<p>La estrategia consiste en desmembrar el item a la mínima expresión posible, encuadrada en un mismo tipo de actividad. El desmembramiento debe hacerse "de lo general a lo particular, y de lo particular al detalle".</p>
<p>Retomando el ejemplo anterior, intentaremos desmembrar, el primer ítem del Backlog de Producto:</p>
<p>Como administrador quiero poder administrar las secciones del sistema para poder establecer el orden de visualización de las mismas</p>
<p>Yendo de lo general (un ABM de secciones) a lo particular (hacer los modelos, vistas - lógica y layot - y controladores; testearlo, integrarlo y documentarlo), obtenemos una lista de tareas tentativa:</p>
<ol>
<li>Crear modelos ? actividad: programar</li>
<li>2. Crear la lógica de las vistas ? actividad: programar</li>
<li>3. Diseñar el layout de las vistas ? actividad: diseñar</li>
<li>4. Crear los controladores ? actividad: programar</li>
<li>5. Correr los test ? actividad: testear</li>
<li>6. Integrar el ABM al sistema ? actividad: integrar</li>
<li>7. Documentar el ABM en el manual del usuario ? actividad: documentar</li>
</ol>
<p>Luego, de lo particular, se irá al detalle. Los detalles, son aquellas restricciones que deberán considerarse para todo lo anterior. Por ejemplo, la creación del modelo, repercutirá en la base de datos. Por lo cual, tras crear los nuevos modelos, habrá que correr el ORM para que modifique las tablas.</p>
<p>Otro detalle a considerar, es el tiempo que demanda cada tarea. Por ejemplo, correr un ORM lleva solo algunos minutos, pues no puede ser considerado una única tarea. Entonces, puede "sumarse como detalle" a la tarea "crear modelos". De manera contraria, documentar en el manual del usuario, llevará todo un día de trabajo. Por lo cual, debe asignarse a una única tarea.</p>

<h3>Tableros de Scrum </h3>
<p>Con la lista de tareas ya armada, estamos en condiciones de crear el tablero.</p>
<p>Un Scrum Taskboard, básicamente se divide en 3 columnas: pendientes, en curso y terminadas y se complementa la información con un Diagrama de Burndown que mostrará el esfuerzo restante para concluir el Sprint.</p>

<h3>Burn down</h3>
<p>La burn down chart es una gráfica mostrada públicamente que mide la cantidad de requisitos en el Backlog del proyecto pendientes al comienzo de cada Sprint. Dibujando una línea que conecte los puntos de todos los Sprints completados, podremos ver el progreso del proyecto. Lo normal es que esta línea sea descendente (en casos en que todo va bien en el sentido de que los requisitos están bien definidos desde el principio y no varían nunca) hasta llegar al eje horizontal, momento en el cual el proyecto se ha terminado (no hay más requisitos pendientes de ser completados en el Backlog). Si durante el proceso se añaden nuevos requisitos la recta tendrá pendiente ascendente en determinados segmentos, y si se modifican algunos requisitos la pendiente variará o incluso valdrá cero en algunos tramos.</p>

		</div>
	</div>

	<div id="test3-content">
		<div class="accordion_child">

<p>El incremento de funcionalidad, es el que el equipo entrega al finalizar el Sprint. El mismo debe asemejarse a un "software funcionando", permitiendo implementarse operativamente sin restricciones en un ambiente productivo.</p>

		</div>
	</div>
	
</div>

</div><!--Fin accordion-->
	
	'; // Contenido
	require('base/general.php');
?>
