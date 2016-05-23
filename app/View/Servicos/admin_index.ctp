<h1>Serviços</h1>
<?php
echo $this->Html->link('Cadastrar novo serviço', array('controller'=>'servicos', 'action' => 'add', 'admin' => true));
?>
<br><br>
<?php echo $this->Session->flash(); ?>
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
	<?php 
        foreach($servicos as $item): 
            echo '<tr>';
            echo '<td>'.$item['Servico']['id'].'</td>';
            echo '<td>'.$item['Servico']['nome'].'</td>';
   			echo '<td>'.$this->Html->link('Editar', array('controller'=>'servicos', 'action' => 'add', 'id' => $item['Servico']['id'], 'admin' => true));
            echo '<td>'.$this->Html->link('Excluir', array('controller'=>'servicos', 'action' => 'delete','admin' => true, 'id' => Inflector::slug($item['Servico']['id'])), array('confirm'=>'Deseja excluir o serviço?'));            
            echo '</tr>';
		endforeach;
        ?>
	
    </tbody>
</table>