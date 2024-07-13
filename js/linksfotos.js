document.addEventListener('DOMContentLoaded', function() {
    var imagens = [...document.getElementsByTagName('img')];
    imagens.forEach(function(imagem) {
        imagem.addEventListener('click', function() {
            var link = imagem.getAttribute('data-link');
            if (link) {
                window.location.href = link;
            }
        });
    });
});