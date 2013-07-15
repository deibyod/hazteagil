<?php 
	require('navegacion.php');	
	$contenido = '
	<link rel="stylesheet" href="evaluaciones/base/css/style.css?v=32">
    <link rel="stylesheet" href="evaluaciones/base/css/screen.css?v=32">       
    <link rel="stylesheet" href="evaluaciones/css/style.css">  
    
  	<div id="main">
  	
    <h1>Evaluacion etapa # 3</h1>

    <input type="checkbox" class="question1"  id="question1a" />
    <input type="checkbox" class="correct question1"  id="question1c" />
    <input type="checkbox" class="question1"  id="question1b" />  
    <input type="checkbox" class="question1"  id="question1d" />


    <h2 class="question-question question1">1.El nombre scrum fue tomado del modo colaborativo de una jugada en el:.</h2>
    <label class="answer question1" for="question1a">Futbol Americano</label>
    <label class="answer question1" for="question1b">Futbol soccer</label>
     <label class="answer question1" for="question1c">Rugby</label>
    <label class="answer question1" for="question1d">Voleibol</label>

    <div class="clear question1">&nbsp;</div>
    
    <input type="checkbox" class="question2"  id="question2a" />
    <input type="checkbox" class="question2"  id="question2c" />
    <input type="checkbox" class="correct question2"  id="question2b" />
    <input type="checkbox" class="question2"  id="question2d" />
  
    <h2 class="question-question question2">2. El nombre que se le da al periodo entre cada entrega funcional del producto en scrum se le denomina:</h2>
    <label class="answer question2" for="question2a">Iteración</label>
    <label class="answer question2" for="question2b">Sprint</label>
    <label class="answer question2" for="question2c">Ciclo</label>
    <label class="answer question2" for="question2d">Etapa</label>
    
    <div class="clear question2">&nbsp;</div>
    
    <input type="checkbox" class="correct question3"  id="question3b" />
    <input type="checkbox" class="question3"  id="question3a" />
  
    <h2 class="question-question question3">3. Las historias de usuario son la técnica usada por XP para especificar los requisitos de software, en ellas se dan las características que el sistema debe poseer. Estas deben ser claras y precisas y no pueden ser modificadas en el desarrollo del producto </h2>

    <label class="answer question3" for="question3a">Verdadero</label>
    <label class="answer question3" for="question3b">Falso</label>
    
    <div class="clear question3">&nbsp;</div>

    <input type="checkbox" class="correct question4"  id="question4a" />
    <input type="checkbox" class="question4"  id="question4b" />
    <input type="checkbox" class="question4"  id="question4c" />
    <input type="checkbox" class="question4"  id="question4d" />
    
  
    <h2 class="question-question question4">4. Las tres reglas de kanban son:</h2>

    <label class="answer question4" for="question4a">Mostrar el proceso, Limitar el flujo de trabajo, Optimizar el flujo de trabajo</label>

    <label class="answer question4" for="question4b">Limitar el flujo de trabajo, especificar el trabajo a realizar, Optimizar el flujo de trabajo</label>

    <label class="answer question4" for="question4c">Mostrar el proceso, especificar el trabajo, aumentar el velocity del equipo</label>

    <label class="answer question4" for="question4d">Ninguna de las anteriores</label>
    
    <div class="clear question4">&nbsp;</div>   
    
    <input type="checkbox" class="question5"  id="question5a" />
    <input type="checkbox" class="question5"  id="question5b" />
    <input type="checkbox" class="question5"  id="question5c" />
    <input type="checkbox" class="correct question5"  id="question5d" />
  
    <h2 class="question-question question5">5. Algunas buenas prácticas en XP son:</h2>
    <label class="answer question5" for="question5a">Pruebas, Refactorización, Cliente in-situ</label>
	
    <label class="answer question5" for="question5b">Integración continua, Propiedad colectiva del código, 40 horas semanales</label>

    <label class="answer question5" for="question5c">Estándares de programación, Metáfora, diseño simple</label>
	
    <label class="answer question5" for="question5d">Todas las anteriores</label>
    
    
    <div class="clear question5">&nbsp;</div>    
    
    <div class="end">¡Aqui termina el examen! <br \>¿estas preparado para continuar?, es tu decision hacerlo o regresar para fortalecer tus conocimientos.</div><br \>
 
	<div id="score" ></div>
  	
    </div>
	'; // Contenido
	require('base/general.php');
?>
