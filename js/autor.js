let windowSize = window.innerWidth;
let autorTxt = document.getElementById("autorTXT").innerText;

if(windowSize<596){
    document.getElementById("autorTXT").innerText = autorTxt.substring(0, 800) + ' [...]';
    document.getElementById("autorVerMais").classList.replace("d-none", "d-block");
}

window.addEventListener('resize', getWindowSize);

function getWindowSize(){
    windowSize = window.innerWidth;
    if(windowSize<596){
        document.getElementById("autorTXT").innerText = autorTxt.substring(0, 800) + ' [...]';
        document.getElementById("autorVerMais").classList.replace("d-none", "d-block");
    }
    else{
        document.getElementById("autorTXT").innerText = autorTxt;
        document.getElementById("autorVerMais").classList.replace("d-block", "d-none");
    }
    console.log(windowSize);
}

function autorTxtMostrar(){
    if(document.getElementById("btn-autorVerMais").innerHTML == "Mostrar Mais"){
        document.getElementById("autorTXT").innerText = autorTxt;
        document.getElementById("btn-autorVerMais").innerText = "Mostrar Menos";
    }
    else{
        document.getElementById("autorTXT").innerText = autorTxt.substring(0, 800) + ' [...]';
        document.getElementById("btn-autorVerMais").innerText = "Mostrar Mais";
    }
}