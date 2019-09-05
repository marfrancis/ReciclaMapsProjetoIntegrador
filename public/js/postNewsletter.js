$(function(){
    $('#myform2').submit(function(e){
        e.preventDefault();
        var route = document.querySelector('#myform2').attributes.dataroute.value;
        var myform = document.querySelector('#myform2');
        let name = document.querySelector('#nameNews');
        let email = document.querySelector('#emailNews');

        let dados = new FormData(myform2);


        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url: route,
            data: dados,
            success: function() {
                executeSweetNews();

            },
            error : function() {
                executeSweetErrorNews();

            }


        });

        name.value="";
        email.value="";

    });





});
