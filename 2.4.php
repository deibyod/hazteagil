<?php 
	require('navegacion.php');
	$contenido = '<h1>Comparación Metodologías Ágiles y Tradicionales</h1>
	<p>Vamos a enumerar las principales diferencias de una Metodología Ágil respecto de las Metodologías Tradicionales (llamadas comúnmente “no ágiles” o “pesadas”). La siguiente Tabla  recoge estas diferencias que no se refieren sólo al proceso en sí, sino también al contexto de equipo y organización que es más favorable a cada uno de estas filosofías de procesos de desarrollo de software.</p>

<table>
<tr>
<th>
Metodología Ágil
</th>
<th>
Metodología Tradicional
</th>
</tr>
<tr>
<td>Pocos Artefactos. El modelado es prescindible, modelos desechables.</td>
<td>Más Artefactos. El modelado es esencial, mantenimiento de modelos</td>
</tr>
<tr>
<td>Pocos Roles, más genéricos y flexibles</td>
<td>Más Roles, más específicos</td>
</tr>
<tr>
<td>No existe un contrato tradicional, debe ser bastante flexible</td>
<td>Existe un contrato prefijado</td>
</tr>
<tr>
<td>Cliente es parte del equipo de desarrollo (además in-situ)</td>
<td>El cliente interactúa con el equipo de desarrollo mediante reuniones</td>
</tr>
<tr>
<td>Orientada a proyectos pequeños. Corta duración (o entregas frecuentes), equipos pequeños (< 10 integrantes) y trabajando en el mismo sitio</td>
<td>Aplicables a proyectos de cualquier tamaño, pero suelen ser especialmente efectivas/usadas en proyectos grandes y con equipos posiblemente dispersos</td>
</tr>
<tr>
<td>La arquitectura se va definiendo y mejorando a lo largo del proyecto</td>
<td>Se promueve que la arquitectura se defina tempranamente en el proyecto</td>
</tr>
<tr>
<td>Énfasis en los aspectos humanos: el individuo y el trabajo en equipo</td>
<td>Énfasis en la definición del proceso: roles, actividades y artefactos</td>
</tr>
<tr>
<td>Basadas en heurísticas provenientes de prácticas de producción de código</td>
<td>Basadas en normas provenientes de estándares seguidos por el entorno de desarrollo</td>
</tr>
<tr>
<td>Se esperan cambios durante el proyecto</td>
<td>Se espera que no ocurran cambios de gran impacto durante el proyecto</td>
</tr>
</table>
<p style="text-align:center;"><i><small>Tabla: Diferencias entre metodologías ágiles y no ágiles</small></i></p>
	'; // Contenido
	require('base/general.php');
?>
