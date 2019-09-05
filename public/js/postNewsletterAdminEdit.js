$(function(){
    $('#myformEdit').submit(function(e){
        e.preventDefault();
   s
        var myform = document.querySelector('#myformEdit');


        let dados = new FormData(myform);


        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url: route,
            data: dados,
            success: function() {
                executeSweetEdit();

            },
            error : function() {
                executeSweetErrorEdit();

            }


        });



    });

});
