$(document).ready(function () {
    $('#nasc').mask('00/00/0000');
    $('#cpf').mask('000.000.000-00');


    $('#form_cadastrar_passageiro').submit(function () {
        if ($('#sexo').val() == 0) {
            alert('Favor selecionar o sexo');
        } else {
            var retorno = $('#nasc').val().split('/');
            if (retorno[0] > 31) {
                swal({
                    title: 'Atenção',
                    text: 'Dia superior a 31.',
                    icon: 'warning'
                });
            } else {
                if (retorno[1] > 12) {
                    swal({
                        title: 'Atenção',
                        text: 'Mês superior a 12.',
                        icon: 'warning'
                    });
                } else {
                    $.ajax({
                        url: './crud/passageiro.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        type: 'post',
                        success: function (r) {
                            if (r['switch']) {
                                swal({
                                    title: 'Sucesso',
                                    text: 'Passageiro cadastrado com sucesso!',
                                    icon: 'success'
                                });
                                passageiro();
                            } else {
                                swal({
                                    title: 'Erro',
                                    text: 'Erro interno!',
                                    icon: 'error'
                                });
                            }
                        },
                        error: function () {
                            console.log('Erro na página crud;');
                        }

                    });
                }
            }
        }
        return false;
    });


    function passageiro() {
        var div = $('#table');
        $.ajax({
            url: './crud/passageiro_table.php',
            data: {acao: 'table'},
            dataType: 'html',
            type: 'post',
            success: function (r) {
                div.empty().append(r);
            },
            error: function () {
                console.log('Erro na página crud;');
            }

        });
    }



    passageiro();
});