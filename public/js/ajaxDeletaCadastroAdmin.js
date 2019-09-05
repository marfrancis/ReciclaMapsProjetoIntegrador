function deletarAdmin(id){


    Swal.fire({
        title: 'Você tem certeza?',
        text: "Você não poderá reverter isso!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, quero apagar!'
      }).then((result) => {

        if (result.value) {
            $.ajax({
                        type: 'GET',
                        processData: false,
                        contentType: false,
                        url: '/apagarAdmin/'+ id,

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
