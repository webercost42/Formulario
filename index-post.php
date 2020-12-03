<form action="cart-post.php" method="post">
	<?php
		$pizza = array(
			'FRANGO COM CATUPIRY', 
			'CALABRESA',
			'MUSSARELA', 
			'BRÓCOLIS',
			'PORTUGUESA', 
			'MARGUERITA', 
			'BRIGADEIRO'
		);

		foreach ($pizza as $key => $sabor) :

			echo '<label>Sabor:</label>';
			echo '<input type="checkbox" name="sabor'.($key+1).'" value="'.$sabor.'">'.$sabor.'<br>';

			echo '<label>Tamanho:</label>';
			echo '<input type="radio" name="tamanho'.($key+1).'" value="pequena">Pequeno';
			echo '<input type="radio" name="tamanho'.($key+1).'" value="media">Médio';
			echo '<input type="radio" name="tamanho'.($key+1).'" value="grande">Grande<br>';

			echo '<label>Quantidade: </label>';
			echo '<input type="radio" name="qtd'.($key+1).'" value="1">1';
			echo '<input type="radio" name="qtd'.($key+1).'" value="2">2';
			echo '<input type="radio" name="qtd'.($key+1).'" value="3">3';
			echo '<input type="radio" name="qtd'.($key+1).'" value="4">4';
			echo '<input type="radio" name="qtd'.($key+1).'" value="5">5<br>';

			// echo'<input type="number" id="qtd" name="qtd'.($key+1).'" placeholder="Quantidade">';

			echo '<hr>';

		endforeach;
	?>
	    <label>Entrega - Com entrega + 10,00</label>
		<input type="checkbox" name="entrega" value="sim">
	<button type="submit">Adicionar</button>
</form>
