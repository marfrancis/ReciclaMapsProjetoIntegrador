$(function(){
    $('#formCategoria').submit(function(e){
        e.preventDefault();
        var route = document.querySelector('#formCategoria').attributes.dataroute.value;
        var formCategoria = document.querySelector('#formCategoria');
        let categoria = document.querySelector('#nome_categoria');


        if(categoria.value == "" ){
            executeSweetError()
            return
        }

        let dados = new FormData(formCategoria);

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

        document.getElementById("formCategoria").reset();

    });





});
