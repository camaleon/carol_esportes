<div id="cycle">
<img src="images/cycle/acrilico1.jpg">
<img src="images/cycle/acrilico2.jpg">
<img src="images/cycle/acrilico3.jpg">


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
<div class="icon_pagina"><img src="images/icones/acrilico.png"></div>
<div class="txt_icon_pagina">ACRÍLICO</div>
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
		<div id="q1_imagem"><a href="images/produtos/acrilico/q1_2_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q1_2.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">A6</div><br>Urna em acrílico</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/acrilico/q1_1_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q1_1.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">A12</div><br/>Caixa de sugestões em acrílico</div>		
	</div>
		<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/acrilico/q1_3_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q1_3.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">A6</div><br/>Urna m acrílico</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/acrilico/q1_4_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q1_4.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">A6</div><br/>Urna m acrílico</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/acrilico/q1_5_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q1_5.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">A2</div><br/>Display em acrílico cristal.</div>		
	</div>
	
</div>

<div id="q2_passar"><img src="images/produtos/passar.png"></div>
<div id="q2_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q2">
	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/acrilico/q2_1_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q2_1.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">A3</div> <br/>Quadro acrílico com adesivo. </div>		
	</div>

	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/acrilico/q2_2_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q2_2.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Placa em acrílico</div> <br/></div>		
	</div>
	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/acrilico/q2_3_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q2_3.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Placa em PVC</div> <br/></div>		
	</div>
	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/acrilico/q2_4_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q2_4.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Placa em PVC</div> <br/></div>		
	</div>
	
</div>

<div id="q3_passar"><img src="images/produtos/passar.png"></div>
<div id="q3_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q3">
	<div id="q3_cycle">
		<div id="q3_imagem"><a href="images/produtos/acrilico/q3_1_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q3_1.jpg"></a></div>
		<div id="q3_descricao"><br/><div class="descricao_titulo">A6</div> <br/>Quadro em acrílico. </div>				
	</div>
<div id="q3_cycle">
		<div id="q3_imagem"><a href="images/produtos/acrilico/q3_2_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q3_2.jpg"></a></div>
		<div id="q3_descricao"><br/><div class="descricao_titulo">Placa em acrílico</div> <br/></div>				
	</div>
</div>
	
<div id="q4_passar"><img src="images/produtos/passar.png"></div>
<div id="q4_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q4">
	<div id="q4_cycle">
		<div id="q4_imagem"><a href="images/produtos/acrilico/q4_1_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q4_1.jpg"></a></div>
		<div id="q4_descricao"><br/><div class="descricao_titulo">A6</div> <br/> Púlpito em acrílico com led.</div>				
	</div>
<div id="q4_cycle">
		<div id="q4_imagem"><a href="images/produtos/acrilico/q4_2_g.jpg" title="Urna em acrílico"><img src="images/produtos/acrilico/q4_2.jpg"></a></div>
		<div id="q4_descricao"><br/><div class="descricao_titulo">A6</div> <br/>Púlpito em acrílico com led.</div>				
	</div>

</div>

</div>








