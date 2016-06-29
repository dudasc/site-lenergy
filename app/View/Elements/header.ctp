<header>
  <div class="container">
  	<div class="row logo">
  		<div id="box-logo">
  			<a class="navbar-brand" href="http://www.lenergy.com.br">
  	      		<?= $this->HTml->image('logo.png', array('title' => 'Lenergy - Energia solar', 'alt' => 'Lenergy - Energia solar', 'class' => 'ismg-responsive'))?>
  	      	</a>
        	</div>
  	</div>
  </div>
  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        	<li><?php echo $this->Html->link('PÁGINA INICIAL', array('controller' => 'pages', 'action' => 'index'), array('title' => 'Home')); ?></li>
          <li><?php echo $this->Html->link('SOBRE A LENERGY', array('controller' => 'pages', 'action' => 'sobre'), array('title' => 'Sobre a empresa')); ?></li>
          <li><?php echo $this->Html->link('COMO FUNCIONA', array('controller' => 'pages', 'action' => 'como_funciona'), array('title' => 'Como funciona')); ?></li>
  	    <li><?php echo $this->Html->link('SOLUÇÕES E SERVIÇOS', array('controller' => 'servicos', 'action' => 'index'), array('title' => 'Soluções e serviços')); ?></li>
          <li><?php echo $this->Html->link('CLIENTES E PROJETOS', array('controller' => 'projetos', 'action' => 'index'), array('title' => 'Conheça nossos cliente e os projetos já desenvolvidos')); ?></li>
          <li><?php echo $this->Html->link('ENTRE EM CONTATO', array('controller' => 'contatos', 'action' => 'index'), array('title' => 'Entre em contato conosco')); ?></li>
          <li><a href="https://www.facebook.com/lenergyenergiasolar/" title ="Acesse nossa página no facebook!" target="_blank">
                            <?php echo $this->Html->image('face-icon.png', array('alt' => 'Acesse nossa página no facebook!', 'class' => 'face-icon azul')); ?>
                            <?php echo $this->Html->image('face-icon-b.png', array('alt' => 'Acesse nossa página no facebook!', 'class' => 'face-icon branco')); ?>
                      </a></li>
        </ul>      
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>