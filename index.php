<?php 
	$titulo = 'Inicio'; // Título
	require('navegacion.php');
	$onclic= "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'";
	$contenido = '
	<h1>Presentaci&oacute;n</h1>
	<p>Bienvenido al Material Did&aacute;ctico Multimedia de metodolog&iacute;as &aacute;giles de desarrollo de software... 
	&#161;As&iacute; de simple&#33;</p>
	<!-- Slide -->
	<div id="slideshowWrapper">
    <ul id="slideshow">
        <li><img src="slide/images/4.jpg" width="640" height="240" border="0" alt="" /></li> <!-- This is the last image in the slideshow -->
        <li><img src="slide/images/3.jpg" width="640" height="240" border="0" alt="" /></li>
        <li><img src="slide/images/2.jpg" width="640" height="240" border="0" alt="" /></li>
        <li><img src="slide/images/1.jpg" width="640" height="240" border="0" alt="" /></li> <!-- This is the first image in the slideshow -->
		</ul><br clear="all" />
	</div>
	<!-- Fin Slide -->
	<table class="menuinicial">
		<tr>
		<td><a href="1.php"><span class="menu">)</span>Iniciar el curso</a></td>
		<td><a href="externos.php"><span class="menu">/</span>Navegar por contenidos externos</a></td>
		<td><a href="info.php"><span class="menu">,</span>Informaci&oacute;n general</a></td>
		<tr></tr>
		<td><a style="cursor:pointer;" onclick = "'.$onclic.'"><span class="menu">=</span>&Iacute;ndice del curso</a></td>
		<td><a href="comunidad.php"><span class="menu">P</span>Participar en la comunidad</a></td>
		<td><a href="creditos.php"><span class="menu">*</span>Cr&eacute;ditos y licencia</a></td>
		<tr></tr>
		<td><a href="evaluaciones.php"><span class="menu">C</span>Realizar evaluaciones</a></td>
		<td><a href="ayuda.php"><span class="menu">?</span>Consultar ayuda</a></td>
		</tr><tr>
	</tr>
	</table>
	'; // Contenido
	require('base/general.php');
?>
