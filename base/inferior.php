		<div id="inferior"> <!-- Pie -->		
			<span class="menu"><a id="inicio" href="index.php" title="Inicio">H</a><a id="indice" title="Índice de contenido" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">=</a><a id="eval" href="evaluaciones.php" title="Evaluaciónes">C</a><a id="enlaces" href="externos.php" title="Enlaces externos">/</a><a id="comunidad" href="comunidad.php" title="Comunidad agilista">P</a><a id="ayuda" href="ayuda.php" title="Ayuda">?</a></span>
			<!--<a id="controles">{</a><a id="controles">$</a><a id="controles">%</a><a id="controles">'</a><a id="controles">}</a> &nbsp;&nbsp; -->
			<span class="menu" style="float:right;"><a id="nav" title="Etapa anterior" href="<?php if($anteriorEtapa!=''){echo $anteriorEtapa; ?>.php<?php } ?>">Q</a><a id="nav" title="Etapa siguiente" href="<?php if($siguienteEtapa!=''){echo $siguienteEtapa; ?>.php<?php } ?>">R</a><a id="nav" title="Item anterior" href="<?php if($anteriorItem!=''){echo $anteriorItem; ?>.php<?php } ?>"><</a><a id="nav" title="Item siguiente" <?php if($siguienteItem!=''){echo 'href="'.$siguienteItem.'.php"'; }else{ echo 'class="inactivo"';} ?> >></a><a id="eval" title="Tomar evaluación" href="<?php echo $evaluacion; ?>">C</a></span>
			</div> 
	</div>
	
	<!-- Indice -->
	<div id="light" class="white_content">
		<span class="cerrar" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">X</span>
			
			<a href="index.php"><span class="menu">H</span>Inicio</a>	<br \>
			<a href="1.php"><span class="menu">)</span>Iniciar el curso</a><br \>
			
			<div class='jsnipShowHide' title='Indice del curso' data-mode='open'>
			
				<div class='jsnipShowHide'>
					<div class='title'>Etapa 1: Conceptos básicos</div>
					<a href="1.php">Resumen e Introducción</a><br \>
					<a href="1.1.php">1.1.Ingeniería, Software, Ingeniería de Software</a><br \>
					<a href="1.2.php">1.2.Ciclo de vida del software</a><br \>
					<a href="1.3.php">1.2.1.Modelos del ciclo de vida del software</a><br \>
						1.2.1.1.Cascada<br \>1.2.1.2.Prototipado<br \>1.2.1.3.Espiral<br \>1.2.1.4.Cleanroom<br \>
					<a href="1.4.php">1.2.2.Comparación de Modelos del ciclo de vida del software</a><br \>
					<a href="1.5.php">1.3.¿Qué es una metodología de desarrollo del software?</a><br \>
					<a href="1.6.php">1.3.1.Cosas que NO son metodologías de desarrollo del software</a><br \>
					<a href="1.7.php">1.3.2.Metodologías tradicionales</a><br \>
					<a href="1.8.php">1.3.2.1.El Proceso Unificado de Rational (RUP)</a><br \>
					<a href="1.9.php">1.4.Reflexiones</a><br \>
				</div>			
				<div class='jsnipShowHide'>
					<div class='title'>Etapa 2: Conceptos agilistas</div>
					<div class='inner'>
					<a href="2.php">Resumen e Introducción</a><br \>
					<a href="2.1.php">2.1.Metodologías ágiles de desarrollo de Software</a><br \>
					<a href="2.2.php">2.2.El Manifiesto Ágil</a><br \>
						2.2.1.Valores agilistas<br \>2.2.2.Principios agilistas<br \>
					<a href="2.3.php">2.3.Metodologías ágiles de desarrollo de software más representativas</a><br \>
						2.3.1.Metodologías<br \>2.3.2.Comparación<br \>
					<a href="2.4.php">2.4.Comparación Metodologías Ágiles y Tradicionales</a><br \>
					<a href="2.5.php">2.5.Algunas claves de las metodologías ágiles</a><br \>
						2.5.1.El ciclo de vida iterativo<br \>2.5.2.Las metodologías ágiles y la documentación<br \>
						2.5.3.Las metodologías ágiles y el desarrollo distribuido<br \>2.5.4.¿Son las metodologías ágiles la mejor opción?<br \>
					<a href="2.6.php">2.6.KISS: "Keep It Simple, Stupid"</a><br \>
					</div>					
				</div>
				<div class='jsnipShowHide' title='Etapa 3: Prácticas agilistas'>
					<a href="3.php">Resumen e Introducción 3.1.Scrum</a><br \>
					<a href="3.1.php">3.1.1.Roles</a><br \>
						3.1.1.1.Product Owner<br \>3.1.1.2.Scrum Master<br \>3.1.1.3.Scrum Team<br \>3.1.1.4.Stakeholders<br \>
						3.1.1.5.Manager<br \>3.1.1.6.Cerdos y Gallinas<br \>
					<a href="3.2.php">3.1.2.Herramientas de trabajo: artefactos</a><br \>
						3.1.2.1.Backlog de Producto<br \>3.1.2.2.Backlog de Sprint<br \>3.1.2.3.Incremento de Funcionalidad<br \>
					<a href="3.3.php">3.1.3.Organización del trabajo: reuniones</a><br \>
						3.1.3.1.Planificación<br \>3.1.3.2.Daily Scrum<br \>3.1.3.3.Revisión<br \>3.1.3.4.Retrospectiva<br \>
					<a href="3.4.php">3.2.Kanban</a><br \>	
						3.2.1.Orígenes<br \>3.2.2.Las tres reglas de Kanban<br \>
					<a href="3.5.php">3.3.Programación Extrema (eXtreme Programming, XP)</a><br \>
						3.3.1.Historias de Usuario<br \>3.3.2.Roles XP<br \>3.3.3.Proceso XP<br \>3.3.4.Buenas Prácticas en XP<br \>
				</div>		
				
			</div>
			
			<a href="evaluaciones.php"><span class="menu">C</span>Realizar evaluaciones</a><br \>
			<a href="externos.php"><span class="menu">/</span>Navegar por contenidos externos</a><br \>
			<a href="comunidad.php"><span class="menu">P</span>Participar en la comunidad</a><br \>
			<a href="info.php"><span class="menu">,</span>Informaci&oacute;n general</a>	<br \>
			<a href="creditos.php"><span class="menu">*</span>Cr&eacute;ditos y licencia</a><br \>
			<a href="#"><span class="menu">?</span>Consultar ayuda</a>
			
	</div>
	<div id="fade" class="black_overlay" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"></div>
	<!-- Fin Indice -->
	
</body>
</html> 
