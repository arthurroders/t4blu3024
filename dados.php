<?php
	$dadosJson = file_get_contents('dados.json'); 
	$decodJson = json_decode($dadosJson, true);  
				
	if(isset($_POST['enviadados'])) {
		echo "Dados gravados com sucesso!";
		$values = $_POST;
		$decodJson[][] = $values;
		$fp = fopen('dados.json', 'w');
		fwrite($fp, json_encode($decodJson));
		fclose($fp);
	}

	if(isset($_POST['mostradados'])) {
		print_r($dadosJson);	
	}
	
	if(isset($_POST['consultadados'])) {
		$codigo = $_POST['codigo'];
		foreach($decodJson[][] => $valor) {
    			if($valor == $decodJson[][]) {
				$retorna = json_encode($value); 
				print_r($retorna);
			}		
		}
    	}	
?>
