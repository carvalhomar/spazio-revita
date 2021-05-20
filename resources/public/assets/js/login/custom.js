$(function(){
    $('form').on('submit', function(e){
        e.preventDefault();
        console.log('cliquei no entrar');

        $.ajax({
            url:'/login/access',
            type:'POST',
            dataType:'json',
            data: $('form').serialize(),
            success:function(response){

                if(response == 'success'){
                    window.location.href = '/content';
                }else{
                    var msgAlert;
                    msgAlert= '<div class="alert alert-danger" role="alert">';
                    msgAlert+= '<button aria-label="Close" class="close" data-dismiss="alert" type="button">';
                    msgAlert+= '<span aria-hidden="true">&times;</span>';
                    msgAlert+= '</button>';
                    msgAlert+= '<strong>Atenção!</strong> Dados não cadastrados!';
                    msgAlert+= '</div>';

                    $('.msg').append(msgAlert).fadeIn('slow');

                    setTimeout(function (){
                        $('.alert-danger').fadeOut('slow');
                    }, 1000);
                }
            }
        });
    });


});
