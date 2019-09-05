$(function(){
    function validate(form) {
        let passwordObj = form.password;
        let password = passwordObj.value;
        if(password != "") {
            let passwordConfirmObj = form.passwordConfirm;
            let passwordConfirm = passwordConfirmObj.value;

            if(password != passwordConfirm) {
                passwordObj.focus();
                throw new Error("A senha informada e a confirmação devem ser iguais");
            }
        }
    }

    $('#formEditarPerfil').submit(function(e){
        e.preventDefault();

        let form = e.target;
        try {
            validate(form);
        }
        catch(err) {
            executeSweetError(err, err.message);
            return;
        }

        let route = form.attributes.action.value;
        let data = new FormData(form);

        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url: route,
            data: data,
            success: function(user) {
                executeSweet(`O usuario "${user.name}" foi editado com sucesso!`)
                .then(() => document.location.href=route);
            },
            error : function() {
                executeSweetErrorEdit();
            }
        });
    });
});
