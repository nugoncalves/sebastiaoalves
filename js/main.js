irParaDivInicial();

function irParaDivInicial(){
    document.getElementById("divInicial").scrollIntoView();
}

function menuLivroTimeOut(){
    setTimeout(abrirMenuLivro, 1000);
}

function abrirMenuLivro(){
    $("#menuLivros").dropdown("toggle");
}
