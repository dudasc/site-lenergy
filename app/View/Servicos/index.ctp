<div class="container-fluid bg-body">
	<div class="container">
		<div class="row">
			<h1>SOLUÇÕES E SERVIÇOS</h1>
		</div>
	</div>
</div>
<div class="container">
	
		
		<?php			
		$i = 0;
		$total = count($servicos);
		foreach($servicos as $item):
			if($i%2==0 or $i == 0){
				echo '<div class="row">';
			}
			echo '<div class="col-sm-6 lista-servico">';
			echo "<h2><strong>".$item['Servico']['nome']."</strong></h2>";
			echo $item['Servico']['descricao'];
			echo '</div>';
			$i++;
			if($i%2==0 or $i == $total){
				echo '</div>';
			}
		endforeach;
		?>
	
	<div class="row">
		<div class="col-sm-12">
			<hr>
			<p><strong>Letícia Toreti Scarabelot</strong><br>
					Msc. Eng. Eletricista<br>
					CREA/SC 127283-2</p>
			<br><br><br>
		</div>
	</div>
</div>

