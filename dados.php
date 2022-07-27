<?php
	$dadosJson = file_get_contents('dados.json'); 
					
	if(isset($_POST['enviadados'])) {
		echo "Dados gravados com sucesso!";
		$valores = $_POST;		
		$escrita = fopen('dados.json', 'w');
		fwrite($escrita, json_encode($valores));
		fclose($escrita);
	}

	if(isset($_POST['mostradados'])) {
		print_r($dadosJson);	
	}
			
?>
