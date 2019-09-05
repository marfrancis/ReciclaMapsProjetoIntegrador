$(function(){
    $('#formMaterial').submit(function(e){
        e.preventDefault();
        var route = document.querySelector('#formMaterial').attributes.dataroute.value;
        var formMaterial = document.querySelector('#formMaterial');
        let material = document.querySelector('#tipoMaterial');


        if(material.value == "" ){
            executeSweetError()
            return
        }

        let dados = new FormData(formMaterial);

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

        document.getElementById("formMaterial").reset();

    });





});
