//teste
function funcao1()
{
alert("Eu sou um alert!");
}

//teste de jquery
$(document).ready(function () {

    $('#botao1').click(function () {

    alert('clicou no botão');

    return false;

    });
});


//slick courusel
$(document).ready(function(){
  $('.mySlider').slick({
  	slidesToShow: 2,
  	slidesToScroll: 1,
  	autoplay: true,
    autoplaySpeed: 2000,
    dots:true,


  });
});