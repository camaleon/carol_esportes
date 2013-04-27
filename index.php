<!DOCTYPE html!>
<html lang="pt-br">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="lib/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="lib/cycle.js"></script>
<script type="text/javascript" src="script/script.js"></script>
<script type="text/javascript" src="lib/lightbox/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="lib/lightbox/jquery.lightbox-0.5.css" media="screen" />
<title>Carol Esportes</title>
<link rel="shortcut icon" href="images/icon_carol.jpg" type="image/x-icon"/>
<body>

	<?php
//rotina para troca das paginas carregando apenas parte alterada
if(empty($_GET['pagina'])){
//se variavél pagina não existir	
		$temp = "home";
}else{
if ($_GET['pagina']=="home"){	
	$temp = "home";
	}
if ($_GET['pagina']=="esportes"){	
	$temp = "esportes";
	}
	
if ($_GET['pagina']=="premiacao"){	
	$temp = "premiacao";
	}
	
if ($_GET['pagina']=="brindes"){	
	$temp = "brindes";
	} 
	
if ($_GET['pagina']=="nauticos"){	
	$temp = "nauticos";
	}
if ($_GET['pagina']=="bordado"){	
	$temp = "bordado";
	}  
if ($_GET['pagina']=="redes"){	
	$temp = "redes";
	}  	
if ($_GET['pagina']=="acrilico"){	
	$temp = "acrilico";
	}  	
if ($_GET['pagina']=="fitnes"){	
	$temp = "fitnes";
	}  
if ($_GET['pagina']=="presentes"){	
	$temp = "presentes";
	}  
if ($_GET['pagina']=="grafica"){	
	$temp = "grafica";
	}  
if ($_GET['pagina']=="redes"){	
	$temp = "redes";
	}  
if ($_GET['pagina']=="treinador"){	
	$temp = "treinador";
	}  
}
?>

<div id="faixa_superior_menu"></div>
<div id="faixa_inferior_menu"></div>
<div id="faixa_inferior_cycle"></div>

<div id="pagina">
	<div id="next"><img src="images/icones/next.png"></div>
	<div id="prev"><img src="images/icones/prox.png"></div>
	<div id="descer"><img src="images/icones/descer.png" title="+ Carol" border="0"></div>
	<div id="produtos">+ Carol</div>
	<div id="subir"><img src="images/icones/subir.png" title="Topo da página" border="0"></div>
	<div id="marca"><img src="images/marca_carol.jpg" ></div>
	


	<div id="funcionamento">
		Funcionamento: seg a sáb - 9H às 19H


	</div>
	<div id="os">
		<form>
<center>
Consulte o seu Pedido<br>
<table border=0 >
  <tr>
   
    <td><input type=text size='10' maxlength='10'><input type=submit value="consultar">  </td>
  </tr>
  
</table>
</center>
</form>
	</div>
	<!-- botoes -->
	<nav>
		<div class="b_home"><a href="index.php?pagina=home">HOME</a></div>
		<div class="b_redes"><a href="index.php?pagina=redes">REDES</a></div>
		<div class="b_materialEsportivo"><a href="index.php?pagina=esportes">MATERIAL ESPORTIVO<a/></div>
		<div class="b_premiacao"><a href="index.php?pagina=premiacao">PREMIAÇÃO</a></div>
		<div class="b_grafica"><a href="index.php?pagina=grafica">GRÁFICA</a></div>
		<div class="b_acrilico"><a href="index.php?pagina=acrilico">ACRÍLICO</a></div>
		<div class="b_treinador"><a href="index.php?pagina=treinador">TREINADOR</a></div>
		<div class="b_brindes"><a href="index.php?pagina=brindes">BRINDES</a></div>
		<div class="b_bordados"><a href="index.php?pagina=bordado">BORDADOS<a/></div>
		<div class="b_presentes"><a href="index.php?pagina=presentes">PRESENTES</a></div>
		<div class="b_fitnes"><a href="index.php?pagina=fitnes">FITNES</a></div>
		<div class="b_nauticos"><a href="index.php?pagina=nauticos">ITENS NAÚTICOS</a></div>
		<div class="b_contatos">CONTATOS</div>
	</nav>
		<div id="links_rodape">

			LINKS:<br/><br/>

			HOME<br/>
		QUEM SOMOS<br/>
		MATERIAL ESPORTIVOS<br/>
		PREMIAÇÃO<br/>
		GRÁFICA<br/>
		ACRÍLICO<br/>
		LINHA TREINADOR<br/>
		BRINDES<br/>
		BORDADOS<br/>
		PRESENTE<br/>
		FITNESS<br/>
		ITENS NAUTICOS<br/>
	</div>
	<div id="endereco_rodape">
		ENDEREÇOS:<br/><br/>
		AREIAS <br/>
		Av. Dr. José Rufino, 1385 B e 1407 <br/>
		lojas 1 e 3 -  CEP 50780-000 - Recife-PE.  <br/> 
		Tel (81) 3455-9599<br/><br/>

		BOA VIAGEM <br/><br/>
		Rua Pe. Carapuceiro, 343 - <br/>
		lojas 5 e 6 - CEP 51020-280 - Recife-PE.  <br/>
		Tel (81) 3326-2231<br/>



	</div>
	<div id="contatos_rodape">
		CONTATOS:</br></br>
		BALCÃO ESPORTES</br>
esportes@carolesportes.com</br>
(81)3452.1212</br></br>

GRÁFICA</br>
esportes@carolesportes.com</br>
(81)3452.1212</br></br>

PRODUÇÃO</br>
esportes@carolesportes.com</br>
(81)3452.1212</br></br>

BOA VIAGEM</br>
esportes@carolesportes.com</br>
(81)3452.1212</br>



	</div>
<div id="conteudo">

<?php 
   
   if($temp=="home"){
	   include('principal.php'); 

   }
   if($temp=="esportes"){
	   include('esportes.php'); 
   }
   if($temp=="premiacao"){
	   include('premiacao.php'); 
   }
   if($temp=="brindes"){
	   include('brindes.php'); 
   }
 if($temp=="nauticos"){
	   include('nauticos.php'); 
   }
 if($temp=="bordado"){
	   include('bordado.php'); 
   }
 if($temp=="redes"){
	   include('redes.php'); 
   }
   if($temp=="acrilico"){
	   include('acrilico.php'); 
   }
    if($temp=="fitnes"){
	   include('fitnes.php'); 
   }
       if($temp=="presentes"){
	   include('presentes.php'); 
   }
    if($temp=="grafica"){
	   include('grafica.php'); 
   }
   if($temp=="11"){
	   include('redes.php'); 
   }
      if($temp=="treinador"){
	   include('treinador.php'); 
   }
   ?>


<div id="facebook">
	     <iframe src=  		"//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fcarolesportes&amp;width=800&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23EBEBEB&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:1024px; height:258px;" allowTransparency="true"></iframe>
</div>

</div><!-- fim div conteudo -->




</div><!--fim pagina -->
<div id="loading_image"><img src="images/loader.gif" ></div>
<div id="loading">
	
</div>
<div id="footer">
		<div id="cartoes"><img src="images/icones/cartoes.jpg" ></div>
</div>
<div id="footer2">
		Fotos meramente ilustrativas. Copyright © 2012 - carolesportes.com.br. Todos os direitos reservados.
</div>

</body>
