<h1>Cadastro de projeto</h1>
<?php
echo $this->Html->link('Voltar', array('controller'=>'projetos', 'action' => 'index', 'admin' => true));
?>
<br><br>
<div class="row">
	<div class="col-md-12">
		<?php echo $this->Session->flash(); ?>
	</div>
	<div class="col-md-6">		
		<?php echo $this->Form->create('Projeto'); ?>
		
		<div class="form-group">
			<?php echo $this->Form->input('id', array('type' => 'text', 'class' => 'form-control input-md', 'id' => 'nome_id', 'disabled', 'placeholder' => 'Código')); ?>
	
		</div>
		<div class="form-group">
		<?php echo $this->Form->label('Data');?>
			<?php echo $this->Form->date('data', array('class' => 'form-control input-md')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('titulo', array('type' => 'text', 'class' => 'form-control input-md', 'placeholder' => 'Título do projeto - Cidade/estado')); ?>
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			
			<?php echo $this->Form->input('descricao', array('label'=> true,'type' => 'textarea', 'class' => 'form-control input-md tinymce','label' => 'Descrição',  'placeholder' => 'Descrição do projeto')); ?>
		</div>

	<?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-default btn-info')); ?>

	</div>		

</div>
