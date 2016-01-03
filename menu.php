<?php
	/*
		PROBLEMA: 
			[ATIVAR UM LINK DE ACORDO COM O QUE ELE FOR CLICADO]
		SOLUÇÃO:
			[RECONHECER A PARTIR DA VARIÁVEL GET O VALOR E EM SEGUIDA BUSCAR VIA JQUERY ONDE ESTÁ
			ESSE VALOR NO COMPONENTE <A> DO HTML. FEITO ISSO, PODEMOS, DE FORMA DINAMICA, ATIVAR QUALQUER LINK
			QUE TENHA EM SEU HREF DETERMINADO VALOR PASSADO VIA VARIAVEL GET.]
	*/
	if(!isset($_GET['pagina'])){//CONSIDERANDO QUE ESTAMOS NA PÁGINA INICIAL(INICIO)
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('a[href="index.php"]').addClass('active');
	});
</script>
<?php
	}else{
		// SE A VARIÁVEL GET EXISTIR VAMOS SETAR DE FORMA AUTOMÁTICA
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('a[href="?pagina=<?=$_GET['pagina']?>"]').addClass('active');
	});
</script>
<?php
	}
?>
<a href="index.php">Inicio</a>
<a href="?pagina=p1">Pagina 1</a>
<a href="?pagina=p2">Pagina 2</a>