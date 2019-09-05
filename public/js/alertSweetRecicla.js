function executeSweet(message){
    if(!message) {
        message = 'Cadastro realizado com sucesso!';
    }
    return Swal.fire({
        type: 'success',
        text: message,
    });
}

function executeSweetDelete(){
    Swal.fire({
        type: 'success',
        text: 'Registro excluido com sucesso!',
    })
}

function executeSweetError(err, message){
    if(!message) {
        message = 'Preencha todos os campos para enviar o formulário';
    }
    if(err){
        console.log("Error", err);
    }
    Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: message,
    })
}

function executeSweetErrorNews(){
    let nameN = document.getElementById('nameNews');
    let emailN = document.getElementById('emailNews');

    if(nameN.value == "" || emailN.value == ""){
        if(nameN.value == "" && emailN.value == ""){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Preencha os campos',
            })
        }
        else if(nameN.value == ""){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Preencha seu nome',
            })
        } else if(emailN.value == "") {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Preencha seu email',
            })
        }
        } else {
            Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Email já cadastrado',
            })
        }
}


function deleteAllAdmin(){
    Swal.fire({
        title: 'Você tem certeza?',
        text: "Você não poderá reverter isso!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, apague isso!'
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Deletado!',
            'Seu registro foi deletado.',
            'success'
          )
        }
      })

}

function executeSweetEdit(){
    Swal.fire({
        type: 'success',
        text: 'Cadastro alterado com sucesso!',
    })
}

function executeSweetErrorEdit(){
    Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: 'Preencha todos os campos para enviar o formulário',
    })
}

