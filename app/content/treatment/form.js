$(function(){
    //load function
    setTimeout(function (){
        $('#global-loader').fadeOut('slow');
    }, 1000);



    $('#formTreatment').validate({
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

            var data = {};
            if($('#pageId').val() != undefined){
                data = {
                    '_token':$('input[type=hidden][name=_token]').val(),
                    'pageId': $('#pageId').val(),
                    'pageType': $('#pageType').val(),
                    'title': $('#title').val(),
                    'content': CKEDITOR.instances['content'].getData(),
                };
            }else{
                data = {
                    '_token':$('input[type=hidden][name=_token]').val(),
                    'title': $('#title').val(),
                    'pageType': $('#pageType').val(),
                    'content': CKEDITOR.instances['content'].getData(),
                };
            }

            $('#btnsave').prop('disabled', true);
            //console.log('entrei no evento click');
            $.ajax({
                method:"POST",
                url:"/content/treatment/store",
                data:data,
                success: function(response){     
                    msgAlert= '<div class="alert alert-'+response.status+'" role="alert">';
                    msgAlert+= '<button aria-label="Close" class="close" data-dismiss="alert" type="button">';
                    msgAlert+= '<span aria-hidden="true">&times;</span>';
                    msgAlert+= '</button>';
                    msgAlert+= '<strong>Sucesso!</strong> '+response.msg;
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


    if(window.location.href.split('/')[6] == undefined){
        $('.main-content-label').html('Formulário de Cadastramento de Tratamento');
        $('li.breadcrumb-item.active').html('Cadastrar');
    }else{
        $('.main-content-label').html('Formulário de Alteração de Tratamento');
        $('li.breadcrumb-item.active').html('Alterar');
        $.ajax({
            type:'GET',
            dataType: 'json',
            url:'/content/treatment/load/'+window.location.href.split('/')[6],
            success: (response)=>{
                console.log(response);
                $('#formTreatment').append('<input type="hidden" id="pageId" name="pageId" value="'+response.id+'">');
                $('#title').val(response.title);
                CKEDITOR.instances['content'].setData(response.content);

            }
        })
    }
});

