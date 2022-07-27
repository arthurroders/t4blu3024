<?php
	$dadosJson = file_get_contents('dados.json'); 
	$decodJson = json_decode($dadosJson, true);  
				
	if(isset($_POST['enviadados'])) {
		echo "Dados gravados com sucesso!";
		$values = $_POST;
		$decodJson["Disciplina"][] = $values;
		$fp = fopen('dados.json', 'w');
		fwrite($fp, json_encode($decodJson));
		fclose($fp);
	}

	if(isset($_POST['mostradados'])) {
		print_r($dadosJson);	
	}
	
		
?>
