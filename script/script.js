// JavaScript Document


window.onload=function(){

    $("#q11 a").lightBox();
    $("#q10 a").lightBox();
    $("#q9 a").lightBox();
    $("#q8 a").lightBox();
    $("#q7 a").lightBox();
    $("#q6 a").lightBox();
    $("#q5 a").lightBox();
    $("#q4 a").lightBox();
    $("#q3 a").lightBox();
    $("#q2 a").lightBox();
    $("#q1 a").lightBox();

    //rotina para pegar variavel via url
function subir(){
     $("html,body").animate({scrollTop: $("#funcionamento").offset().top}, 1);
}

var url2=location.search;
if(url2==""){
   
}
else{
 
var url=location.search.split("?");
if(url=!""){
    //alert("nada");

    var variaveis=location.search.split("?");
    var quebra = variaveis[1].split("=");
    //alert(quebra[1]);
    var pg =quebra[1];
    //alert(pg);
    if(pg=="premiacao" ){
            $('#footer').css({"top":"2440px"});
            $('#footer2').css({"top":"2840px"});
            $('#cartoes').css({"top":"-30px"});
            $('#facebook').css({"top":"2140px"});
            $('#contatos_rodape').css({"top":"2510px"});
            $('#endereco_rodape').css({"top":"2550px"});
            $('#links_rodape').css({"top":"2538px"});
            $('#subir').css({"top":"2470px"});

           
        }
    if(pg=="nauticos" || pg=="acrilico" || pg=="fitness" || pg=="redes" || pg=="bordado" || pg=="treinador"){/* -400   matriz 1x4 */ 
            $('#footer').css({"top":"1840px"});
            $('#footer2').css({"top":"2240px"});
            $('#cartoes').css({"top":"-30px"});
            $('#facebook').css({"top":"1540px"});
            $('#contatos_rodape').css({"top":"1910px"});
            $('#endereco_rodape').css({"top":"1950px"});
            $('#links_rodape').css({"top":"1938px"});
            $('#subir').css({"top":"1870px"});
         
    }

    if(pg=="grafica"){/* -400 */

            $('#footer').css({"top":"2440px"});
            $('#footer2').css({"top":"2840px"});
            $('#cartoes').css({"top":"-30px"});
            $('#facebook').css({"top":"2140px"});
            $('#contatos_rodape').css({"top":"2510px"});
            $('#endereco_rodape').css({"top":"2550px"});
            $('#links_rodape').css({"top":"2538px"});
            $('#subir').css({"top":"2470px"});

           
    }
    if(pg=="brindes"){/* +300 duas linhas */

        $('#footer').css({"top":"2140px"});
        $('#footer2').css({"top":"2540px"});
        $('#cartoes').css({"top":"-30px"});
        $('#facebook').css({"top":"1840px"});
        $('#contatos_rodape').css({"top":"2210px"});
        $('#endereco_rodape').css({"top":"2250px"});
        $('#links_rodape').css({"top":"2238px"});
        $('#subir').css({"top":"2170px"});
            
    }
 
}




}
/*





var variaveis=location.search.split("?");
var quebra = variaveis[1].split("=");
//alert(quebra[1]);
var pg =quebra[1];
//alert(pg);
if(pg==0){
    document.getElementById("footer").style.top = 2440;
    document.getElementById("footer2").style.top = 2840;
    document.getElementById("cartoes").style.top = -30;
    document.getElementById("facebook").style.top = 2140;
    //document.getElementById("facebook").style.left = 0;
    document.getElementById("contatos_rodape").style.top = 2510;
    document.getElementById("endereco_rodape").style.top = 2550;
    document.getElementById("links_rodape").style.top = 2538;
    document.getElementById("subir").style.top = 2470;
}
else{
    alert("home");
}*/
//subir();


		//alert("teste");penalty,adidas,speedo,puma,nike,realtex.seller,treinador,pretorian,milã,tronadon,umbro.
$("#descer").click(function(){
        $("html,body").animate({scrollTop: $("#q1").offset().top}, 2000);
    
                              });
$("#subir").click(function(){
        $("html,body").animate({scrollTop: $("#funcionamento").offset().top}, 2000);
    
                              });
$('#q1').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q1_voltar',

        next:    '#q1_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };


$('#q2').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q2_voltar',

        next:    '#q2_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };

    $('#q3').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q3_voltar',

        next:    '#q3_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });

    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };
$('#q4').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q4_voltar',

        next:    '#q4_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };

$('#q5').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q5_voltar',

        next:    '#q5_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };
$('#q6').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q6_voltar',

        next:    '#q6_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };

    $('#q7').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q7_voltar',

        next:    '#q7_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };

    $('#q8').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q8_voltar',

        next:    '#q8_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };

        $('#q9').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q9_voltar',

        next:    '#q9_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });




    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };

 $('#q10').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q10_voltar',

        next:    '#q10_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });
        



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };
     $('#q11').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q11_voltar',

        next:    '#q11_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });
        



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };

        $('#q12').cycle({

        fx:      'scrollHorz',

        timeout:  0,

        prev:    '#q12_voltar',

        next:    '#q12_passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };


$(".maquinas").click(function(){

        $(".box_maquinas").slideToggle(200);
    
                              });

$("#loading_image").fadeOut(500);
    $("#loading").fadeOut(1000);
/*$('#q2, #q3, #q4, #q5,#q6,#q7,#q8').cycle({ 


    fx: 'scrollHorz' 


});

*/


 
						   }