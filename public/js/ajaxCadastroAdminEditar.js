$(function(){
    $('#formAdminEditar').submit(function(e){
        e.preventDefault();
   
        var form = document.querySelector('#formAdminEditar');
        let route = form.attributes.action.value;

        let data = new FormData(form);


        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url: route,
            data: data,
            success: function() {
                executeSweetEdit();

            },
            error : function() {
                executeSweetErrorEdit();

            }


        });



    });

});
