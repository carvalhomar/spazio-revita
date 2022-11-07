$(()=>{
    $('.alert-success').hide();

    $('form').validate({
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
                required:true
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
                required:'E-mail é um campo obrigatório'
            },
            subject:{
                required:'Assunto é um campo obrigatório'
            },
            fone:{
                required:'Fone/Whatsapp é um campo obrigatório',
                number:true
            },
            message:{
                required:'Mensagem é um campo obrigatório'
            }
        },
        submitHandler: function (form) { // for demo
            // form.preventDefault();
            $.post('/send-email', {
                'name': $('#name').val(),
                'email': $('#email').val() ,
                'subject': $('#subject').val(),
                'fone':$('#fone').val(),
                'message': $('#message').val(),
                '_token':$('input[name="_token"]').val()
            }, (result)=>{
                $('.alert-success').show('slow');
                $('#name').val('');
                $('#email').val('');
                $('#fone').val('');
                $('#message').val('');

                setTimeout(()=>{
                    $('.alert-success').hide();
                },3000);
            });
            // return false; // for demo
        }
    })
   
})