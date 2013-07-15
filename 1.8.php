<?php 
	require('navegacion.php');
	$contenido = '<h1>El Proceso Unificado de Rational (RUP)</h1>
	
<div id="basic-accordian" ><!--Accordion-->

	<div class="tab_container">
		<div id="test1-header" class="accordion_headings header_highlight" >RUP</div>
		<div id="test2-header" class="accordion_headings" >Diseño Conceptual</div>
		<div id="test3-header" class="accordion_headings" >Diseño Lógico</div>
		<div id="test4-header" class="accordion_headings" >Diseño físico</div>
	</div>

<div style="float:left;">
	<div id="test1-content">
		<div class="accordion_child">

<div id="multimedia"><img src="imagenes/rup.gif"  class="jsnipLightBox thumbImg" alt="Estructura del Proceso Unificado de Rational (RUP)"/></div>

<p>El Proceso Unificado "es un proceso de desarrollo de software configurable que se adapta a través de los proyectos variados en tamaños y complejidad. Se basa en muchos años de experiencia en el uso de la tecnología orientada a objetos en el desarrollo de software de misión crítica en una variedad de industrias por la compañía Rational."</p>

<p>El Proceso Unificado guía a los equipos de proyecto en cómo administrar el desarrollo iterativo de un modo controlado mientras se balancean los requerimientos del negocio, el tiempo al mercado y los riesgos del proyecto. El proceso describe los diversos pasos involucrados en la captura de los requerimientos y en el establecimiento de una guía arquitectónica lo más pronto, para diseñar y probar el sistema hecho de acuerdo a los requerimientos y a la arquitectura. 
<div id="multimedia"><img src="imagenes/niveles.jpg"  class="jsnipLightBox thumbImg" alt="Arquitectura lógica de tres capas de una aplicación cliente/servidor"/></div>
El proceso describe qué entregables producir, cómo desarrollarlos y también provee patrones. El proceso unificado es soportado por herramientas que automatizan entre otras cosas, el modelado visual, la administración de cambios y las pruebas.</p>

<p>El Proceso Unificado es un proceso porque "define quién está haciendo qué, cuándo lo hacer y cómo alcanzar cierto objetivo, en este caso el desarrollo de software".</p>

<p>Los conceptos clave del Proceso Unificado son:</p>
<table>
<tr>
<th>Fase e iteraciones</th><td>¿Cuándo se hace?</td>
</tr>
<tr>
<th>Flujos de trabajo de procesos (actividades y pasos)</th><td>¿Qué se está haciendo?</td>
</tr>
<tr>
<th>Artefactos (modelos, reportes, documentos)</th><td>¿Qué se produjo?</td>
</tr>
<tr>
<th>Trabajador: un arquitecto</th><td>¿Quién lo hace?</td>
</tr>
</table>

<p>El diseño de software se realiza a tres niveles: conceptual, lógico y físico.</p>
	
		</div>
	</div>
  
	<div id="test2-content">
		<div class="accordion_child">
			
<p>El diseño conceptual se considera como un análisis de actividades y consiste en la solución de negocios para el usuario y se expresa con los casos de uso. El diseño lógico es la solución del equipo de proyecto del negocio y consiste de las siguientes tareas:</p>
<ul>
<li>Identificar los usuarios y sus roles</li>
<li>Obtener datos de los usuarios</li>
<li>Evaluar la información</li>
<li>Documentar los escenarios de uso</li>
<li>Validar con los usuarios</li>
<li>Validar contra la arquitectura de la empresa</li>
</ul>
<p>Una forma de obtener estos requerimientos es construir una matriz usuarios-actividades de negocios, realizar entrevistas, encuestas y/o visitas a los usuarios, de tal manera que se obtenga quién, qué, cuándo, dónde y por qué de la solución.</p>
			
		</div>
	</div>
  
	<div id="test3-content">
		<div class="accordion_child">
			
<p>El diseño lógico traduce los escenarios de uso creados en el diseño conceptual en un conjunto de objetos de negocio y sus servicios. El diseño lógico se convierte en parte en la especificación funcional que se usa en el diseño físico. El diseño lógico es independiente de la tecnología. El diseño lógico refina, organiza y detalla la solución de negocios y define formalmente las reglas y políticas específicas de negocios.</p>
<p>Un objeto de negocios es la encapsulación de un servicio que abstrae las cualidades esenciales de algo de interés.</p>
<p>Un <b>servicio</b> es una unidad con capacidad de cómputo. Un servicio debe satisfacer lo siguiente:</p>
<ul>
<li>Ser seguro, lo que equivale a un uso correcto y con autorización</li>
<li>Ser válido, qué tareas o reglas se pueden aplicar</li>
<li>Manejar excepciones, informando al cliente</li>
<li>Contar con un catálogo de servicios que constituye un repositorio de servicios.</li>
</ul>

<p>El diseño lógico comprende las siguientes <b>tareas</b>:</p>
<ul>
<li>Identificar y definir los objetos de negocio y sus servicios</li>
<li>Definir las interfases</li>
<li>Identificar las dependencias entre objetos</li>
<li>Validar contra los escenarios de uso</li>
<li>Comparar con la arquitectura de la empresa</li>
<li>Revisar y refinar tanto como sea necesario</li>
</ul>

<p>La <b>validación del modelo lógico</b> debe ser tal que éste sea:</p>
<ul>
<li>Completo – debe representar todos los escenarios de uso,</li>
<li>Correcto – el comportamiento lógico debe corresponder con el comportamiento conceptual, y</li>
<li>Claro – los objetos de negocio y servicios no deben ser ambiguos</li>
</ul>
			
		</div>
	</div>
	
	<div id="test4-content">
		<div class="accordion_child">
			
<p>El diseño físico traduce el diseño lógico en una solución implementable y costo-efectiva o económica.</p>
<p>El componente es la unidad de construcción elemental del diseño físico. Las características de un componente son:</p>
<ul>
<li>Se define según cómo interactúa con otros</li>
<li>Encapsula sus funciones y sus datos</li>
<li>Es reusable a través de las aplicaciones</li>
<li>Puede verse como una caja negra</li>
<li>Puede contener otros componentes</li>
</ul>
<p>En el diseño físico se debe cuidar el nivel de granularidad (un componente puede ser tan grande o tan pequeño según su funcionalidad, es decir, del tamaño tal que pueda proveer de una funcionalidad compleja pero de control genérico) y la agregación y contención (un componente puede reusar utilizando técnicas de agregación y contención, sin duplicar código).</p>

<p>El diseño físico comprende las siguientes tareas:</p>
<ul>
<li>Definir los componentes</li>
<li>Refinar el empaquetamiento y distribución de componentes</li>
<li>Especificar las interfases de los componentes</li>
<li>Distribuir los componentes en la red</li>
<li>Distribuir los repositorios físicos de datos</li>
<li>Examinar la tolerancia a fallas y la recuperación de errores</li>
<li>Validar el diseño físico</li>
</ul>

<p>De las tareas anteriores la más importante es la distribución de los datos que pueden ser centralizados, una partición, un extracto o una réplica.</p>
<ul>
<li>Los <b>datos centralizados</b> equivalen a una base de datos maestra ubicada en un lugar central. No hay copias de los datos.</li>
<li>Una <b>partición de datos</b> es una segmentación de la base de datos maestra. Es útil cuando los datos se pueden fragmentar fácilmente y actualizarse en un sitio local con cambios frecuentes. No hay sobreposición entre particiones. En una partición horizontal cada hilera existe en una sola base de datos. En una partición vertical cada columna es contenida en una y solo una base de datos.</li>
<li>Un <b>extracto de datos</b> es una copia de toda o una porción de la base de datos maestra. No se permite la actualización. Se usa un timestamp o etiqueta de tiempo para indicar qué tan viejos son los datos.</li>
<li>Una <b>réplica de datos</b> es un fragmento de la bases de datos maestra que se puede actualizar. Una réplica de datos es cuando el sitio de actualización cambia a un sitio local. No se permiten actualizaciones en la base de datos réplica y en la base de datos maestra a la vez, por lo que debe de haber sincronización entre ambas.</li>
</ul>

<p>El diseño físico está íntimamente ligado a una alternativa tecnológica. Ante la acelerada evolución tecnológica es importante considerar los estándares del momento y las tendencias ya que una mala decisión implicará un costo enorme (en dinero y en tiempo) al actualizarse a otra plataforma distinta.</p>
			
		</div>
	</div>
</div>

</div><!--Fin accordion-->
	'; // Contenido
	require('base/general.php');
?>
