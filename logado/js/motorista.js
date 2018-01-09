$(document).ready(function () {
    $('#nasc').mask('00/00/0000');
    $('#cpf').mask('000.000.000-00');
    $('#form_cadastrar_motorista').submit(function () {
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
                        url: './crud/motorista.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        type: 'post',
                        success: function (r) {
                            if (r['switch']) {
                                swal({
                                    title: 'Sucesso',
                                    text: 'Motorista cadastrado com sucesso!',
                                    icon: 'success'
                                });
                                motorista();
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


    function motorista() {
        var div = $('#table');
        $.ajax({
            url: './crud/motorista_table.php',
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

    function ativar(id) {
        $.ajax({
            url: './crud/motorista_ac.php',
            data: {acao: 'ativar', id: id},
            dataType: 'json',
            type: 'post',
            success: function (r) {
                motorista();
            },
            error: function () {
                console.log('Erro na página crud;');
            }

        });
    }

    function desativar(id) {
        $.ajax({
            url: './crud/motorista_ac.php',
            data: {acao: 'desativar', id: id},
            dataType: 'json',
            type: 'post',
            success: function (r) {
                motorista();
            },
            error: function () {
                console.log('Erro na página crud;');
            }

        });
    }

    $('#table').on('click', '.desativar', function () {

        swal("Têm certeza que quer desativar?", {
            buttons: {
                Sim: 'Sim',
                Não: 'Não',
            },
        })
                .then((value) => {
                    switch (value) {

                        case "Sim":
                            desativar($(this).val());
                            break;

                        case "Não":
                            break;

                        default:
                            swal("DEFAULT!");
                    }
                });

    });

    $('#table').on('click', '.ativar', function () {

        swal("Têm certeza que quer ativar?", {
            buttons: {
                Sim: 'Sim',
                Não: 'Não',
            },
        })
                .then((value) => {
                    switch (value) {

                        case "Sim":
                            ativar($(this).val());
                            break;

                        case "Não":
                            break;

                        default:
                            swal("DEFAULT!");
                    }
                });

    });
    motorista();
});