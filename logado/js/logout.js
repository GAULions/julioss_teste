$(document).ready(function () {
    $('#nav').on('click', '.log', function () {
        $.ajax({
            url: './crud/logout.php',
            data: {acao: 'table'},
            dataType: 'html',
            type: 'post',
            success: function (r) {
                window.location.href = "../index.php";
            },
            error: function () {
                console.log('Erro na página crud;');
            }

        });
    });
});