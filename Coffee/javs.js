

var gramsOax = 11.5;
var gramsVer = 10.7;
var gramsPue = 12;

var boton = document.getElementById("boton");

boton.addEventListener("click",calculoDeCucharas);

function calculoDeCucharas(){
    var caja = document.getElementById("mil");
    var g = document.getElementById("grams");
    var gramos = caja.value * g.value / 200;

    var gramscuch= 0;
    if(document.getElementById("checkOaxaca").checked){
        gramscuch = gramsOax;
        gramsgran = .16;
    }else if(document.getElementById("checkVeracruz").checked){
        gramscuch = gramsVer;
        gramsgran = .15;
    }else if(document.getElementById("checkPuebla").checked){
        gramscuch = gramsPue;
        gramsgran = .13;
    }

    var cuchMed = Math.floor(2*gramos / gramscuch);

    var gramsFalt = gramos - cuchMed*gramscuch/2;

    var granos = Math.ceil(gramsFalt / gramsgran);


    document.getElementById("respuesta").innerHTML = cuchMed/2 + " cucharadas y " + granos + " granos";


}