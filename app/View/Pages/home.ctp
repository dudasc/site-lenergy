<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/01.jpg" alt="">
    </div>
    <div class="item">
      <img src="img/02.jpg" alt="">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-5 box-home">
    <h2>CONHEÇA A LENERGY</h2>
    <p>A LENERGY trabalha no mercado de geração distribuída, com foco na micro e mini geração para atender a crescente demanda de clientes residenciais, comerciais ou industriais que buscam promover a sustentabilidade, ganhando economia e inovação tecnológica...</p>
    <a class="mais" href="sobre">+ Saiba mais</a>
  </div>
    <div class="col-sm-5 box-home">
     <a href="projetos" title="Conheça nossos projetos">
      <div class="slideshow">
        <?= $this->HTml->image('sld1.jpg', array('alt' => 'Lenergy - Energia solar', 'class' => 'img-circle img-responsive center-block'))?>
        <?= $this->HTml->image('sld2.jpg', array('alt' => 'Lenergy - Energia solar', 'class' => 'img-circle img-responsive center-block'))?>
        <?= $this->HTml->image('sld3.jpg', array('alt' => 'Lenergy - Energia solar', 'class' => 'img-circle img-responsive center-block'))?>
        <?= $this->HTml->image('sld4.jpg', array('alt' => 'Lenergy - Energia solar', 'class' => 'img-circle img-responsive center-block'))?>       
      </div>
      </a>
       <h2>CONHEÇA NOSSOS PROJETOS</h2>
        <a class="mais" href="projetos" title="Conheça nossos projetos">+ Projetos desenvolvidos</a>
      </div>
      <div class="col-sm-1"></div>    
  </div>
</div>