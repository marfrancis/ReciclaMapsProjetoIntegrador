$(function(){
    $('#formPostagem').submit(function(e){
        e.preventDefault();
        var route = document.querySelector('#formPostagem').attributes.dataroute.value;
        var formPostagem = document.querySelector('#formPostagem');
        let data = document.querySelector('#data');
        let titulo = document.querySelector('#titulo');
        let texto = document.querySelector('#ck_editor');
        let imagem = document.querySelector('#imagem');

        if(data.value == "" || titulo.value == "" || texto.value == "" || imagem.value == "" ){
            executeSweetError()
            return
        }

        let dados = new FormData(formPostagem);

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

        document.getElementById("formPostagem").reset();



    });





});
