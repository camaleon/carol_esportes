<div id="cycle">
<img src="images/cycle/brindes1.jpg">
<img src="images/cycle/brindes2.jpg">

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
<div class="icon_pagina"><img src="images/icones/brindes.png"></div>
<div class="txt_icon_pagina">BRINDES</div>
<div id="txt_introducao">

Qual o objetivo do brinde?<br><br>

Na disputa de mercado acirrada dos tempos atuais, o brinde fará a diferença

para que a sua empresa se destaque perante os concorrentes, conquistando

mais espaço e se solidificando no mercado.

O investimento que uma empresa faz para captar um novo cliente é bem maior

do que gastaria para mantê-lo.<br><br>

O BRINDE:<br>

Além de promover, o brinde serve para abrir ou fechar um ciclo de negócio

entre a empresa e o cliente.

O brinde sempre deve ser visto como um meio de propaganda barato e

duradouro.<br><br>

QUAL A IMPORTÂNCIA NA ESCOLHA DO PRODUTO?
<br>
A determinação do produto certo é fundamental para o sucesso da campanha.

A Carol Esportes tem um grande catálogo de produtos e brindes certos para

sua empresa, fale com um de nossos vendedores.
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
		
		<div id="q1_imagem"><a href="images/produtos/brindes/q1_1_g.jpg" title="Chaveiro de Acrílico"><img src="images/produtos/brindes/q1_1.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Chaveiro de Acrílico</div><br/> Chaveiro com marca de sua empresa
</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/brindes/q1_2_g.jpg" title="Chaveiro de Acrílico"><img src="images/produtos/brindes/q1_2.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Chaveiro de Acrílico</div><br/> Chaveiro com marca de sua empresa</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/brindes/q1_3_g.jpg" title="Chaveiro de Acrílico"><img src="images/produtos/brindes/q1_3.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Chaveiro de Acrílico</div> <br/> Chaveiro de vários clubes
no metal e pintada</div>		
	</div>
		<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/brindes/q1_4_g.jpg" title="Chaveiro de Acrílico"><img src="images/produtos/brindes/q1_4.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Chaveiro de Acrílico</div> <br/> Chaveiro com marca de sua empresa</div>		
	</div>
</div>

<div id="q2_passar"><img src="images/produtos/passar.png"></div>
<div id="q2_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q2">
	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/brindes/q2_1_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q2_1.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Chaveiro de Metal</div> <br/> Chaveiro de Clubes</div>		
	</div>

	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/brindes/q2_2_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q2_2.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Chaveiro de Metal</div> <br/> Chaveiro de Clubes</div>		
	</div>
	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/brindes/q2_3_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q2_3.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">Chaveiro de Metal</div> <br/> Chaveiro de Clubes</div>		
	</div>
</div>

<div id="q3_passar"><img src="images/produtos/passar.png"></div>
<div id="q3_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q3">
	<div id="q3_cycle">
		<div id="q3_imagem"><a href="images/produtos/brindes/q3_1_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q3_1.jpg"></a></div>
		<div id="q3_descricao"><br/><div class="descricao_titulo">Íma</div> <br/> Ímas de geladeira e Porta-chaves</div>				
	</div>
	<div id="q3_cycle">
		<div id="q3_imagem"><a href="images/produtos/brindes/q3_2_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q3_2.jpg"></a></div>
		<div id="q3_descricao"><br/><div class="descricao_titulo">Marcador de página</div> <br/> </div>				
	</div>
	<div id="q3_cycle">
		<div id="q3_imagem"><a href="images/produtos/brindes/q3_3_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q3_3.jpg"></a></div>
		<div id="q3_descricao"><br/><div class="descricao_titulo">Marcador de página</div> <br/> </div>				
	</div>

	
</div>

<div id="q4_passar"><img src="images/produtos/passar.png"></div>
<div id="q4_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q4">
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/brindes/q4_1_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q4_1.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Caneca de Acrílico</div> <br/> Caneca de Acrílico personalizada</div>			
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/brindes/q4_2_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q4_2.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Caneca de Acrílico</div> <br/> Caneca de Acrílico personalizada
</div>				
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/brindes/q4_3_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q4_3.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Caneca de porcelana</div> <br/> Caneca de porcelana personalizada
</div>				
	</div>
	
</div>


<div id="q5_passar"><img src="images/produtos/passar.png"></div>
<div id="q5_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q5">
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/brindes/q5_1_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q5_1.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Cubo de acrilico</div> <br/> Cubo de acrílico personalizado </div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/brindes/q5_2_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q5_2.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Cubo de acrilico</div> <br/> Cubo de acrílico personalizado </div>	
	</div>
	
</div>


<div id="q6_passar"><img src="images/produtos/passar.png"></div>
<div id="q6_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q6">
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q6_1_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q6_1.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Relógio</div> <br/> Relógio de parede com marca de sua empresa</div>		
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q6_2_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q6_2.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Relógio</div> <br/> Relógio de Mesa</div>		
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q6_3_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q6_3.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Relógio</div> <br/> Relógio de parede personalizado</div>		
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q6_4_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q6_4.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Relógio</div> <br/> Relógio de parede personalizado</div>		
	</div>
		<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q6_5_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q6_5.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Relógio</div> <br/> Relógio de Mesa</div>		
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q6_6_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q6_6.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Relógio</div> <br/> Relógio de Mesa</div>		
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q6_7_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q6_7.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Relógio</div> <br/> Relogio com Recorte personalizado</div>		
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q6_8_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q6_8.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Relógio</div> <br/> Relogio de parede com Recorte personalizado</div>		
	</div>
</div>


<div id="q7_passar"><img src="images/produtos/passar.png"></div>
<div id="q7_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q7">
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q7_1_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q7_1.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Squeeze</div> <br/> Squeeze Personalizada</div>				
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q7_2_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q7_2.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Squeeze</div> <br/> Squeeze Personalizada</div>				
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q7_3_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q7_3.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Squeeze</div> <br/> Squeeze Personalizada</div>				
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/brindes/q7_4_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/brindes/q7_4.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">Squeeze</div> <br/> Squeeze Personalizada</div>				
	</div>
	
</div>


<div id="q8_passar"><img src="images/produtos/passar.png"></div>
<div id="q8_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q8">
	<div id="q8_cycle">
		<div id="q8_imagem"><a href="images/produtos/brindes/q8_1_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/esportes/q1_1.jpg"></a></div>
		<div id="q8_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q8_cycle">
		<div id="q8_imagem"><a href="images/produtos/brindes/q8_2_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/esportes/q1_2.jpg"></a></div>
		<div id="q8_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q8_cycle">
		<div id="q8_imagem"><a href="images/produtos/brindes/q8_3_g.jpg" title="Chaveiro de Metal"><img src="images/produtos/esportes/q1_3.jpg"></a></div>
		<div id="q8_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
</div>
<!--
<div id="q9_passar"><img src="images/produtos/passar.png"></div>
<div id="q9_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q9">
	<div id="q9_cycle">
		<div id="q9_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q9_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>
	<div id="q9_cycle">
		<div id="q9_imagem"><img src="images/produtos/esportes/q1_2.jpg"></div>
		<div id="q9_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q9_cycle">
		<div id="q9_imagem"><img src="images/produtos/esportes/q1_3.jpg"></div>
		<div id="q9_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
</div>

<div id="q10_passar"><img src="images/produtos/passar.png"></div>
<div id="q10_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q10">
	<div id="q10_cycle">
		<div id="q10_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q10_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>
	<div id="q10_cycle">
		<div id="q10_imagem"><img src="images/produtos/esportes/q1_2.jpg"></div>
		<div id="q10_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q10_cycle">
		<div id="q10_imagem"><img src="images/produtos/esportes/q1_3.jpg"></div>
		<div id="q10_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
</div>

<div id="q11_passar"><img src="images/produtos/passar.png"></div>
<div id="q11_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q11">
	<div id="q11_cycle">
		<div id="q11_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q11_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>		
	</div>
	<div id="q11_cycle">
		<div id="q10_imagem"><img src="images/produtos/esportes/q1_2.jpg"></div>
		<div id="q10_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q11_cycle">
		<div id="q11_imagem"><img src="images/produtos/esportes/q1_3.jpg"></div>
		<div id="q11_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
</div>

<div id="q12_passar"><img src="images/produtos/passar.png"></div>
<div id="q12_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q12">
	<div id="q12_cycle">
		<div id="q12_imagem"><img src="images/produtos/esportes/q1_1.jpg"></div>
		<div id="q12_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q12_cycle">
		<div id="q12_imagem"><img src="images/produtos/esportes/q1_2.jpg"></div>
		<div id="q12_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
	<div id="q12_cycle">
		<div id="q12_imagem"><img src="images/produtos/esportes/q1_3.jpg"></div>
		<div id="q12_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
</div>



-->
</div>






