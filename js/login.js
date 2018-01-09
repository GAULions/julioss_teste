$(document).ready(function () {
    $('#login_').submit(function () {

        $.ajax({
            url: 'crud_login/login.php',
            data: $(this).serialize(),
            dataType: 'json',
            type: 'post',
            success: function (r) {
                if(r['consulta']){
                    window.location.href = "logado/index.php";
                }
            },
            error: function () {
                console.log('Erro na página crud;');
            }

        });
        return false;
    });
});