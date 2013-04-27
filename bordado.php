<div id="cycle">
<img src="images/cycle/bordados1.jpg">
<img src="images/cycle/bordados2.jpg">


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
<div class="icon_pagina"><img src="images/icones/bordado.png"></div>
<div class="txt_icon_pagina">BORDADO</div>
<div id="txt_introducao">

A Carol Esportes sempre inovando através de diversos setores, apresenta o setor de Bordados com uma máquina de altíssima qualidade e tecnologia, uma das mais avançadas no mercado. Dispondo de 6 cabeças de alta velocidade de produção capazes de fornecer bordados de qualidade em fardamentos em geral, enxovais, toalhas, padrões esportivos dentre outras diversas possibilidades de trabalhos.

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
		<div id="q1_imagem"><img src="images/produtos/bordados/q1_1.jpg"></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bar em Acrílico</div></div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><img src="images/produtos/bordados/q1_2.jpg"></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bar em Acrílico</div><br/></div>		
	</div>
		<div id="q1_cycle">
		<div id="q1_imagem"><img src="images/produtos/bordados/q1_3.jpg"></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Bar em Acrílico</div><br/></div>		
	</div>
	
</div>

<div id="q2_passar"><img src="images/produtos/passar.png"></div>
<div id="q2_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q2">
	<div id="q2_cycle">
		<div id="q2_imagem"><img src="images/produtos/bordados/q2_1.jpg"></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Detalhe em resina</div> <br/> </div>		
	</div>

	<div id="q2_cycle">
		<div id="q2_imagem"><img src="images/produtos/nauticos/q2_2.jpg"></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Detalhe em resina</div> <br/> </div>		
	</div>
	
</div>

<div id="q3_passar"><img src="images/produtos/passar.png"></div>
<div id="q3_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q3">
	<div id="q3_cycle">
		<div id="q3_imagem"><img src="images/produtos/nauticos/q3_1.jpg"></div>
		<div id="q3_descricao"><br/><div class="descricao_titulo">Colete Salva Vidas</div> <br/> </div>				
	</div>
<div id="q3_cycle">
		<div id="q3_imagem"><img src="images/produtos/nauticos/q3_2.jpg"></div>
		<div id="q3_descricao"><br/><div class="descricao_titulo">Colete Salva Vidas</div> <br/></div>				
	</div>
	
</div>

</div>






