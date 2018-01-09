$(document).ready(function () {
    $('#form_cadastrar_corrida').submit(function () {
        if ($('#motorista').val() == 0 || $('#passageiro').val() == 0) {
            swal({
                title: 'Atenção',
                text: 'Passageiro ou Motorista não relacionado!',
                icon: 'warning'
            });
        } else {
            $.ajax({
                url: './crud/corrida.php',
                data: $(this).serialize(),
                dataType: 'json',
                type: 'post',
                success: function (r) {
                    if (r['switch']) {
                        swal({
                            title: 'Sucesso',
                            text: 'Corrida cadastrada com sucesso!',
                            icon: 'success'
                        });
                        corrida();
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
        return false;
    });


    function corrida() {
        var div = $('#table');
        $.ajax({
            url: './crud/corrida_table.php',
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

    function passageiro() {
        var div = $('#passageiro');
        $.ajax({
            url: './crud/input.php',
            data: {acao: 'passageiro'},
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

    function motorista() {
        var div = $('#motorista');
        $.ajax({
            url: './crud/input.php',
            data: {acao: 'motorista'},
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
    motorista();
    corrida();
});