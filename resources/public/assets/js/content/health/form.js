$(function(){
    //load function
    setTimeout(function (){
        $('#global-loader').fadeOut('slow');
    }, 1000);

    $('#formHealth').validate({
        rules: {
            title: 'required',
            content: 'required'
        },
        messages: {
            title: 'o campo Título é obrigatório',
            content: 'o campo Conteúdo é obrigatório'
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
                url:"/content/treatment/store",
                data:$('#formHealth').serialize(),
                success: function(response){

                    msgAlert= '<div class="alert alert-'+response.status+'" role="alert">';
                    msgAlert+= '<button aria-label="Close" class="close" data-dismiss="alert" type="button">';
                    msgAlert+= '<span aria-hidden="true">&times;</span>';
                    msgAlert+= '</button>';
                    msgAlert+= '<strong>Sucesso!</strong>'+response.msg;
                    msgAlert+= '</div>';

                    $('.msg').append(msgAlert).fadeIn('slow');
                    setTimeout(function(){
                        $('.alert.alert-success').fadeOut();
                        $('#btnsave').prop('disabled', false);
                    }, 2000);
                }
            });
        }

    });


    if(window.location.href.split('/')[6] == undefined){
        $('.main-content-label').html('Formulário de Cadastramento de Conteúdo Saúde');
        $('li.breadcrumb-item.active').html('Cadastrar');
    }else{
        $('.main-content-label').html('Formulário de Alteração de Conteúdo de Saúde');
        $('li.breadcrumb-item.active').html('Alterar');
        $.ajax({
            type:'GET',
            dataType: 'json',
            url:'/content/treatment/load/'+window.location.href.split('/')[6],
            success: (response)=>{

                $('#formHealth').append('<input type="hidden" id="pageId" name="pageId" value="'+response.id+'">');
                $('#title').val(response.title);
                $('#content').val(response.content);

            }
        })
    }
});

