<div id="cycle">
<img src="images/cycle/esportes1.jpg">
<img src="images/cycle/esportes2.jpg">
<img src="images/cycle/esportes3.jpg">
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
<div class="icon_pagina"><img src="images/icones/esportes.png"></div>
<div class="txt_icon_pagina">ESPORTES</div>
<div id="txt_introducao">

Os exercícios físicos possuem inúmeras vantagens, não apenas para a saúde do corpo, mas também para a mente, pois eles regulam a circulação e a respiração, ajudam a diminuir o stress e, também, ameniza, e até pode evitar, os problemas ósseos, como a osteoporose,  além de ajudar a manter o corpo sempre em forma evitando doenças como obesidade.
Existem vários tipos de exercícios e todas as idades podem fazê-los. Obviamente, antes de se praticar um esporte, é sempre recomendável a consulta e a orientação especializada.

Para as crianças quase todos os esportes são possíveis, a natação é muito indicada para aumentar a constituição e o vigor físico da criança.
Para os jovens adultos, na faixa etária dos 20 anos, não há limitações quanto à modalidade, mas é muito comum a falta de estímulo,  por esse motivo, especialistas recomendam os esportes competitivos ou coletivos como o futsal, o basquete e o futebol.
Com a chegada aos 30 e 40 anos, indica-se a musculação e a corrida, preventivamente, para evitar fraquezas musculares e melhoria do fluxo sanguíneo.<br><br>
Os exercícios aeróbicos leves começam a ser geralmente prescritos aos homens e mulheres acima de 40 anos. A partir dessa idade,  e até o fim da vida, o acompanhamento médico e a intensidade dos exercícios devem ser monitorados com mais frequência, a caminhada é muito útil nessa fase sendo sempre solicitada. 
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
