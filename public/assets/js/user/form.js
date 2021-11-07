$(function(){

    //load function
    setTimeout(function(){
        $('#global-loader').fadeOut('slow');
    }, 1000);

    //load Select Dynamic User Type list
    $.ajax({
        type:"GET",
        url:'/usertype',
        dataType: 'json'
    }).done((data)=>{
        for (i = 0; data.length > i; i++ ){
            $('#usertype').append('<option value="'+data[i].id+'">'+data[i].type+'</option>');
        }
    });

    //submit user form
    // $('#formUser').on('submit', function(e){
    //     e.preventDefault();

        $('#formUser').validate({

            rules: {
                name: 'required',
                email: {
                    required: true,
                    email: true
                },
                user:  {
                    required: true,
                    minlength: 5,
                },
                usertype: 'required',
                password: {
                    required: true,
                    minlength: 5,
                },
                confirm: {
                    required:true,
                    minlength: 5,
                    equalTo: '#password'
                }
            },
            messages: {
                name: 'o campo Nome é obrigatório',
                email: 'o campo E-mail é obrigatório',
                user: {
                    required:'o campo Usuário é obrigatório',
                    minlength:'Usuário deve no mín. ter 5 caracteres'
                },
                password: {
                    required:'O campo Senha é obrigatório',
                    minlength:'Senha deve no mín. ter 5 caracteres'
                },
                confirm: {
                    required:'O campo Conf. de Senha é obrigatório',
                    equalTo:'A Conf. deve ser igual ao campo Senha'
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-valid').addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid').addClass('is-valid');
            },
            submitHandler:function(form) {
                $('#btnsave').prop('disabled', true);
                $.ajax({
                    method:"POST",
                    url:"/user/store",
                    data:$('#formUser').serialize(),
                    success: function(response){

                        msgAlert= '<div class="alert alert-'+response.status+'" role="alert">';
                        msgAlert+= '<button aria-label="Close" class="close" data-dismiss="alert" type="button">';
                        msgAlert+= '<span aria-hidden="true">&times;</span>';
                        msgAlert+= '</button>';
                        msgAlert+= '<strong>Sucesso!</strong>'+response.msg;
                        msgAlert+= '</div>';

                        $('.msg').append(msgAlert).fadeIn('slow');
                        setTimeout(function(){
                            $('.msg').fadeOut();
                            $('#btnsave').prop('disabled', false);
                        }, 2000);
                    }
                });


            }

        });


    // });

    //load user data on the form

    if(window.location.href.split('/')[5] == undefined){
        $('.main-content-label').html('Formulário de Cadastramento de Usuário');
        $('li.breadcrumb-item.active').html('Cadastrar');
    }else{
        $('.main-content-label').html('Formulário de Alteração de Usuário');
        $('li.breadcrumb-item.active').html('Alterar');
        $.ajax({
            type:'GET',
            dataType: 'json',
            url:'/user/load/'+window.location.href.split('/')[5],
            success: (response)=>{

                $('#formUser').append('<input type="hidden" id="userId" name="userId" value="'+response.id+'">');
                $('#name').val(response.name);
                $('#user').val(response.user);
                $('#email').val(response.email);
                $('#password').val(response.password);
                $('#confirm').val(response.password);
                $('#usertype option[value='+response.usertype_id+']').attr('selected','selected');

            }
        })
    }
});


