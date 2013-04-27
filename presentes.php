<div id="cycle">
<img src="images/cycle/presentes1.jpg">
<img src="images/cycle/presentes2.jpg">

</div>

<script type="text/javascript">

$('#cycle').cycle({



        fx:      'fade',
speed:    500, 


        timeout:  0,



        prev:    '#prev',



        next:    '#next',



        pager:   '#nav',



        pagerAnchorBuilder: pagerFactory



    }).cycle({fx:'fade',speed:900, 
    timeout:8000});
    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };
/*
$('#cycle').cycle({ 



    fx: 'fade' 



});


$('#cycle').cycle({ 



    fx: 'fade' 



}).cycle({

        fx:      'fade',

        timeout:  0,

        prev:    '#prev',

        next:    '#next',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });
  function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };
*/

</script>
<div class="icon_pagina"><img src="images/icones/presentes.png"></div>
<div class="txt_icon_pagina">PRESENTES</div>
<div id="txt_introducao">

A Carol Esportes foi inaugurada em 10 de outubro de 1989. Desde então, atua no ramo de presentes. Em 1993, passou a oferecer também serviços de laboratório fotográfico. Já em 1995, começou a comercializar vários tipos de materiais esportivos, em especial, bolas de vôlei, que eram um verdadeiro sucesso de vendas na época.
O aprimoramento no ramo esportivo levou a empresa a ser referência na produção de medalhas, o que tornou necessária a aquisição de modernas máquinas de impressão.
A experiência adquirida nesta área fez com que um novo desafio fosse explorado: a confecção de produtos gráficos em geral, inclusive lonas e adesivos.  Hoje somos uma das poucas empresas no Brasil a utilizar, sem terceirização, resina, adesivo e acrílico com corte a laser em produtos impressos. Um outro setor em que nos tornamos referência no mercado foi a produção e instalação de redes de proteção, inicialmente para quadras e campos de futebol e, atualmente, também para condomínios residenciais e apartamentos. 
Mas não paramos por aí, estamos novamente retomando a fabricação de camisas esportivas com o diferencial de trabalhar, em conjunto, com sublimação e bordado.
Com mais de 20 anos de atuação em diferentes áreas a Carol Esportes se orgulha em ter conquistado a confiança de seus clientes através de bom atendimento, serviços inovadores, investimento em tecnologia e valorização de seus colaboradores.
<?php 

for($i=0;$i<20;$i++){
//	echo("teste <br/>");
}
?>
</div>

<div id="q1_passar"><img src="images/produtos/passar.png"></div>
<div id="q1_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q1">

	<div id="q1_cycle">
		<div id="q1_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bolsa Nike Sami 3.0</div><br/> Small Items
por: R$ 69,90
2x de R$ 34,95 sem juros
</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><img src="images/produtos/esportes/q1_2.jpg"></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bolsa Speed 3.0</div><br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><img src="images/produtos/esportes/q1_3.jpg"></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>
</div>

<div id="q2_passar"><img src="images/produtos/passar.png"></div>
<div id="q2_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q2">
	<div id="q2_cycle">
		<div id="q2_imagem"><img src="images/produtos/esportes/q2_1.jpg"></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Camisa Oficial Esporte Clube Recife 2013</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>

	<div id="q2_cycle">
		<div id="q2_imagem"><img src="images/produtos/esportes/q2_2.jpg"></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Camisa Oficial Naútico Capibaribe 2013</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>
	<div id="q2_cycle">
		<div id="q2_imagem"><img src="images/produtos/esportes/q2_3.jpg"></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Camisa Oficial Santa Cruz FC 2013</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>
</div>

<div id="q3_passar"><img src="images/produtos/passar.png"></div>
<div id="q3_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q3">
	<div id="q3_cycle">
		<div id="q3_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q3_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>

	<div id="q3_cycle">
		<div id="q2_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
</div>

<div id="q4_passar"><img src="images/produtos/passar.png"></div>
<div id="q4_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q4">
	<div id="q1_cycle">
		<div id="q1_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>			
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><img src="images/produtos/esportes/q1_3.jpg"></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
</div>


<div id="q5_passar"><img src="images/produtos/passar.png"></div>
<div id="q5_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q5">
	<div id="q1_cycle">
		<div id="q1_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><img src="images/produtos/esportes/q1_2.jpg"></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><img src="images/produtos/esportes/q1_3.jpg"></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
</div>


<div id="q6_passar"><img src="images/produtos/passar.png"></div>
<div id="q6_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q6">
	<div id="q6_cycle">
		<div id="q6_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><img src="images/produtos/esportes/q1_2.jpg"></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><img src="images/produtos/esportes/q1_3.jpg"></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>

</div>


<div id="q7_passar"><img src="images/produtos/passar.png"></div>
<div id="q7_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q7">
	<div id="q6_cycle">
		<div id="q6_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><img src="images/produtos/esportes/q1_2.jpg"></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><img src="images/produtos/esportes/q1_3.jpg"></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>

</div>


<div id="q8_passar"><img src="images/produtos/passar.png"></div>
<div id="q8_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q8">
	<div id="q8_cycle">
		<div id="q8_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q8_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q8_cycle">
		<div id="q8_imagem"><img src="images/produtos/esportes/q1_2.jpg"></div>
		<div id="q8_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q8_cycle">
		<div id="q8_imagem"><img src="images/produtos/esportes/q1_3.jpg"></div>
		<div id="q8_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>

</div>

</div>
