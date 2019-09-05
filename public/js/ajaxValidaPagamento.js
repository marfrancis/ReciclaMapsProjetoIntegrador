$(function(){
    $('#formPagamento').submit(function(e){
        e.preventDefault();
        var route = document.querySelector('#formPagamento').attributes.dataroute.value;
        var formPagamento = document.querySelector('#formPagamento');
        let modo_pagamento = document.querySelector('#modo_pagamento');


        if(modo_pagamento.value == "" ){
            executeSweetError()
            return
        }

        let dados = new FormData(formPagamento);

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

        document.getElementById("formPagamento").reset();

    });





});
