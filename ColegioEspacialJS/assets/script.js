function enviarForm() { //(pNome, pMat, pEmail, pCpf) {
    let pNome = document.getElementById("nome").value;
    let pMat = document.getElementById("matricula").value;
    let pEmail = document.getElementById("email").value;
    let pCpf = document.getElementById("cpf").value;
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
        console.log("mudou status: " + this.readyState);
        if (this.readyState == 4 && this.status == 200) {
            console.log("Chegou resposta: " + this.responseText)
            document.getElementById("msg").innerHTML = this.responseText;
        }
    }
    xmlHttp.open("GET", "http://localhost/3DAW/ColegioEspacialJS/inserir?nome=" + pNome +
    "&email=" + pEmail + "&cpf=" + pCpf + "&matricula=" + pMat);
    xmlHttp.send();
    console.log("Requisição Enviada");
}