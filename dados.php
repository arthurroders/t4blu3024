<?php
	$dadosJson = file_get_contents('dados.json'); <!--Pega os dados armazenados no arquivo dados.json-->
	$decodJson = json_decode($dadosJson, true);  <!--Analisa a string codificada JSON e converte-a em uma variável do PHP.-->
				
	if(isset($_POST['enviadados'])) {
		echo "Dados gravados com sucesso!";
		$values = $_POST;
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
