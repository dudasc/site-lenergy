<div class="container-fluid bg-body">
	<div class="container">
		<div class="row">
			<h1>ENTRE CONTATO</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2><strong>Envie sua mensagem</strong></h2>
			<p>Entre em contato conosco, preencha o formulário abaixo e envie-nos sua mensagem.</p>
		</div>
		<div class="col-md-6">
			<?= $this->Session->flash(); ?>
			<?= $this->Form->create("Contato", array('enctype'=>"multipart/form-data")); ?>
			<div class="form-group">
				<?= $this->Form->label('Nome');?>
				<div class="input-group">
					<span class="input-group-addon">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
					<?= $this->Form->text('nome', array( 'type' => 'text', 'class' => 'form-control input-lg')); ?>
				</div>					
			</div>
			<div class="form-group">
				<?= $this->Form->label('Cidade');?>
				<div class="input-group">
					<span class="input-group-addon">
					<span class="glyphicon glyphicon-home" aria-hidden="true"></span></span>
					<?= $this->Form->text('cidade', array('class' => 'form-control input-lg')); ?>
				</div>	
			</div>	
		 	<div class="form-group">
		 		<?= $this->Form->label('E-mail');?>
		 		<div class="input-group">
		 			<span class="input-group-addon">@</span>
			    	<?= $this->Form->email('email', array('class' => 'form-control input-lg')); ?>
			    </div>
		    </div>					  
			<div class="form-group">
				<?= $this->Form->label('Telefone');?>
				<div class="input-group">
					<span class="input-group-addon">
					<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></span>
				<?= $this->Form->tel('telefone', array( 'type' => 'text', 'class' => 'form-control input-lg')); ?>
				</div>
			</div>
			<div class="form-group">
				<?= $this->Form->label('Mensagem');?>
				<?= $this->Form->textarea('mensagem', array('type' => 'text', 'class' => 'form-control input-lg', 'rows' => '8')); ?>
			</div>
			<div class="form-group">
			    <?= $this->Form->label('Anexo');?>			    
				<?= $this->Form->file('anexo'); ?>
			    <p class="help-block">Anexe sua conta de energia para receber uma proposta de orçamento.</p>
			    
			</div>
			<?= $this->Form->button('Enviar mensagem', array('class' => 'btn btn-default btn-lg'));?>
			<?= $this->Form->end()?>
		</div>
		<div class="col-md-6 dados-contato">
			<!--<p><span>Como nos encontrar?</span></p>-->
			<address>
			<p><span>Endereço</span>
			Rua Luiz Cirimbelli, 775<br> 
					Bairro Centro, Turvo - SC<br> 
					CEP: 88930-000</p>
			<p><span>Telefone</span>(48) 99953-8683</p>
			<p><span>E-mail</span>contato@lenergy.com.br</p>
			</address>		
		</div>
	</div>
</div>
<!--
<div class="container-fluid">
	<div class="row mapa-contato">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3492.042940002005!2d-49.67465853837441!3d-28.926775364853327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9522203fb6236a63%3A0xcf5c295d8ec68027!2sR.+Lu%C3%ADs+Cirimbele%2C+775+-+Jardim+das+Oliveiras%2C+Turvo+-+SC%2C+88930-000%2C+Brasil!5e0!3m2!1spt-BR!2sbr!4v1465837865685" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
	</div>
</div>	-->