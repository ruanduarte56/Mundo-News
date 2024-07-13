
function enviarFormulario(event) {
  event.preventDefault();
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 400) {
          var res=document.getElementById('resposta_erros')
          res.innerHTML='dados invalidos';
          res.style.backgroundColor='red';
      }
      if (this.readyState == 4 && this.status == 200) {
        var res=document.getElementById('resposta_erros');
        res.innerHTML='enviado com sucesso! obrigado';
        res.style.backgroundColor='green'
    }
  };

  xhttp.open("POST", "/contato/envio", true);
  var formData = new FormData(event.target);
  xhttp.send(formData);
}