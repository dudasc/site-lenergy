<?php
$cakeDescription = __d('cake_dev', 'Lenergy energia solar ');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<?php echo $this->Html->charset(); ?>
	<title>
		<?= $cakeDescription ?>-
		<?= $title_for_layout; ?>
	</title>
	<meta name=viewport content="width=device-width,initial-scale=1">
	<meta name="description" content="LENERGY - Empresa focada no mercado de geração distribuída, com foco na micro e mini geração para atender a crescente demanda de clientes residenciais, comerciais ou industriais que buscam promover a sustentabilidade.">

	<meta name="keywords" content="energia, solar, sustentabilidade, geração">
	<meta name="robots" content="Index,Follow">
	<meta name="revisit-after" content="1" />
	<meta name="language" content="pt-BR">
	<meta name="author" content="Eduardo Soprana Coelho - dudatimbe@gmail.com" />

	<!-- metatags facebook-->
	<meta property="og:locale" content="pt_BR"> 
	<?php 
	    $dominio= $_SERVER['HTTP_HOST'];
	    $url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
	 ?>
	<meta property="og:url" content="<?= $url?>"> 
	<meta property="og:title" content="<?php echo $cakeDescription;echo $this->fetch('title'); ?>">
	<meta property="og:site_name" content="Lenergy energia solar"> 
	<meta property="og:description" content="LENERGY - Empresa focada no mercado de geração distribuída, com foco na micro e mini geração para atender a crescente demanda de clientes residenciais, comerciais ou industriais que buscam promover a sustentabilidade.">
	<meta property='og:image' content='<?= $dominio?>/img/logo.png' />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!-- Latest compiled and minified CSS -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<?php    
		echo $this->Html->meta('icon');

		echo $this->Html->css('default');
		echo $this->Html->css('lightview');
		echo $this->Html->css('owl.carousel');
		echo $this->Html->script('lightview');		
		echo $this->Html->script('jquery.cycle.lite');		
		echo $this->Html->script('owl.carousel');		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('.slideshow').cycle({
				fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
			});
			var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 4,
                nav: true,
                dots: false,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 4
                  }
                }
              })
		});
	</script>