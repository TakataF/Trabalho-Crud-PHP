function deleteProduct(productId) {
    
    if (confirm('Tem certeza que deseja excluir?') == true){
        $.ajax({
            method: "POST",
            url: 'src/pages/deleteProduct.php',
            data: { productId: productId },
            success: function(){
                location.reload()
                alert('Produto Excluido!');
            },
            error: function(){
                alert('Houve um erro na operação, produto não excluído.');
            }
        });
    }
    
}

function changeProduct(elemento){
    console.log(elemento);
    elemento.setAttribute("contenteditable", "false");
    var line = elemento;
    var id = line.children[0].innerHTML;
    var nome = line.children[1].innerHTML;
    var descricao = line.children[2].innerHTML;
    var qtd = line.children[3].innerHTML;
    var preco = line.children[4].innerHTML;

    $.ajax({
        method: "POST",
        url: 'src/pages/changeProduct.php',
        data: { productId: id, productNome: nome, productDesc: descricao, productQtd: qtd, productPreco: preco},
        success: function(){
            location.reload()
        },
        error: function(){
            alert('Houve um erro na operação, produto não alterado.');
        }
    }); 
}

function includeEvents(elemento){
    elemento.setAttribute("contenteditable", "true");
    //elemento.setAttribute("onblur", "changeProduct(this)");
    var rowID = elemento.parentElement.children[0].innerHTML;
    var elementBtnSave = `#btnSave${rowID}`;
    elementBtnSave.trim();
    console.log(elementBtnSave);
    $(elementBtnSave).attr('hidden', false);
}