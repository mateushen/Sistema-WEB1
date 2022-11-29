$(document).ready(function () {
    var botao = $('.bt');
    var dropDown = $('.ul-menu');
    var img = document.querySelector('.icon-menu')
    var num = 2;

    botao.on('click', function (event) {
        dropDown.stop(true, true).slideToggle();
        event.stopPropagation();
        if (num == 1) {
            img.setAttribute('src', 'visao/img/icon-menu.png');
        } else if (num == 2) {
            img.setAttribute('src', 'visao/img/icon-fechar.png');
        }
        num = (num % 2) + 1;
    });
});