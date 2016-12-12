<div class="container-fluid bg-body">
	<div class="container">
		<div class="row">
			<h1>CLIENTES E PROJETOS</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		
		<?php
			foreach($projetos as $item){
				echo '<div class="col-sm-12">';
				echo '<h2 class="tit-projeto">'.$item['Projeto']['titulo']."</h2>";
				$data= $item['Projeto']['data'];
				echo '<p class="dt-projeto">'.date('d/m/Y', strtotime($data))."</p>";
				echo $item['Projeto']['descricao'];
				
		?>
		<div class="owl-carousel">
		<?php
			foreach($fotos as $foto){				
				if($foto['FotoProjeto']['projetos_id'] == $item['Projeto']['id']){					
					//echo $foto['FotoProjeto']['nome']."<br>";
					$thumb =  $this->Html->image("uploads/projetos/small_".$foto['FotoProjeto']['nome'], array('alt' =>'', 'title' => '', 'class' => 'img-thumbnail img-hover'));
					$foto =  "img/uploads/projetos/".$foto['FotoProjeto']['nome'];
					//$thumb = 'http://placehold.it/750x450';
					
			 		echo '<a href="'.$foto.'" class="lightview" 
			    	data-lightview-group="example"
		 			data-lightview-caption="">'.$thumb.'</a>';		 			
		 			
				}
		}?>				
		</div>
		<?php
			echo "</div>";
		}
	?>		

	    <div class="col-sm-12">
	        <nav>
	            <ul class="pagination">
	            <?php
	            echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
	            $numbers = $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
	            $numbers = preg_replace("#\<li class=\"active\"\>([0-9]+)\<\/li\>#", "<li class=\"active\"><a href=''>$1</a></li>",$numbers);
	            echo $numbers;
	            echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
	            ?>
	            </ul>
	        </nav>
	        <br><br><br>
	    </div>
	</div>
</div>