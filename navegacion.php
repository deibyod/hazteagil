<?php
	$ruta = $_SERVER['PHP_SELF'];
	$nombrefichero = basename($ruta, '.php');
	if($nombrefichero=='index'||$nombrefichero=='info'||$nombrefichero=='creditos'||$nombrefichero=='comunidad'||$nombrefichero=='externos'||$nombrefichero=='evaluaciones'){
		$anteriorEtapa = 'index';
		$anteriorItem = 'index';
		$siguienteEtapa = 1;
		$siguienteItem = 1;
	}else if($nombrefichero==1){
		$anteriorEtapa = 'index';
		$anteriorItem = 'index';
		$siguienteEtapa = $nombrefichero[0]+1;
		$siguienteItem = $nombrefichero+0.1;
		require($nombrefichero[0].'.titulo.php');
		$evaluacion = $nombrefichero[0].'.evaluacion.php';
	}else if($nombrefichero[0]==1){
		$anteriorEtapa = 'index';
		$anteriorItem = $nombrefichero-0.1;
		$siguienteEtapa = $nombrefichero[0]+1;
		$siguienteItem = $nombrefichero+0.1;
		require($nombrefichero[0].'.titulo.php');
		$evaluacion = $nombrefichero[0].'.evaluacion.php';
	}else if($nombrefichero==3.5){
		$anteriorEtapa = $nombrefichero[0]-1;
		$anteriorItem = $nombrefichero-0.1;
		$siguienteEtapa = 'index';
		$siguienteItem = 'index';
		require($nombrefichero[0].'.titulo.php');
		$evaluacion = $nombrefichero[0].'.evaluacion.php';
	}else if($nombrefichero[0]==3){
		if($nombrefichero==3){$anteriorItem = 2.6;}else{$anteriorItem = $nombrefichero-0.1;}
		$anteriorEtapa = $nombrefichero[0]-1;
		$siguienteEtapa = 'index';
		$siguienteItem = $nombrefichero+0.1;
		require($nombrefichero[0].'.titulo.php');
		$evaluacion = $nombrefichero[0].'.evaluacion.php';
	}else{
		$anteriorEtapa = $nombrefichero[0]-1;
		$anteriorItem = $nombrefichero-0.1;
		$siguienteEtapa = $nombrefichero[0]+1;
		$siguienteItem = $nombrefichero+0.1;
		require($nombrefichero[0].'.titulo.php');
		$evaluacion = $nombrefichero[0].'.evaluacion.php';
	}
	
?>
