<?php
require_once('dados/produto.php')
?>

<style>


.imagem1{
	width: 200px;
	height: 200px;
	text-align: center;
	border-radius: 50%;
	display: flex;
	float: right;
	
}

#img1{
	text-align: center;
	width: 400px;
	height: 400px;
}



</style>

<?php
foreach ($produtos as $produtos) {
	# code...
}
?>


[]

<div id="img1">
	<img class="imagem1" src="imagem/<?php $produto[imagem]?>">
	<h3>Cookies de chocolate </h3>
</div>

<div id="img1">
	<img class="imagem1" src="imagem/cookie1.png">
	<h3>Cookies de chocolate branco </h3>
</div>

<div id="img1">
	<img class="imagem1" src="imagem/cookie1.png">
	<h3>Cookies de red vevelt </h3>
</div>
