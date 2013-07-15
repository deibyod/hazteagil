<?php 
	require('navegacion.php');	
	$contenido = '
	<link rel="stylesheet" href="evaluaciones/base/css/style.css?v=32">
    <link rel="stylesheet" href="evaluaciones/base/css/screen.css?v=32">       
    <link rel="stylesheet" href="evaluaciones/css/style.css">  
    
  	<div id="main">
  	
    <h1>Evaluacion etapa # 2</h1>

    <input type="checkbox" class="question1"  id="question1a" />
    <input type="checkbox" class="correct question1"  id="question1b" />
  
    <h2 class="question-question question1">1. La gran desventaja identificada en las metodologías tradicionales es la gran cantidad de documentación y burocracia en los proyectos lo cual no resulta ser adecuado en muchos proyectos actuales donde el entorno del sistema es muy cambiante.</h2>
    <label class="answer question1" for="question1a">Verdadero</label>
    <label class="answer question1" for="question1b">Falso</label>
    
    <div class="clear question1">&nbsp;</div>
    
    <input type="checkbox" class="question2"  id="question2a" />
    <input type="checkbox" class="question2"  id="question2b" />
    <input type="checkbox" class="correct question2"  id="question2c" />
    <input type="checkbox" class="question2"  id="question2d" />
  
    <h2 class="question-question question2">2. Según el manifiesto ágil se valora:
    <p>a) Al individuo y las interacciones del equipo sobre el proceso y las herramientas</p>
	<p>b) Negociación exacta con el cliente sobre ambigüedad en contratos</p>
	<p>c) Desarrollar software que funciona más que conseguir una buena documentación.</p>
	<p>d) Implementación exitosa más que diseño exhaustivo</p>
	<p>Son correctas:</p>
    </h2>
    
    <label class="answer question2" for="question2a">A y D</label>
    <label class="answer question2" for="question2b">B y C</label>
    <label class="answer question2" for="question2c">A y C</label>
    <label class="answer question2" for="question2d">B y D</label>
    
    <div class="clear question2">&nbsp;</div>
    
    <input type="checkbox" class="correct question3"  id="question3a" />
    <input type="checkbox" class="question3"  id="question3b" />
  
    <h2 class="question-question question3">3. En el desarrollo ágil la prioridad es satisfacer al cliente mediante tempranas y continuas entregas de software que le aporte un valor.</h2>
    <label class="answer question3" for="question3a">Verdadero</label>
    <label class="answer question3" for="question3b">Falso</label>
    
    <div class="clear question3">&nbsp;</div>
    
    <input type="checkbox" class="question4" id="question4a" />
    <input type="checkbox" class="question4" id="question4b" />
    <input type="checkbox" class="question4" id="question4c" />
    <input type="checkbox" class="correct question4" id="question4d" />
  
    <h2 class="question-question question4">4. Las metodologías de desarrollo ágil de software más representativas son:</h2>
    <label class="answer question4" for="question4a">Lean, Kanban, Rup, Cmmi</label>
    <label class="answer question4" for="question4b">Cleanroom, SW-CMM, BDUF</label>
    <label class="answer question4" for="question4c">Lean, BDUF,Scrum, XP</label>
    <label class="answer question4" for="question4d">Lean, Kanban, Scrum. XP </label>
    
    <div class="clear question4">&nbsp;</div>   
    
    <input type="checkbox" class="question5"  id="question5a" />
    <input type="checkbox" class="question5"  id="question5b" />
    <input type="checkbox" class="question5"  id="question5c" />
    <input type="checkbox" class="correct question5"  id="question5d" />
  
    <h2 class="question-question question5">5. Algunas características de las metodologías agiles son:</h2>
    <label class="answer question5" for="question5a">Simplicidad</label>
    <label class="answer question5" for="question5b">Adaptabilidad</label>
    <label class="answer question5" for="question5c">Practicas de colaboración</label>
    <label class="answer question5" for="question5d">Todas las anteriores</label>
    
    
    <div class="clear question5">&nbsp;</div>    
    
    <div class="end">¡Aqui termina el examen! <br \>¿estas preparado para continuar?, es tu decision hacerlo o regresar para fortalecer tus conocimientos.</div><br \>
 
	<div id="score" ></div>
  	
    </div>
	'; // Contenido
	require('base/general.php');
?>
