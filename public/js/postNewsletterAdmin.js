$(function(){
    $('#myform3').submit(function(e){
        e.preventDefault();
        var route = document.querySelector('#myform3').attributes.dataroute.value;
        var myform = document.querySelector('#myform3');
        let name = document.querySelector('#name');
        let email = document.querySelector('#email');

        let dados = new FormData(myform3);


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

        name.value="";
        email.value="";

    });





});
