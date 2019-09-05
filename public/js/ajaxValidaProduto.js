$(function(){
    $('#formProdutos').submit(function(e){
        e.preventDefault();
        var route = document.querySelector('#formProdutos').attributes.dataroute.value;
        var formProdutos = document.querySelector('#formProdutos');
        let nome = document.querySelector('#nome');
        let descricao = document.querySelector('#descricao');
        let preco = document.querySelector('#preco');
        let quantidade_estoque = document.querySelector('#quantidade_estoque');
        let categoria = document.querySelector('#categorias_id');
        let imagem = document.querySelector('#imagem');


        if(nome.value == "" && descricao.value == "" && preco.value == "" && quantidade_estoque.value == "" && categoria.value == "" && imagem.value == "" ){
            executeSweetError()
            return
        }

        let dados = new FormData(formProdutos);

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

        document.getElementById("formProdutos").reset();

    });





});
