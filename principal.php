<div id="cycle">
<img src="images/cycle/home1.jpg">
<img src="images/cycle/home2.jpg">
<img src="images/cycle/home3.jpg">
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
</script>
<div class="icon_pagina"><img src="images/icones/home.png"></div>
<div class="txt_icon_pagina">HOME</div>
<div id="txt_introducao">

A Carol Esportes foi inaugurada em 10 de outubro de 1989. Desde então, atua no ramo de presentes. Em 1993, passou a oferecer também serviços de laboratório fotográfico. Já em 1995, começou a comercializar vários tipos de materiais esportivos, em especial, bolas de vôlei, que eram um verdadeiro sucesso de vendas na época.

 O aprimoramento no ramo esportivo levou a empresa a ser referência na produção de medalhas, o que tornou necessária a aquisição de modernas máquinas de impressão.

A experiência adquirida nesta área fez com que um novo desafio fosse explorado: a confecção de produtos gráficos em geral, inclusive lonas e adesivos.  Hoje somos uma das poucas empresas no Brasil a utilizar, sem terceirização, resina, adesivo e acrílico com corte a laser em produtos impressos. Um outro setor em que nos tornamos referência no mercado foi a produção e instalação de redes de proteção, inicialmente para quadras e campos de futebol e, atualmente, também para condomínios residenciais e apartamentos. 

Mas não paramos por aí, estamos novamente retomando a fabricação de camisas esportivas com o diferencial de trabalhar, em conjunto, com sublimação e bordado.

Com mais de 20 anos de atuação em diferentes áreas a Carol Esportes se orgulha em ter conquistado a confiança de seus clientes através de bom atendimento, serviços inovadores, investimento em tecnologia e valorização de seus colaboradores.onquistado a confiança de seus clientes através de bom atendimento, serviços inovadores, investimento em tecnologia e valorização de seus colaboradores.
<br>
<br>
Lojas<br>
<div class="maquinas">Parque de Máquinas</div>
<div class="box_maquinas">
<img src="images/maquinas/m1.jpg">
</div>
</div>
