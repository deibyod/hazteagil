<?php 
	require('navegacion.php');
	$contenido = '<h1>Modelos del ciclo de vida del software</h1>
	
<div id="basic-accordian" ><!--Accordion-->

	<div class="tab_container">
		<div id="test1-header" class="accordion_headings header_highlight" >Cascada</div>
		<div id="test2-header" class="accordion_headings" >Prototipado</div>
		<div id="test3-header" class="accordion_headings" >Espiral</div>
		<div id="test4-header" class="accordion_headings" >Cleanroom</div>
	</div>
<!-- ---------------------Cascada------------------------- -->
<div style="float:left;">
	<div id="test1-content">
		<div class="accordion_child">
		
	<p>El modelo cascada (waterfall), propuesto por Royce en 1970, fue derivado de modelos de actividades de ingeniería con el fin de establecer algo de orden en el desarrollo de grandes productos de software. Consiste en diferentes etapas, las cuales son procesadas en una manera lineal. Comparado con otros modelos de desarrollo de software es más rígido y mejor administrable. El modelo cascada es un modelo muy importante y ha sido la base de muchos otros modelos, sin embargo, para muchos proyectos modernos, ha quedado un poco desactualizado.</p>
	<h3>Descripción del modelo</h3>
	<p>El modelo cascada es un modelo de ingeniería diseñado para ser aplicado en el desarrollo de software. La idea principal es la siguiente: existen diferentes etapas de desarrollo, la salida de la primera etapa “fluye” hacia la segunda etapa y esta salida “fluye” hacia la tercera y así sucesivamente.</p>
	
	<div id="multimedia"><img src="imagenes/cascada.gif"  class="jsnipLightBox thumbImg" alt="Modelo Cascada"/></div>
	
	<p>Existen generalmente cinco etapas en este modelo de desarrollo de software:</p>
	<ul>
	<li><b>Análisis y definición de requerimientos:</b> en esta etapa, se establecen los requerimientos del producto que se desea desarrollar. Éstos consisten usualmente en los servicios que debe proveer, limitaciones y metas del software. Una vez que se ha establecido esto, los requerimientos deben ser definidos en una manera apropiada para ser útiles en la siguiente etapa. Esta etapa incluye también un estudio de la factibilidad y viabilidad del proyecto con el fin de determinar la conveniencia de la puesta en marcha del proceso de desarrollo. Puede ser tomada como la concepción de un producto de software y ser vista como el comienzo del ciclo de vida.</li>
	<li><b>Diseño del sistema:</b> el diseño del software es un proceso multipaso que se centra en cuatro atributos diferentes de los programas: estructura de datos, arquitectura del software, detalle del proceso y caracterización de las interfases. El proceso de diseño representa los requerimientos en una forma que permita la codificación del producto (además de una evaluación de la calidad previa a la etapa de codificación). Al igual que los requerimientos, el diseño es documentado y se convierte en parte del producto de software.</li>
	<li><b>Implementación:</b> esta es la etapa en la cual son creados los programas. Si el diseño posee un nivel de detalle alto, la etapa de codificación puede implementarse mecánicamente. A menudo suele incluirse un testeo unitario en esta etapa, es decir, las unidades de código producidas son evaluadas individualmente antes de pasar a la etapa de integración y testeo global.</li>
	<li><b>Testeo del sistema:</b> una vez concluida la codificación, comienza el testeo del programa. El proceso de testeo se centra en dos puntos principales: las lógicas internas del software; y las funcionalidades externas, es decir, se solucionan errores de “comportamiento” del software y se asegura que las entradas definidas producen resultados reales que coinciden con los requerimientos especificados.</li>
	<li><b>Mantenimiento:</b> esta etapa consiste en la corrección de errores que no fueron previamente detectados, mejoras funcionales y de performance, y otros tipos de soporte. La etapa de mantenimiento es parte del ciclo de vida del producto de software y no pertenece estrictamente al desarrollo. Sin embargo, mejoras y correcciones pueden ser consideradas como parte del desarrollo.</li>
	</ul>
	<p>Estas son las etapas principales. También existen sub-etapas, dentro de cada etapa, pero éstas difieren mucho de un proyecto a otro. También es posible que ciertos proyectos de software requieran la incorporación de una etapa extra o la separación de una etapa en otras dos. Sin embargo, todas estas variaciones al modelo cascada poseen el mismo concepto básico: la idea de que una etapa provee salidas que serán usadas como las entradas de la siguiente etapa (un flujo lineal entre las etapas). Por lo tanto, el progreso del proceso de desarrollo de un producto de software, usando el modelo cascada, es simple de conocer y controlar.</p>
	<p>Existen actividades que son llevadas a cabo en cada una de las etapas del desarrollo del software. Éstas son documentación, verificación y administración. La documentación es intrínseca al modelo cascada puesto que la mayoría de las salidas que arrojan las etapas son documentos.</p>
	<h3>Problemas con el Modelo Cascada:</h3>
	<p>El ciclo de vida clásico es el paradigma más viejo y el más ampliamente usado en la ingeniería del software. Sin embargo, su aplicabilidad en muchos campos ha sido cuestionada. Entre los problemas que aparecen cuando se aplica el modelo cascada están:</p>
	<ul>
	<li>Los proyectos raramente siguen el flujo secuencial que el modelo propone. La iteración siempre es necesaria y está presente, creando problemas en la aplicación del modelo.</li>
	<li>A menudo es difícil para el cliente poder especificar todos los requerimientos explícitamente. El modelo de vida del software clásico requiere esto y presenta problemas acomodando la incertidumbre natural que existe al principio de cualquier proyecto.</li>
	<li>El cliente debe ser paciente. Una versión funcional del sistema no estará disponible hasta tarde en la duración del desarrollo. Cualquier error o malentendido, si no es detectado hasta que el programa funcionando es revisado, puede ser desastroso.</li>
	<li>Cada uno de estos problemas es real. Sin embargo, el modelo clásico del ciclo de vida del software tiene un lugar bien definido e importante en los trabajos de ingeniería del software. Provee un patrón dentro del cual encajan métodos para el análisis, diseño, codificación y mantenimiento.</li>
	</ul>
	<h3>Aplicación:</h3>
	<p>El modelo cascada se aplica bien en situaciones en las que el software es simple y en las que el dominio de requerimientos es bien conocido, la tecnología usada en el desarrollo es accesible y los recursos están disponibles.</p>
	
		</div>
	</div>
<!-- ---------------------Prototipado------------------------- -->  
	<div id="test2-content">
		<div class="accordion_child">
			
<p>Dos de las críticas que se hacían al modelo de ciclo de vida en cascada eran que es difícil tener claros todos los requisitos del sistema al inicio del proyecto, y que no se dispone de una versión operativa del programa hasta las fases finales del desarrollo, lo que dificulta la detección de errores y deja también para el final el descubrimiento de los requisitos inadvertidos en las fases de análisis. Para paliar estas deficiencias se ha propuesto un modelo de ciclo de vida basado en la construcción de prototipos.</p>
	<p>En primer lugar, hay que ver si el sistema que tenemos que desarrollar es un buen candidato a utilizar el paradigma de ciclo de vida de construcción de prototipos o al modelo en espiral. En general, cualquier aplicación que presente mucha interacción con el usuario, o que necesite algoritmos que puedan construirse de manera evolutiva, yendo de lo mas general a lo más específico es una buena candidata. No obstante, hay que tener en cuenta la complejidad: si la aplicación necesita que se desarrolle una gran cantidad de código para poder tener un prototipo que enseñar al usuario, las ventajas de la construcción de prototipos se verán superadas por el esfuerzo de desarrollar un prototipo que al final habrá que desechar o modificar mucho. También hay que tener en cuenta la disposición del cliente para probar un prototipo y sugerir modificaciones de los requisitos. Puede ser que el cliente ‘no tenga tiempo para andar jugando’ o ‘no vea las  ventajas de este método de desarrollo’.</p>
	<p>También es conveniente construir prototipos para probar la eficiencia de los algoritmos que se van a implementar, o para comprobar el rendimiento de un determinado componente del sistema en condiciones similares a las que existirán durante la utilización del sistema. Es bastante frecuente que el producto de ingeniería desarrollado presente un buen rendimiento durante la fase de pruebas realizada por los ingenieros antes de entregarlo al cliente pero que sea muy ineficiente, o incluso inviable, a la hora de almacenar o procesar el volumen real de información que debe manejar el cliente. En estos casos, la construcción de un prototipo de parte del sistema y la realización de pruebas de rendimiento, sirven para decidir, antes de empezar la fase de diseño, cuál es el modelo más adecuado de entre la gama disponible para el soporte hardware o cómo deben hacerse los accesos para obtener buenas respuestas en tiempo cuando la aplicación esté ya en funcionamiento.</p>
	<p>En otros casos, el prototipo servirá para modelar y poder mostrar al cliente cómo va a realizarse la E/S de datos en la aplicación, de forma que éste pueda hacerse una idea de como va a ser el sistema final, pudiendo entonces detectar deficiencias o errores en la especificación aunque el modelo no sea más que una cáscara vacía.</p>
	<p>Según esto un prototipo puede tener alguna de las tres formas siguientes:</p>
	<ul>
		<li>un prototipo, en papel o ejecutable en ordenador, que describa la interacción hombre-máquina y los listados del sistema.</li>
		<li>un prototipo que implemente algún(os) subconjunto(s) de la función requerida, y que sirva para evaluar el rendimiento de un algoritmo o las necesidades de capacidad de almacenamiento y velocidad de cálculo del sistema final.</li>
		<li>un programa que realice en todo o en parte la función deseada pero que tenga características (rendimiento, consideración de casos particulares, etc.) que deban ser mejoradas durante el desarrollo del proyecto.</li>
	</ul>
	<p>La secuencia de tareas del paradigma de construcción de prototipos puede verse en la figura.</p>
	
	<div id="multimedia"><img src="imagenes/prototipos.jpg"  class="jsnipLightBox thumbImg" alt="Prototipado"/></div>
	
	<p>Si se ha decidido construir un prototipo, lo primero que hay que hacer es realizar un modelo del sistema, a partir de los requisitos que ya conozcamos. En este caso no es necesario realizar una definición completa de los requisitos, pero sí es conveniente determinar al menos las áreas donde será necesaria una definición posterior más detallada.</p>
	<p>Luego se procede a diseñar el prototipo. Se tratará de un diseño rápido, centrado sobre todo en la arquitectura del sistema y la definición de la estructura de las interfaces más que en aspectos de procedimiento de los programas: nos fijaremos más en la forma y en la apariencia que en el contenido.</p>
	<p>A partir del diseño construiremos el prototipo. Existen herramientas especializadas en generar prototipos ejecutables a partir del diseño. Otra opción sería utilizar técnicas de cuarta generación. La posibilidad más reciente consiste en el uso de especificaciones formales, que faciliten el desarrollo incremental de especificaciones y permitan la prueba de estas especificaciones.</p>
	<p>En cualquier caso, el objetivo es siempre que la codificación sea rápida, aunque sea en detrimento de la calidad del software generado.</p>
	<p>Una vez listo el prototipo, hay que presentarlo al cliente para que lo pruebe y sugiera modificaciones. En este punto el cliente puede ver una implementación de los requisitos que ha definido inicialmente y sugerir las modificaciones necesarias en las especificaciones para que satisfagan mejor sus necesidades.</p>
	<p>A partir de estos comentarios del cliente y los cambios que se muestren necesarios en los requisitos, se procederá a construir un nuevo prototipo y así sucesivamente hasta que los requisitos queden totalmente formalizados, y se pueda entonces empezar con el desarrollo del producto final.</p>
	<p>Por tanto, el prototipado es una técnica que sirve fundamentalmente para la fase de análisis de requisitos, pero lleva consigo la obtención de una serie de subproductos que son útiles a lo largo del desarrollo del proyecto:</p>
	<ul>
	<li>Gran parte del trabajo realizado durante la fase de diseño rápido (especialmente la definición de pantallas e informes) puede ser utilizada durante el diseño del producto final. Además, tras realizar varias vueltas en el ciclo de construcción de prototipos, el diseño del mismo se parece cada vez más al que tendrá el producto final.</li>
	<li>Durante la fase de construcción de prototipos será necesario codificar algunos componentes del software que también podrán ser reutilizados en la codificación del producto final, aunque deban de ser optimizados en cuanto a corrección o velocidad de procesamiento.</li>
	</ul>
	<p>No obstante, hay que tener en cuenta que el prototipo no es el sistema final, puesto que normalmente apenas es utilizable. Será demasiado lento, demasiado grande, inadecuado para el volumen de datos necesario, contendrá errores (debido al diseño rápido), será demasiado general (sin considerar casos particulares, que debe tener en cuenta el sistema final) o estará codificado en un lenguaje o para una máquina inadecuadas, o a partir de componentes software previamente existentes. No hay que preocuparse de haber desperdiciado tiempo o esfuerzos construyendo prototipos que luego habrán de ser desechados, si con ello hemos conseguido tener más clara la especificación del proyecto, puesto que el tiempo perdido lo ahorraremos en las fases siguientes, que podrán realizarse con menos esfuerzo y en las que se cometerán menos errores que nos obliguen a volver atrás en el ciclo de vida.</p>
	<p>Hay que tener en cuenta que un análisis de requisitos incorrecto o incompleto, cuyos errores y deficiencias se detecten a la hora de las pruebas o tras entregar el software al cliente, nos obligará a repetir de nuevo las fases de análisis, diseño y codificación, que habíamos realizado cuidadosamente, pensando que estábamos desarrollando el producto final. Al tener que repetir estas fases, sí que estaremos desechando una gran cantidad de trabajo, normalmente muy superior al esfuerzo de construir un prototipo basándose en un diseño rápido, en la reutilización de trozos de software preexistentes y en herramientas de generación de código para informes y manejo de ventanas.</p>
	<p>Uno de los problemas que suelen aparecer siguiendo el paradigma de construcción de prototipos, es que con demasiada frecuencia el prototipo pasa a ser parte del sistema final, bien sea por presiones del cliente, que quiere tener el sistema funcionando lo antes posible o bien porque los técnicos se han acostumbrado a la máquina, el sistema operativo o el lenguaje con el que se desarrolló el prototipo. Se olvida aquí que el prototipo ha sido construido de forma acelerada, sin tener en cuenta consideraciones de eficiencia, calidad del software o facilidad de mantenimiento, o que las elecciones de lenguaje, sistema operativo o máquina para desarrollarlo se han hecho basándose en criterios como el mejor conocimiento de esas herramientas por parte los técnicos que en que sean adecuadas para el producto final.</p>
	<p>El utilizar el prototipo en el producto final conduce a que éste contenga numerosos errores latentes, sea ineficiente, poco fiable, incompleto o difícil de mantener. En definitiva a que tenga poca calidad, y eso es precisamente lo que se quiere evitar aplicando la ingeniería del software.</p>
			
		</div>
	</div>
<!-- ---------------------Espiral------------------------- -->
	<div id="test3-content">
		<div class="accordion_child">
			
<p>El problema con los modelos de procesos de software es que no se enfrentan lo suficiente con la incertidumbre inherente a los procesos de software. Importantes proyectos de software fallaron porque los riesgos del proyecto se despreciaron y nadie se preparó para algún imprevisto. Boehm reconoció esto y trató de incorporar el factor “riesgo del proyecto” al modelo de ciclo de vida, agregándole a las mejores características de los modelos Cascada y Prototipado. El resultado fue el Modelo Espiral. La dirección del nuevo modelo fue incorporar los puntos fuertes y evitar las dificultades de otros modelos desplazando el énfasis de administración hacia la evaluación y resolución del riesgo. De esta manera se permite tanto a los desarrolladores como a los clientes detener el proceso cuando se lo considere conveniente.</p>
<h3>Descripción del modelo:</h3>
<div id="multimedia"><img src="imagenes/espiral.jpg"  class="jsnipLightBox thumbImg" alt="Modelo Espiral"/></div>
<p>Básicamente, la idea es desarrollo incremental usando el modelo Cascada para cada paso, ayudando a administrar los riesgos. No se define en detalle el sistema completo al principio; los diseñadores deberían definir e implementar solamente los rasgos de mayor prioridad. Con el conocimiento adquirido, podrían entonces volver atrás y definir e implementar más características en trozos más pequeños.</p>
<p>El modelo Espiral define cuatro actividades principales en su ciclo de vida:</p>
<ul>
<li>Planeamiento: determinación de los objetivos, alternativas y limitaciones del proyecto.</li>
<li>Análisis de riesgo: análisis de alternativas e identificación y solución de riesgos.</li>
<li>Ingeniería: desarrollo y testeo del producto.</li>
<li>Evaluación del cliente: tasación de los resultados de la ingeniería.</li>
</ul>
<p>El modelo está representado por una espiral dividida en cuatro cuadrantes, cada una de las cuales representa una de las actividades arriba mencionadas.</p>
<h3>Puntos fuertes</h3>
<ul>
<li>Evita las dificultades de los modelos existentes a través de un acercamiento conducido por el riesgo.</li>
<li>Intenta eliminar errores en las fases tempranas.</li>
<li>Es el mismo modelo para el desarrollo y el mantenimiento.</li>
<li>Provee mecanismos para la aseguración de la calidad del software.</li>
<li>La reevaluación después de cada fase permite cambios en las percepciones de los usuarios, avances tecnológicos o perspectivas financieras.</li>
<li>La focalización en los objetivos y limitaciones ayuda a asegurar la calidad.</li>
</ul>
<h3>Puntos débiles</h3>
<ul>
<li>Falta un proceso de guía explícito para determinar objetivos, limitaciones y alternativas.</li>
<li>Provee más flexibilidad que la conveniente para la mayoría de las aplicaciones.</li>
<li>La pericia de tasación del riesgo no es una tarea fácil. El autor declara que es necesaria mucha experiencia en proyectos de software para realizar esta tarea exitosamente.</li>
</ul>
<h3>Aplicación</h3>
<p>Proyectos complejos, dinámicos, innovadores, ambiciosos, llevados a cabo por equipos internos (no necesariamente de software).</p>
			
		</div>
	</div>
<!-- ---------------------Cleanroom------------------------- -->
	<div id="test4-content">
		<div class="accordion_child">
			
<p>Cleanroom es un proceso de administración e ingeniería para el desarrollo de software de alta calidad con fiabilidad certificada. Focaliza la atención en la prevención en lugar de la corrección de errores, y la certificación de la fiabilidad del software para el entorno de uso para cual fue planeado. En lugar de realizar pruebas de unidades y módulos, se especifican formalmente componentes de software los cuales son verificados matemáticamente en cuanto son construidos.</p>

<div id="multimedia"><img src="imagenes/cleanroom.jpg"  class="jsnipLightBox thumbImg" alt="Esquematización del Modelo Cleanroom"/></div>

<h3>Características</h3>
<ul>
<li>Desarrollo incremental: el software es particionado en incrementos los cuales se desarrollan utilizando el  proceso cleanroom.</li>
<li>Especificación formal: el software a desarrollarse es formalmente especificado.</li>
<li>Verificación estática: el software desarrollado es verificado matemáticamente (los desarrolladores no pueden ejecutar el código) utilizando argumentos de correctitud basados en matemáticas. No hay pruebas a nivel unidad o módulo.</li>
<li>Pruebas estadísticas: el incremento de software integrado es examinado estadísticamente para determinar su fiabilidad.</li>
</ul>
<p>Hay tres equipos involucrados en el proceso de cleanroom:</p>
<ul>
<li>El equipo de especificación: este equipo es responsable del desarrollo y mantenimiento de las especificaciones del sistema. Ambas especificaciones, las orientadas al cliente.</li>
<li>El equipo de desarrollo: este equipo tiene la responsabilidad de desarrollar y verificar el software.</li>
<li>El equipo de certificación: este equipo es responsable del desarrollo de un conjunto de pruebas estadísticas para ejercitar el software una vez que fue construido.</li>
<li>Con respecto a los equipos, estos deben ser pequeños: típicamente de seis a ocho integrantes. El testeo del software debe ser llevado a cabo por un equipo independiente.</li>
</ul>
<h3>Ventajas</h3>
<ul>
<li>Cleanroom provee las prácticas de administración e ingeniería que permiten a los equipos lograr cero fallos en el campo de uso, cortos ciclos de desarrollo, y una larga vida del producto.</li>
<li>Reduce los fallos encontrados durante el proceso de certificación a menos de cinco fallos por cada mil líneas de código en la primera ejecución del código del primer proyecto.</li>
<li>Equipos nuevos deberían experimentar un incremento del doble en la productividad con respecto a su primer proyecto. La productividad seguirá incrementándose con la experiencia adquirida.</li>
<li>Cleanroom lleva a una inversión en bienes tales como especificaciones detalladas y modelos que ayudan a mantener un producto viable durante una vida más larga.</li>
<li>Todos los beneficios técnicos se trasladan en beneficios económicos significantes.</li>
</ul>
<h3>Aplicación</h3>
<p>El método cleanroom es mandatorio para cualquier sistema de software de misión crítica; sin embargo es apto para cualquier proyecto de software, en especial si el proyecto requiere detección de errores en fases tempranas.</p>
			
		</div>
	</div>
</div>

</div><!--Fin accordion-->
	'; // Contenido
	require('base/general.php');
?>
