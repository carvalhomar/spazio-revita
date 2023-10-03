$(document).ready(function() {
    $('.alert-success').hide();

    $('#emailForm').validate({
        rules:{
            name:{
                required:true,
            },
            email:{
                required:true,
                email: true
            },
            subject:{
                required:true
            },
            fone:{
                required:true,
                minlength:14
            },
            message:{
                required:true
            }

        },
        messages:{
            name:{
                required:'Nome é um campo obrigatório!'
            },
            email:{
                required:'E-mail é um campo obrigatório',
                email: 'Por favor insira um e-mail válido!'
            },
            subject:{
                required:'Assunto é um campo obrigatório'
            },
            fone:{
                required:'Fone/Whatsapp é um campo obrigatório',
                number:true,
                minlength: 'Por favor insira um número de telefone válido'
            },
            message:{
                required:'Mensagem é um campo obrigatório'
            }
        },
        submitHandler: function (form) {
            // $("#emailForm").preventDefault();
            // console.log(form);
            $('button[type=submit]').disable();

            $.ajax({
                type: 'POST',
                url: '/send-email',
                data: $(form).serialize(),
                success: function(response) {
                    console.log('respondeu...');
                    $('.alert-success').show('slow');
                    // Faça qualquer outra ação desejada após o envio bem-sucedido
                    $('#name').val('');
                    $('#email').val('');
                    $('#fone').val('');
                    $('#message').val('');

                    setTimeout(()=>{
                        $('button[type=submit]').enable();
                        $('.alert-success').hide();
                    },3000);
                },
                error: function(err) {
                    console.log(err);
                    // Lide com erros de validação ou outros erros, se necessário
                }
            });

            // $.post('/send-email', {
            //     'name': $('#name').val(),
            //     'email': $('#email').val() ,
            //     'subject': $('#subject').val(),
            //     'fone':$('#fone').val(),
            //     'message': $('#message').val(),
            //     '_token':$('input[name="_token"]').val()
            // }, (result)=>{
            //     $('.alert-success').show('slow');
            //
            //
            // });
            // return false; // for demo
        }
    })
   
})