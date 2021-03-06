<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Quero Ganhar | Interesses</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/logo_white_small.png" alt="Quero Ganhar"/></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
			<li>
				<a href="/">
					<span class="glyphicon glyphicon-log-out icon-padleft"></span> Sair
				</a>
			</li>
        </ul><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Lista de <?php print($_GET['nome']); ?></h1>
		<p class="lead"><a href="#" onclick="fbshare(); return false;" class="btn btn-lg btn-success"><i class="fa fa-facebook icon-padleft"></i> Compartilhar</a></p>
      </div>
    </div>

    <div class="container">
		
	<div class="row products" id="wishlist">

		<div class="produto col-md-4" data-product-id="1">
			<a target="_blank" href="http://www.submarino.com.br/produto/110092217/kit-livros-colecao-o-guia-do-mochileiro-das-galaxias-edicao-economica-5-volumes-">
				<img class="item" src="img/prod-nerd-1.jpg" alt="Coleção O Guia do Mochileiro das Galáxias"/>
			</a>
			<br/>
			<span>Coleção O Guia do Mochileiro das Galáxias</span><br/>
			<em>R$ 29,90</em>
		</div>
		
		<div class="produto col-md-4" data-product-id="2">
			<a target="_blank" href="http://www.pontofrio.com.br/Eletronicos/AcessoriosEletronicos/streamingmediaplayer/Google-Chromecast-HDMI-Streaming-3416747.html">
				<img class="item" src="img/prod-nerd-2.jpg" alt="Google Chromecast HDMI Streaming"/>
			</a>
			<br/>
			<span>Google Chromecast HDMI Streaming</span><br/>
			<em>R$ 249,00</em>
		</div>
		
		<div class="produto col-md-4" data-product-id="3">
			<a target="_blank" href="http://www.americanas.com.br/produto/116182061/dvd-big-bang-a-teoria-a-sexta-temporada-completa-3-discos-">
				<img class="item" src="img/prod-nerd-3.jpg" alt="Big Bang Theory - Sexta Temporada"/>
			</a>
			<br/>
			<span>Big Bang Theory - Sexta Temporada</span><br/>
			<em>R$ 67,92</em>
		</div>
		
		<div class="produto col-md-4" data-product-id="4">
			<a target="_blank" href="http://www.magazineluiza.com.br/kindle-conexao-wi-fi-2gb-tela-6-ate-1.400-livros-amazon/p/0822400/tb/kind/">
				<img class="item" src="img/prod-nerd-4.jpg" alt="Kindle Conexão Wi-Fi 2GB Tela 6&quot;"/>
			</a>
			<br/>
			<span>Kindle Conexão Wi-Fi 2GB Tela 6&quot;</span><br/>
			<em>R$ 299,00</em>
		</div>
		
		<div class="produto col-md-4" data-product-id="5">
			<a target="_blank" href="http://www.redbug.com.br/p/camiseta-hadouken.html">
				<img class="item" src="img/prod-nerd-5.jpg" alt="Camiseta Hadouken"/>
			</a>
			<br/>
			<span>Camiseta Hadouken</span><br/>
			<em>R$ 59,00</em>
		</div>

	</div><!-- /.row -->

      <hr>

      <footer>
        <p>Quero Ganhar &copy; 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/google.analytics.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	
	<script src="js/facebook.js"></script>
	<script src="js/custom.js"></script>
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
