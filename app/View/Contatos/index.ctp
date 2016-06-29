<div class="container-fluid bg-body">
	<div class="container">
		<div class="row">
			<h1>ENTRE EM CONTATO</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>Entre em contato conosco, preencha o formulário abaixo e mande sua mensagem.</p>
			<br><br>
		</div>
		<div class="col-md-6">
			<?= $this->Session->flash(); ?>
			<?= $this->Form->create("Contato"); ?>
			<div class="form-group">
				<?= $this->Form->input('nome', array( 'type' => 'text', 'class' => 'form-control  input-lg')); ?>
			</div>
		 	<div class="form-group">
		 		<?= $this->Form->label('E-mail');?>
			    <?= $this->Form->email('email', array('class' => 'form-control  input-lg')); ?>
		    </div>
			<div class="form-group">
			<?= $this->Form->input('cidade', array( 'type' => 'text', 'class' => 'form-control  input-lg')); ?>
			</div>			  
			<div class="form-group">
			<?= $this->Form->input('telefone', array( 'type' => 'text', 'class' => 'form-control  input-lg')); ?>
			</div>
			<div class="form-group">
			<?= $this->Form->label('Mensagem');?>
			<?= $this->Form->textarea('mensagem', array('type' => 'text', 'class' => 'form-control  input-lg', 'rows' => '8')); ?>
			</div>
			<?= $this->Form->button('Enviar', array('class' => 'btn btn-default btn-lg'));?>			  
			<?= $this->Form->end()?>
		</div>
		<div class="col-md-6 dados-contato">
			<p><span>Como nos encontrar?</span></p>
			<p><span>Endereço</span>
			Rua Luiz Cirimbelli, 775<br> 
					Bairro Centro, Turvo/SC<br> 
					CEP: 88930-000</p>
			<p><span>Telefone</span>(48) 9953-8683</p>
			<p><span>E-mail</span>contato@lenergy.com.br</p>		
		</div>

	</div>
	<br><br>
</div>
<!--
<div class="container-fluid">
	<div class="row mapa-contato">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3492.042940002005!2d-49.67465853837441!3d-28.926775364853327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9522203fb6236a63%3A0xcf5c295d8ec68027!2sR.+Lu%C3%ADs+Cirimbele%2C+775+-+Jardim+das+Oliveiras%2C+Turvo+-+SC%2C+88930-000%2C+Brasil!5e0!3m2!1spt-BR!2sbr!4v1465837865685" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
	</div>
	-->
</div>