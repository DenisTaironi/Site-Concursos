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

//form login
$("#btnLogin").click(function(event) {

    //Fetch form to apply custom Bootstrap validation
    var form = $("#formLogin")

    if (form[0].checkValidity() === false) {
      event.preventDefault()
      event.stopPropagation()
    }
    
    form.addClass('was-validated');
  });