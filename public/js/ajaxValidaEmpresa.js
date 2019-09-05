$(function(){
    $('#formEmpresa').submit(function(e){
        e.preventDefault();
        var route = document.querySelector('#formEmpresa').attributes.dataroute.value;
        var formEmpresa = document.querySelector('#formEmpresa');
        let nome = document.querySelector('#nome');
        let endereco = document.querySelector('#endereco');
        let numero = document.querySelector('#numero');
        let complemento = document.querySelector('#complemento');
        let cep = document.querySelector('#cep');
        let bairro = document.querySelector('#bairro');
        let estado = document.querySelector('#estado');
        let telefone = document.querySelector('#telefone');
        let site = document.querySelector('#site');
        let latitude = document.querySelector('#latitude');
        let longitude = document.querySelector('#longitude');


        if(nome.value == ""
         || endereco.value == ""
         || numero.value == ""
         || cep.value == ""
         || bairro.value == ""
         || estado.value == ""
         || telefone.value == ""
         || site.value == ""
         || latitude.value == ""
         || longitude.value == "" ){

            executeSweetError()
            return
        }

        let dados = new FormData(formEmpresa);

        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url: route,
            data: dados,
            success: function() {
                executeSweet();
            },
            error : function() {
                executeSweetError();
            }
        });



        document.getElementById("formEmpresa").reset();



    });





});
