function exibirOcultar(id) {
    var display = document.getElementById(id).style.display;
    if (display == "none") {
        document.getElementById(id).style.display = 'block';
        document.getElementById('botao01').value = 'Ocultar';
    } else {
        document.getElementById(id).style.display = 'none';
        document.getElementById('botao01').value = 'Exibir';
               
    }
}

function exibirOcultar2(id) {
    var display = document.getElementById(id).style.display;
    if (display == "none") {
        document.getElementById(id).style.display = 'block';
        document.getElementById('botao02').value = 'Ocultar';
    } else {
        document.getElementById(id).style.display = 'none';
        document.getElementById('botao02').value = 'Exibir';
               
    }
}
function marcaDesmarca(caller) {
    var checks = document.querySelectorAll('input[type="checkbox"]');    
    checks.forEach(c => c.checked = (c == caller) );
  }