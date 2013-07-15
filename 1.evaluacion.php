<?php 
	require('navegacion.php');	
	$contenido = '
	<link rel="stylesheet" href="evaluaciones/base/css/style.css?v=32">
    <link rel="stylesheet" href="evaluaciones/base/css/screen.css?v=32">       
    <link rel="stylesheet" href="evaluaciones/css/style.css">  
    
  	<div id="main">
  	
    <h1>Evaluacion etapa # 1</h1>

    <input type="checkbox" class="correct question1"  id="question1a" />
    <input type="checkbox" class="question1"  id="question1b" />
  
    <h2 class="question-question question1">1. Por ciclo de vida del software, entendemos la sucesión de etapas por las que pasa el software desde que un nuevo proyecto es concebido hasta que se deja de usar.</h2>
    <label class="answer question1" for="question1a">Verdadero</label>
    <label class="answer question1" for="question1b">Falso</label>
    
    <div class="clear question1">&nbsp;</div>
    
    <input type="checkbox" class="question2"  id="question2a" />
    <input type="checkbox" class="question2"  id="question2b" />
    <input type="checkbox" class="correct question2"  id="question2c" />
    <input type="checkbox" class="question2"  id="question2d" />
  
    <h2 class="question-question question2">2. El modelo en cascada está estructurado de la siguiente manera:</h2>
    <label class="answer question2" for="question2a">Requerimientos, diseño, codificación, mantenimiento</label>
    <label class="answer question2" for="question2b">Requerimientos, codificación, operación, test</label>
    <label class="answer question2" for="question2c">Requerimientos, diseño, codificación, test, mantenimiento</label>
    <label class="answer question2" for="question2d">Diseño, requerimientos, test, mantenimiento</label>
    
    <div class="clear question2">&nbsp;</div>
    
    <input type="checkbox" class="correct question3"  id="question3a" />
    <input type="checkbox" class="question3"  id="question3b" />
  
    <h2 class="question-question question3">3. Una gran ventaja del modelo en espiral es que trata de reducir el factor de riesgo del proyecto identificando en etapas más tempranas del software errores y cambios de requerimientos</h2>
    <label class="answer question3" for="question3a">Verdadero</label>
    <label class="answer question3" for="question3b">Falso</label>
    
    <div class="clear question3">&nbsp;</div>
    
    <input type="checkbox" class="question4"  id="question4a" />
    <input type="checkbox" class="correct question4"  id="question4b" />
  
    <h2 class="question-question question4">4. Es cierto que una metodología de desarrollo de software es una serie de pasos establecidos para el desarrollo de un software y las herramientas que lo componen</h2>
    <label class="answer question4" for="question4a">Verdadero</label>
    <label class="answer question4" for="question4b">Falso</label>
    
    <div class="clear question4">&nbsp;</div>   
    
    <input type="checkbox" class="question5"  id="question5a" />
    <input type="checkbox" class="question5"  id="question5b" />
    <input type="checkbox" class="question5"  id="question5c" />
    <input type="checkbox" class="correct question5"  id="question5d" />
  
    <h2 class="question-question question5">5. Las siguientes son metodologías tradicionales de desarrollo de software</h2>
    <label class="answer question5" for="question5a">CMMI-DEV</label>
    <label class="answer question5" for="question5b">RUP</label>
    <label class="answer question5" for="question5c">Cleanroom software Engineering</label>
    <label class="answer question5" for="question5d">Todas las anteriores</label>
    
    
    <div class="clear question5">&nbsp;</div>    
    
    <div class="end">¡Aqui termina el examen! <br \>¿estas preparado para continuar?, es tu decision hacerlo o regresar para fortalecer tus conocimientos.</div><br \>
 
	<div id="score" ></div>
  	
    </div>
	'; // Contenido
	require('base/general.php');
?>
