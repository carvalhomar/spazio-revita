$(function(){
    //load function
    setTimeout(function (){
        $('#global-loader').fadeOut('slow');
    }, 1000);

    $.ajax({
        method:"GET",
        url:"/content/categories/load",
        success:function (response) {

            var options = '<option value="">-Selecione-</option>';

            $.each (response, function(i, obj){
                options+= '<option value="'+ obj.id +'">'+ obj.name +'</option>';
            });

            $('#category_id').html(options);
        }
    });



    $('#formBlog').validate({
        rules: {
            title: 'required',
            category_id: 'required',
            description: 'required'
        },
        messages: {
            title: 'o campo Título é obrigatório',
            category_id: 'o campo Categoria é obrigatório',
            description: 'o campo Conteúdo é obrigatório'
        },
        highlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        submitHandler:function(form) {
            var data = {};
            if($('#blogId').val() != undefined){
                data = {
                    '_token':$('input[type=hidden][name=_token]').val(),
                    'blogId':$('#blogId').val(),
                    'title': $('#title').val(),
                    'category_id':$('#category_id').val(),
                    'description': CKEDITOR.instances['description'].getData(),
                };
            }else{
                data = {
                    '_token':$('input[type=hidden][name=_token]').val(),
                    'title': $('#title').val(),
                    'description': CKEDITOR.instances['description'].getData(),
                    'category_id':$('#category_id').val(),
                };
            }



            $('#btnsave').prop('disabled', true);

            $.ajax({
                method:"POST",
                url:"/content/blog/store",
                data:data,
                success: function(response){

                   let msgAlert= '<div class="alert alert-'+response.status+'" role="alert">';
                    msgAlert+= '<button aria-label="Close" class="close" data-dismiss="alert" type="button">';
                    msgAlert+= '<span aria-hidden="true">&times;</span>';
                    msgAlert+= '</button>';
                    msgAlert+= '<strong>Sucesso!</strong>'+response.msg;
                    msgAlert+= '</div>';

                    $('.msg').append(msgAlert).fadeIn('slow');
                    setTimeout(function(){
                        $('.msg').fadeOut().remove();
                        $('#btnsave').prop('disabled', false);
                    }, 2000);
                }
            });


        }

    });


    if(window.location.href.split('/')[6] == undefined){
        $('.main-content-label').html('Formulário de Cadastramento de Blog');
        $('li.breadcrumb-item.active').html('Cadastrar');
    }else{
        $('.main-content-label').html('Formulário de Alteração de Blog');
        $('li.breadcrumb-item.active').html('Alterar');
        $.ajax({
            type:'GET',
            dataType: 'json',
            url:'/content/blog/load/'+window.location.href.split('/')[6],
            success: (response)=>{

                $('#formBlog').append('<input type="hidden" id="blogId" name="blogId" value="'+response.id+'">');
                $('#title').val(response.title);
                $('#category_id').val(response.category_id);
                CKEDITOR.instances['description'].setData(response.description);
            }
        })
    }
});

