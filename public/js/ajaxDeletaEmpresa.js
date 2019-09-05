function deletaEmpresa(id){


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
            $.ajax({
                        type: 'GET',
                        processData: false,
                        contentType: false,
                        url: '/apagarempresa/'+ id,

                        success: function() {
                            executeSweetDelete();
                            window.location.reload();

                        },
                        error : function() {
                            executeSweetError();
                        }
                    });
        }
      })






};
