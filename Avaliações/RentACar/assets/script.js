///setInterval(function(){location.reload(true);}, 10000);

//usar exibirResultado(dv-modal) para abrir a div
function exibirResultado(nomemodal){
    let modal = document.getElementById(nomemodal);
    if (typeof modal == 'undefined' || modal === null){
        return;
    } else{
        modal.style.display = 'Block';
    }
    document.body.style.overflow = 'hidden';
}

//usar fecharModal(dv-modal) para abrir a div
function fecharModal(nomemodal){
    let modal = document.getElementById(nomemodal);
    if (typeof modal == 'undefined' || modal === null){
        return;
    } else{
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

function inserirAuto() {
    let titulo = document.getElementById("titulo").value;
    let descricao = document.getElementById("descricao").value;
    let placa = document.getElementById("placa").value;
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

    xmlHttp.open("GET", "http://localhost/3DAW/Avalia%c3%a7%c3%b5es/RentACar/inserirauto.php?titulo=" + titulo + "&descricao" + descricao + "&placa" + placa + "&imgurl=" + imgurl + "&quantPessoas=" + quantPessoas + "&quantPortas=" + quantPortas + "&cor=" + cor + "&anoF=" + anoF + "&combustivel=" + combustivel + "&tipomarcha=" + tipomarcha + "&arcondicionado=" + arcondicionado + "&preco=" + preco + "&estatus=" + estatus + "&localR=" + localR + "&motorista" + motorista);

    xmlHttp.send();
    console.log(xhttp.responseText);
    location.reload();
    form.reset();
}

function buscarAuto() {
            let pesquisa = document.getElementById("pesquisa").value;

            let xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let obj = JSON.parse(this.responseText);
                    let x = 0;

                    if (obj[x].nome != undefined) {
                        for (x = 0; x < obj.length; x++) {
                            let linha = obj[x];
                            criarLinhaTabela(linha);
                        }
                    }
                }
            }
            
    xmlHttp.open("GET", "http://localhost/3DAW/Avalia%C3%A7%C3%B5es/RentACar/buscarauto.php?pesquisa=" + pesquisa);
    xmlHttp.send();
}

function criarTabela(linha) {

    let tabela = document.getElementById("tabela");
    
    exibirResultado(dv-modal);

    let tr = document.createElement("tr");

    //  coluna nome
    let tdNome = document.createElement("td");
    textnode = document.createTextNode(linha.nome);
    tdNome.appendChild(textnode);
    tr.appendChild(tdNome);

    //  coluna categoria
    let tdCategoria = document.createElement("td");
    textnode = document.createTextNode(linha.categoria);
    tdCategoria.appendChild(textnode);
    tr.appendChild(tdCategoria);

    //  coluna cidade
    let tdCidade = document.createElement("td");
    textnode = document.createTextNode(linha.cidade);
    tdCidade.appendChild(textnode);
    tr.appendChild(tdCidade);

    //  coluna preco
    let tdPreco = document.createElement("td");
    textnode = document.createTextNode(linha.preco);
    tdPreco.appendChild(textnode);
    tr.appendChild(tdPreco);

    //  coluna periodo
    let tdPeriodo = document.createElement("td");
    textnode = document.createTextNode(linha.periodo);
    tdPeriodo.appendChild(textnode);
    tr.appendChild(tdPeriodo);

    
    let input = document.getElementById("busca");
    input.setAttribute("onclick", "location.reload();");

    let envio = document.getElementById("envio");
    envio.setAttribute("onclick", "location.reload();");
}