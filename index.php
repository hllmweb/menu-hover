<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Menu Hover</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/index.css">
	<link rel="stylesheet" href="assets/css/awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<header id="topo">
	

	<span class="icon-menu"><i class="fa fa-bars"></i></span>
	<span class="icon-close"><!--<i class="fa fa-times"></i>--></span>
	<span class="icon-pesquisar"><i class="fa fa-search"></i></span>

	<nav class="menu">
		<h2>Menu</h2>
		<ul>
			<li><a href="">Link #01</a></li>
			<li><a href="">Link #02</a></li>
			<li><a href="">Link #03</a></li>
		</ul>
	</nav>

	<!--Falta fazer o fechar do pesquisar-->
	<div class="pesquisar">
		<form id="form-pesquisar">
			<label for="txt-busca">
				<input type="text" id="txt-busca" name="txt-busca" placeholder="Procurar...">
			</label>
		</form>
	</div>

</header>



<svg id="close" class="icon-close">
	<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close">
		<svg id="icon-close" viewBox="0 0 1000 1000" width="100%" height="100%">
			<path d="M969.8,870.3c27,27.7,27,71.8,0,99.1C955.7,983,937.9,990,920,990c-17.9,0-35.7-7-49.7-20.7L500,599L129.6,969.4C115.6,983,97.8,990,79.9,990s-35.7-7-49.7-20.7c-27-27.3-27-71.4,0-99.1L400.9,500L30.3,129.3c-27-27.3-27-71.4,0-99.1c27.3-27,71.8-27,99.4,0L500,400.9L870.4,30.2c27.7-27,71.8-27,99.4,0c27,27.7,27,71.8,0,99.1L599.1,500L969.8,870.3z"></path>
		</svg>	

	</use>
</svg>


	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/index.js"></script>
</body>
</html>