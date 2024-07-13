function enviarnewslatter(event) {
    event.preventDefault();

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 400) {
                var res = document.getElementById('res_new');
                res.innerHTML = 'Email invalido';
                res.style.backgroundColor = 'red';
                res.style.padding = '3px';
                res.style.color = 'white';
            } else if (this.status == 200) {
                var res = document.getElementById('res_new');
                res.innerHTML = 'Enviado com sucesso! Obrigado';
                res.style.backgroundColor = 'green';
                res.style.padding = '3px';
                res.style.color = 'white';
            }
        }
    };
  
    xhttp.open("POST", "/contato/newslatter", true);
    var formData = new FormData(event.target);
    xhttp.send(formData);
}
