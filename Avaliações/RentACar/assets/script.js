setInterval(function(){location.reload(true);}, 10000);

function inserirAuto() {
    let titulo = document.getElementById("titulo").value;
    let descricao = document.getElementById("descricao").value;
    let imgurl = document.getElementById("imgurl").value;
    let quantPessoas = document.getElementById("quantPessoas").value;
    let quantPortas = document.getElementById("quantPortas").value;
    let cor = document.getElementById("cor").value;
    let anoF = document.getElementById("anoF").value;
    let combustivel = document.getElementById("combustivel").value;
    let tipomarcha = document.getElementById("tipomarcha").value;
    let arcondicionado = document.getElementById("arcondicionado").value;
    let preco = document.getElementById("preco").value;
    let estatus = document.getElementById("estatus").value;
    let localR = document.getElementById("localR").value;
    let motorista = document.getElementById("motorista").value;

    let xmlHttp = new XMLHttpRequest();

    xmlHttp.onreadystatechange = function() {
        console.log("mudou status: " + this.readyState);
        if (this.readyState == 4 && this.status == 200) {
            console.log("Chegou resposta: " + this.responseText)
            document.getElementById("msg").innerHTML = this.responseText;
        }
    }

    xmlHttp.open("GET", "http://localhost/3DAW/Avalia%c3%a7%c3%b5es/RentACar/inserirauto.php?titulo=" + titulo + "&descricao" + descricao + "&imgurl=" + imgurl + "&quantPessoas=" + quantPessoas + "&quantPortas=" + quantPortas + "&cor=" + cor + "&anoF=" + anoF + "&combustivel=" + combustivel + "&tipomarcha=" + tipomarcha + "&arcondicionado=" + arcondicionado + "&preco=" + preco + "&estatus=" + estatus + "&localR=" + localR + "&motorista" + motorista);

    xmlHttp.send();
    console.log(xhttp.responseText);
    location.reload();
}