<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include "css.php";?>
<!-- incluindo menu-->
<?php include "menu.php";?><br><br><br>
<!-- Estilize a parte de conteudo para ficar bonitinho.-->
<div id="conteudo">
<?php 
/*vamos verificar qual pagina o usuario quer da seguinte forma
NO HREF DO MENU TEM UMA VARIÁVEL DO TIPO GET( VARIAVEL DE URL A GROSSO MODO) E ELA TEM UM VALOR;
ESSE VALOR SERÁ COMO IDENFICAREMOS QUAL PAGINA O USUÁRIO QUER.
DEI DOIS NOME: P1 E P2 MAS PODERIA SER JOAO E PINICO. FIZ ISSO APENAS PARA SABER QUAL PAGE EU QUERO.
VAMOS A PRATICA.
*/
// VERIFICANDO SE A VARIAVEL PAGINA EXISTE, CASO CONTRARIO incluiremos a pagina inicial.
if(isset($_GET['pagina'])){
	//VERIFICAR O VALOR, CASO SEJA UM DESCONHECIDO NADA ACONTECE
	if($_GET['pagina']=="p1"){ // SE FOR P1 VOU INCLUIR A PAGINA P1
		include "p1.php";
	}else if($_GET['pagina']=="p2"){
		include "p2.php";
	}
}else{
	include "p_inicial.php";
}
?>
</div>
<div id="rodape">
<?php include "rodape.php";?>
</div>
</body>
</html>