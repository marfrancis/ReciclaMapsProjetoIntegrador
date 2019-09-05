$(function(){
    $('#formCadastroAdmin').submit(function(e){
        e.preventDefault();
        
        let form = document.querySelector('#formCadastroAdmin');
        let route = form.attributes.action.value;
        let data = new FormData(form);

        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url: route,
            data: data,
            success: function() {
                form.reset();
                executeSweet('Cadastro administrador realizado com sucesso!');
            },
            error : function(err) {
                executeSweetError(err, 'Falha ao cadastrar! Verifique os dados e tente novamente.');
            }
        });
    });
});
