
var EntrarPainel = document.getElementById("EntrarPainel");
var CadastroSite = document.getElementById("CadastroSite");
var Indicador = document.getElementById("Indicador");


function Entrar()
{
    EntrarPainel.style.transform = "translatex(300px)";
    CadastroSite.style.transform = "translatex(300px)";
    Indicador.style.transform = "translatex(0px)";
}


function Cadastro()
{
    CadastroSite.style.transform = "translatex(0px)";
    EntrarPainel.style.transform = "translatex(0px)";
    Indicador.style.transform = "translatex(100px)";
}


