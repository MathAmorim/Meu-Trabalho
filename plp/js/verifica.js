function pronto() {
    var btn = document.getElementById("pronto");
    var resp = document.getElementById("resp").firstChild;
    var x = btn.value;
    var y = resp.nodeValue;
    puxa(x,y);
}

function puxa(valor,resposta) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("respcheck").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../game/verifica.php?q=" + valor+ "&w=" + resposta, true);
    xhttp.send();
    
}