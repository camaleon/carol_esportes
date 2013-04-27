<div id="cycle">
<img src="images/cycle/treinador1.jpg">
<img src="images/cycle/treinador2.jpg">
<img src="images/cycle/treinador3.jpg">


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
<div class="icon_pagina"><img src="images/icones/treinador.png"></div>
<div class="txt_icon_pagina">TREINADOR</div>
<div id="txt_introducao">

O acrílico está no mercado com uma definição especial - brilha, e faz a marca da empresa ser
valorizada. Seu objetivo é repassar a idéia de renovação e inovação, além de ser moderno e
durável. Sinônimo de modernidade, o acrílico é matéria-prima principal para o desenvolvimento
dos projetos de profissionais conceituados no ramo da arquitetura, designer e engenharia.

As vantagens do uso do acrílico são inúmeras, alguns exemplos:
<ul>
	<li>É isolante térmico e acústico. Sua condutividade é 3,77 vezes menor que a do vidro.</li>
	<li>Transmite até 93% da luz visível, maior que o vidro, e muito superior a outros plásticos
transparentes.</li>
<li>Classificado como plástico de combustão lenta, o acrílico queima na velocidade de 28mm
por minuto, a metade da velocidade de propagação do pinho branco. Não produz fumaça
nem combustão após a extinção do fogo.</li>
</ul>
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
		<div id="q1_imagem"><a href="images/produtos/treinador/q1_4_g.jpg" title="Saco para bolas"><img src="images/produtos/treinador/q1_4.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Saco para bolas</div><br/>Saco para bolas</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/treinador/q1_1_g.jpg" title="Barrinha"><img src="images/produtos/treinador/q1_1.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Barrinha</div><br/>Barrinha de futebol</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/treinador/q1_2_g.jpg" title="Caneleira"><img src="images/produtos/treinador/q1_2.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Caneleira</div><br>Caneleira</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/treinador/q1_3_g.jpg" title="Colchonetes em NAPA Personalizado"><img src="images/produtos/treinador/q1_3.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Colchonetes</div><br/>Colchonetes em NAPA Personalizado</div>		
	</div>
		
	

	
</div>

<div id="q2_passar"><img src="images/produtos/passar.png"></div>
<div id="q2_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q2">
	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/treinador/q2_1_g.jpg" title="Meião de várias cores"><img src="images/produtos/treinador/q2_1.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Meião</div> <br/>Meião de várias cores</div>		
	</div>

	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/treinador/q2_2_g.jpg" title="Tornozeleira de várias cores"><img src="images/produtos/treinador/q2_2.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Tornozeleira</div> <br/>Tornozeleira de várias cores</div>		
	</div>
	
	
</div>

<div id="q3_passar"><img src="images/produtos/passar.png"></div>
<div id="q3_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q3">
<div id="q3_cycle">
		<div id="q1_imagem"><a href="images/produtos/treinador/q3_4_g.jpg" title="Bolsa de treino"><img src="images/produtos/treinador/q3_4.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bolsa de treino</div><br/></div>		
	</div>
	<div id="q3_cycle">
		<div id="q1_imagem"><a href="images/produtos/treinador/q3_1_g.jpg" title="Placa de mesa"><img src="images/produtos/treinador/q3_1.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Placa de mesa</div><br/></div>		
	</div>
<div id="q3_cycle">
		<div id="q1_imagem"><a href="images/produtos/treinador/q3_2_g.jpg" title="Marcação de rede"><img src="images/produtos/treinador/q3_2.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Marcação de rede</div><br/>Vôlei de praia</div>		
	</div>
<div id="q3_cycle">
		<div id="q1_imagem"><a href="images/produtos/treinador/q3_3_g.jpg" title="Squeeze"><img src="images/produtos/treinador/q3_3.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Squeeze</div><br/></div>		
	</div>

</div>
	
<div id="q4_passar"><img src="images/produtos/passar.png"></div>
<div id="q4_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q4">
	<div id="q4_cycle">
		<div id="q1_imagem"><a href="images/produtos/treinador/q4_1_g.jpg" title="Tabela de baskete personalizada"><img src="images/produtos/treinador/q4_1.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Tabela</div><br/>Tabela de baskete personalizada</div>		
	</div>
<div id="q4_cycle">
		<div id="q1_imagem"><a href="images/produtos/treinador/q4_2_g.jpg" title="Kit árbitro"><img src="images/produtos/treinador/q4_2.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Kit árbitro</div><br/>Campo/Salão</div>		
	</div>
<div id="q4_cycle">
		<div id="q1_imagem"><a href="images/produtos/treinador/q4_3_g.jpg" title="Tabela de baskete personalizada"><img src="images/produtos/treinador/q4_3.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Tabela de baskete personalizada</div><br/></div>		
	</div>

</div>

</div>








