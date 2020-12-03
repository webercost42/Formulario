<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Confira seu pedido:</h3>
<?php
	
	$dados = isset($_POST) ? $_POST : null;


	if ($dados) {
		foreach ($dados as $key => $value) :
			$total = 0;
			$qtd = 0;



			echo preg_replace('/[^A-Za-z\-]/', '', $key) . ' - ' . $value . '<br>';

			for ($i=1; $i <= 100 ; $i++) :
				
				$tamanho = isset($_POST['tamanho'.$i]) ? $_POST['tamanho'.$i] : null;
			    $qtd = isset($_POST['qtd'.$i]) ? $_POST['qtd'.$i] : null;
			    $qtde = isset($_POST['qtd'.$i]) ? $_POST['qtd'.$i] : null;
			   	

				switch ($tamanho) :
					case 'pequena':
						 $qtd *= 15;
						break;

					case 'media':
						 $qtd *= 20;
						break;

					case 'grande':
						 $qtd *= 25;
						break;
				endswitch;

				$total+=$qtd;
				
				if ($qtde == 2) :
			   		$valorDesc = (10 / 100) * $total;
			   		$msgm = 'Você economizou R$: '.number_format($valorDesc,2,",",".") . '<br>';
					$GLOBALS['msg'] = $GLOBALS['msgm'];
					$GLOBALS['descVal'] = $GLOBALS['valorDesc'];
				elseif ($qtde > 2) :
					$valorDesc = (15 / 100) * $total;
			   		$msgm = 'Você economizou R$: '.number_format($valorDesc,2,",",".") . '<br>';
					$GLOBALS['msg'] = $GLOBALS['msgm'];
					$GLOBALS['descVal'] = $GLOBALS['valorDesc'];
				endif;

				$GLOBALS['tot'] = $GLOBALS['total'];
				
			endfor;


		endforeach;
				
				$descVal = isset($descVal) ? $descVal : null;
				echo isset($msg) ? $msg : null;

				if (isset($_POST['entrega'])) :
					$tot += 10;
				endif;

				if ($descVal) :
					echo 'Valor total R$: '.number_format($tot - $descVal,2,",",".");
				else:
					echo 'Valor total R$: '.number_format($tot,2,",",".");
				endif;
	}else{
		echo 'Adicione pizzas ao seu cardápio';
	}

?>

</body>
</html>