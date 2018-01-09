$(document).ready(function () {
var div = $('#nav');

    $.ajax({
        url: './crud/nav.php',
        data: {acao:'nav'},
        dataType: 'html',
        type: 'post',
        success: function (r) {
            div.empty().append(r);
        },
        error: function () {
            console.log('Erro na página crud;');
        }

    });

});