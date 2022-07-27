<?php
	$dadosJson = file_get_contents('dados.json'); 
	$decodJson = json_decode($dadosJson, true);  
				
	if(isset($_POST['enviadados'])) {
		echo "Dados gravados com sucesso!";
		$valores = $_POST;
		$decodJson[] = $valores;
		$escrita = fopen('dados.json', 'w');
		fwrite($escrita, json_encode($decodJson));
		fclose($escrita);
	}

	if(isset($_POST['mostradados'])) {
		print_r($dadosJson);	
	}
			
?>
