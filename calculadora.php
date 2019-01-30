
		<?php
			
			function suma($n,$m){
				global $suma;
				$suma=$n+$m;
				return $suma;
			}
			
			function resta($n,$m){
				global $resta;
				$resta=$n-$m;
				return $resta;
			}
			
			function multiplicacion($n,$m){
				global $multiplicacion;
				$multiplicacion=$n*$m;
				return $multiplicacion;
			}
			
			function division($n,$m){
				global $division;
				$division=$n/$m;
				return $division;
			}
		?>
		
		<?php

			
			
			
			if(isset($_POST['suma'])==true){
				suma($_POST['num1'],$_POST['num2']);
				echo $_POST['num1']."+".$_POST['num2']."= ".$suma."<br/>";
			}
			if(isset($_POST['resta'])==true){
				resta($_POST['num1'],$_POST['num2']);
				echo $_POST['num1']."-".$_POST['num2']."= ".$resta."<br/>";
			}
			if(isset($_POST['multiplicacion'])==true){
				multiplicacion($_POST['num1'],$_POST['num2']);
				echo $_POST['num1']."*".$_POST['num2']."= ".$multiplicacion."<br/>";
			}
			if(isset($_POST['division'])==true){
				division($_POST['num1'],$_POST['num2']);
				echo $_POST['num1']."/".$_POST['num2']."= ".$division."<br/>";
			}
			
			echo "<br>";
			echo "<a href='".$_SERVER['HTTP_REFERER']."'>Volver</a>";
	
		?>
