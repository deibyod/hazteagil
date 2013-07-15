<?php 
	require('navegacion.php');
	$contenido = '<h1>Metodologías ágiles de desarrollo de software más representativas</h1>
	
<div id="basic-accordian" ><!--Accordion-->

	<div class="tab_container">
		<div id="test1-header" class="accordion_headings header_highlight" >Metodologías</div>
		<div id="test2-header" class="accordion_headings" >Comparación</div>
	</div>

<div style="clear:left;">
	<div id="test1-content">
		<div class="accordion_child">
<div id="multimedia"><img src="imagenes/agiles.png"  class="jsnipLightBox thumbImg" alt="Algunas metodologías ágiles"/></div>
<ul>
<li>Adaptive Software Development (ASD).</li>
<li>Agile Unified Process (AUP).</li>
<li>Crystal Clear.</li>
<li>Essential Unified Process (EssUP).</li>
<li>Feature Driven Development (FDD).</li>
<li>Lean Software Development (LSD).</li>
<li>Kanban.</li>
<li>Open Unified Process (OpenUP).</li>
<li>Programación Extrema (XP).</li>
<li>Método de desarrollo de sistemas dinámicos (DSDM).</li>
<li>Scrum.</li>
</ul>
	
		</div>
	</div>
  
	<div id="test2-content">
		<div class="accordion_child">
			
<p>La siguiente tabla compara las distintas aproximaciones ágiles en base a tres parámetros: vista del sistema como algo cambiante, tener en cuenta la colaboración entre los miembros del equipo y características más específicas de la propia metodología como son simplicidad, excelencia técnica, resultados, adaptabilidad, etc. También incorpora como referencia no ágil el Capability Madurity Model(CMM):</p>

<table>
<tr>
<th></th>
<th>CMM</th>
<th>ASD</th>
<th>Crystal</th>
<th>DSDM</th>
<th>FDD</th>
<th>LD</th>
<th>Scrum</th>
<th>XP</th>
</tr>
<tr>
<th>Sistema como algo cambiante</th>
<td>1</td>
<td>5</td>
<td>4</td>
<td>3</td>
<td>3</td>
<td>4</td>
<td>5</td>
<td>5</td>
</tr>
<tr>
<th>Colaboración</th>
<td>2</td>
<td>5</td>
<td>5</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>5</td>
<td>5</td>
</tr>
<tr>
<th>-Resultados</th>
<td>2</td>
<td>5</td>
<td>5</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>5</td>
<td>5</td>
</tr>
<tr>
<th>-Simplicidad</th>
<td>1</td>
<td>4</td>
<td>4</td>
<td>3</td>
<td>5</td>
<td>3</td>
<td>5</td>
<td>5</td>
</tr>
<tr>
<th>-Adaptabilidad</th>
<td>2</td>
<td>5</td>
<td>5</td>
<td>3</td>
<td>3</td>
<td>4</td>
<td>4</td>
<td>3</td>
</tr>
<tr>
<th>-Excelencia técnica</th>
<td>4</td>
<td>3</td>
<td>3</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>3</td>
<td>4</td>
</tr>
<tr>
<th>-Prácticas de colaboración</th>
<td>2</td>
<td>5</td>
<td>5</td>
<td>4</td>
<td>3</td>
<td>3</td>
<td>4</td>
<td>5</td>
</tr>
<tr>
<th>Media CM</th>
<td>2.2</td>
<td>4.4</td>
<td>4.4</td>
<td>3.6</td>
<td>3.8</td>
<td>3.6</td>
<td>4.2</td>
<td>4.4</td>
</tr>
<tr>
<th>Media Total</th>
<td>1.7</td>
<td>4.8</td>
<td>4.5</td>
<td>3.6</td>
<td>3.6</td>
<td>3.9</td>
<td>4.7</td>
<td>4.8</td>
</tr>
</table>
<p style="text-align:center;"><i><small>Ranking de “agilidad” (Los valores más altos representan una mayor agilidad)</small></i></p>
			
<p>Como se observa en la Tabla, todas las metodologías ágiles tienen una significativa diferencia del índice de agilidad respecto a CMM y entre ellas destacan ASD, Scrum y XP como las más ágiles.</p>
			
		</div>
	</div>
</div>

</div><!--Fin accordion-->
	'; // Contenido
	require('base/general.php');
?>
