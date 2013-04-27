<div id="cycle">
<img src="images/cycle/premiacao1.jpg">
<img src="images/cycle/premiacao2.jpg">
<img src="images/cycle/premiacao3.jpg">
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
<div class="icon_pagina"><img src="images/icones/premiacao.png"></div>
<div class="txt_icon_pagina">PREMIAÇÃO</div>
<div id="txt_introducao">

(premiacao)A Carol Esportes foi inaugurada em 10 de outubro de 1989. Desde então, atua no ramo de presentes. Em 1993, passou a oferecer também serviços de laboratório fotográfico. Já em 1995, começou a comercializar vários tipos de materiais esportivos, em especial, bolas de vôlei, que eram um verdadeiro sucesso de vendas na época.
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
		<div id="q1_imagem"><a href="images/produtos/premiacao/q1_1_g.jpg" title="Modelo M12"><img src="images/produtos/premiacao/q1_1.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">M12</div><br/> Medalha em metal,
impressão a laser e resina.
</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/premiacao/q1_2_g.jpg" title="Modelo M13"><img src="images/produtos/premiacao/q1_2.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">M13</div><br/> Medalha em metal,
impressão a laser e resina.</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/premiacao/q1_3_g.jpg" title="Modelo M14"><img src="images/produtos/premiacao/q1_3.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">M14</div> <br/> Medalha especial gravada
no metal e pintada</div>		
	</div>
		<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/premiacao/q1_4_g.jpg" title="Modelo M14"><img src="images/produtos/premiacao/q1_4.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">M14</div> <br/> Medalha especial gravada
no metal e pintada</div>		
	</div>
</div>

<div id="q2_passar"><img src="images/produtos/passar.png"></div>
<div id="q2_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q2">
	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/premiacao/q2_1_g.jpg" title="Modelo M20"><img src="images/produtos/premiacao/q2_1.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">M20</div> <br/> Medalha personalizada,
recortada em acrílico com
resina.</div>		
	</div>

	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/premiacao/q2_2_g.jpg" title="Modelo M21"><img src="images/produtos/premiacao/q2_2.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">M21</div> <br/> Medalha personalizada,
recortada em acrílico com
resina.</div>		
	</div>
	<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/premiacao/q2_3_g.jpg" title="Modelo M22"><img src="images/produtos/premiacao/q2_3.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">M22</div> <br/> Medalha especial gravada
no metal e pintada</div>		
	</div>
		<div id="q2_cycle">
		<div id="q2_imagem"><a href="images/produtos/premiacao/q2_4_g.jpg" title="Modelo M23"><img src="images/produtos/premiacao/q2_4.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">M23</div> <br/> Medalha em metal,
impressão a laser e resina.</div>		
	</div>
</div>

<div id="q3_passar"><img src="images/produtos/passar.png"></div>
<div id="q3_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q3">
	<div id="q3_cycle">
		<div id="q3_imagem"><a href="images/produtos/premiacao/q3_1_g.jpg" title="Modelo M16"><img src="images/produtos/premiacao/q3_1.jpg"></a></div>
		<div id="q3_descricao"><br/><div class="descricao_titulo">M16</div> <br/> Medalha personalizada,
recortada em acrílico com
resina.</div>				
	</div>

	<div id="q3_cycle">
		<div id="q2_imagem"><a href="images/produtos/premiacao/q3_2_g.jpg" title="Modelo M17"><img src="images/produtos/premiacao/q3_2.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">M17</div> <br/> Medalha personalizada,
recortada em acrílico com
resina.</div>				
	</div>
		<div id="q3_cycle">
		<div id="q2_imagem"><a href="images/produtos/premiacao/q3_3_g.jpg" title="Modelo M18"><img src="images/produtos/premiacao/q3_3.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">M18</div> <br/> Medalha personalizada,
recortada em acrílico com
resina.</div>				
	</div>
		<div id="q3_cycle">
		<div id="q2_imagem"><a href="images/produtos/premiacao/q3_4_g.jpg" title="Modelo M19"><img src="images/produtos/premiacao/q3_4.jpg"></a></div>
		<div id="q2_descricao"><br/><div class="descricao_titulo">M19</div> <br/>Medalha personalizada,
recortada em acrílico com
resina.</div>				
	</div>
</div>

<div id="q4_passar"><img src="images/produtos/passar.png"></div>
<div id="q4_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q4">
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/premiacao/q4_1_g.jpg" title="Modelo M24"><img src="images/produtos/premiacao/q4_1.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Modelo M24</div> <br/> Frente</div>			
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/premiacao/q4_2_g.jpg" title="Modelo M24"><img src="images/produtos/premiacao/q4_2.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">Modelo M24</div> <br/> Verso
</div>				
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/premiacao/q4_3_g.jpg" title="Modelo M25"><img src="images/produtos/premiacao/q4_3.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">M25</div> <br/> Medalha em metal,
impressão a laser e resina.</div>				
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/premiacao/q4_4_g.jpg" title="Modelo M26"><img src="images/produtos/premiacao/q4_4.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">M26</div> <br/> Medalha em metal,
impressão a laser e resina.</div>				
	</div>
</div>


<div id="q5_passar"><img src="images/produtos/passar.png"></div>
<div id="q5_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q5">
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/premiacao/q5_1_g.jpg" title="Modelo T1"><img src="images/produtos/premiacao/q5_1.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">T1</div> <br/> Troféu em acrílico, com resina
e hastes em alumínio. Base
em MDF.</div>		
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/premiacao/q5_2_g.jpg" title="Modelo T2"><img src="images/produtos/premiacao/q5_2.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">T2</div> <br/> Troféu em acrílico, com resina
e pinos de metal. Base em MDF</div>				
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/premiacao/q5_3_g.jpg" title="Modelo T3"><img src="images/produtos/premiacao/q5_3.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">T3</div> <br/> Troféu em acrílico, com resina
e hastes em alumínio. Base
em MDF.</div>				
	</div>
	<div id="q1_cycle">
		<div id="q1_imagem"><a href="images/produtos/premiacao/q5_4_g.jpg" title="Modelo T4"><img src="images/produtos/premiacao/q5_4.jpg"></a></div>
		<div id="q1_descricao"><br/><div class="descricao_titulo">T4</div> <br/> Troféu em acrílico, com resina
e pinos de metal. Base em
MDF.</div>				
	</div>
</div>


<div id="q6_passar"><img src="images/produtos/passar.png"></div>
<div id="q6_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q6">
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/premiacao/q6_1_g.jpg" title="Modelo T9"><img src="images/produtos/premiacao/q6_1.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">T9</div> <br/> Troféu em acrílico, com resina
e pinos de metal. Base em MDF.</div>		
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/premiacao/q6_2_g.jpg" title="Modelo T10"><img src="images/produtos/premiacao/q6_2.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">T10</div> <br/> T10-Troféu em acrílico, com resina
e pinos de metal. Base em MDF.</div>		
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/premiacao/q6_3_g.jpg" title="Modelo T11"><img src="images/produtos/premiacao/q6_3.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">T11</div> <br/> Troféu em acrílico, com resina
e pinos de metal. Base em MDF.</div>		
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/premiacao/q6_4_g.jpg" title="Modelo T12"><img src="images/produtos/premiacao/q6_4.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">T12</div> <br/> Troféu em acrílico, com resina
e pinos de metal. Base em MDF</div>		
	</div>

</div>


<div id="q7_passar"><img src="images/produtos/passar.png"></div>
<div id="q7_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q7">
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/premiacao/q7_1_g.jpg" title="Modelo T5"><img src="images/produtos/premiacao/q7_1.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">T5</div> <br/> Troféu em acrílico com base
em MDF, impressão a laser
e resina.</div>				
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/premiacao/q7_2_g.jpg" title="Modelo T6"><img src="images/produtos/premiacao/q7_2.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">T6</div> <br/> Troféu em acrílico com
impressão a laser e resina.
Base em acrílico com sign.</div>				
	</div>
	<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/premiacao/q7_3_g.jpg" title="Modelo T7"><img src="images/produtos/premiacao/q7_3.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">T7</div> <br/> Troféu em acrílico com base
em MDF, impressão a laser
e resina.</div>				
	</div>
<div id="q6_cycle">
		<div id="q6_imagem"><a href="images/produtos/premiacao/q7_4_g.jpg" title="Modelo T8"><img src="images/produtos/premiacao/q7_4.jpg"></a></div>
		<div id="q6_descricao"><br/><div class="descricao_titulo">T8</div> <br/> Troféu em acrílico com base
em MDF, impressão a laser
e resina.</div>				
	</div>
</div>


<div id="q8_passar"><img src="images/produtos/passar.png"></div>
<div id="q8_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q8">
	<div id="q8_cycle">
		<div id="q8_imagem"><a href="images/produtos/premiacao/q8_1_g.jpg" title="Modelo T13"><img src="images/produtos/premiacao/q8_1.jpg"></a></div>
		<div id="q8_descricao"><br/><div class="descricao_titulo">T13</div> <br/> Troféu em acrílico com
impressão a laser e resina.</div>				
	</div>
	<div id="q8_cycle">
		<div id="q8_imagem"><a href="images/produtos/premiacao/q8_2_g.jpg" title="Modelo T4"><img src="images/produtos/premiacao/q8_2.jpg"></a></div>
		<div id="q8_descricao"><br/><div class="descricao_titulo">T14</div> <br/> Troféu em acrílico com
impressão a laser e resina.</div>				
	</div>
	<div id="q8_cycle">
		<div id="q8_imagem"><a href="images/produtos/premiacao/q8_1_g.jpg" title="Modelo M24"><img src="images/produtos/premiacao/q8_1.jpg"></a></div>
		<div id="q8_descricao"><br/><div class="descricao_titulo">Bolsa Koream</div> <br/> Small Items
por: R$ 109,90
2x de R$ 34,95 sem juros</div>				
	</div>
</div>

<div id="q9_passar"><img src="images/produtos/passar.png"></div>
<div id="q9_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q9">
	<div id="q9_cycle">
		<div id="q9_imagem"><a href="images/produtos/premiacao/q9_1_g.jpg" title="Modelo P1"><img src="images/produtos/premiacao/q9_1.jpg"></a></div>
		<div id="q9_descricao"><br/><div class="descricao_titulo">P1</div> <br/> Placa no estojo com textura aço escovado</div>		
	</div>
	<div id="q9_cycle">
		<div id="q9_imagem"><a href="images/produtos/premiacao/q9_2_g.jpg" title="Modelo P2"><img src="images/produtos/premiacao/q9_2.jpg"></a></div>
		<div id="q9_descricao"><br/><div class="descricao_titulo">P2</div> <br/> Placa no estojo com textura aço escovado</div>				
	</div>
	<div id="q9_cycle">
		<div id="q9_imagem"><a href="images/produtos/premiacao/q9_3_g.jpg" title="Modelo P3"><img src="images/produtos/premiacao/q9_3.jpg"></a></div>
		<div id="q9_descricao"><br/><div class="descricao_titulo">P3</div> <br/> Placa de acrílico no estojo </div>				
	</div>
	<div id="q9_cycle">
		<div id="q9_imagem"><a href="images/produtos/premiacao/q9_4_g.jpg" title="Modelo P4"><img src="images/produtos/premiacao/q9_4.jpg"></a></div>
		<div id="q9_descricao"><br/><div class="descricao_titulo">P4</div> <br/> Placa no estojo com textura aço escovado</div>				
	</div>
</div>

<div id="q10_passar"><img src="images/produtos/passar.png"></div>
<div id="q10_voltar"><img src="images/produtos/voltar.png"></div>
<div id="q10">
	<div id="q10_cycle">
		<div id="q10_imagem"><a href="images/produtos/premiacao/q610_1_g.jpg" title="Modelo P5"><img src="images/produtos/premiacao/q10_1.jpg"></a></div>
		<div id="q10_descricao"><br/><div class="descricao_titulo">P5</div> <br/> Placa em metal com suporte</div>		
	</div>
	<div id="q10_cycle">
		<div id="q10_imagem"><a href="images/produtos/premiacao/q10_2_g.jpg" title="Modelo P6"><img src="images/produtos/premiacao/q10_2.jpg"></a></div>
		<div id="q10_descricao"><br/><div class="descricao_titulo">P6</div> <br/> Placa em metal </div>				
	</div>
	
</div>
<!--
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






