$(function(){
    $('form').on('submit', function(e){
        e.preventDefault();
        console.log('cliquei no submit área restrita');
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
                    msgAlert+= '<strong>Atenção!</strong><br/> Dados não cadastrados!';
                    msgAlert+= '</div>';

                    $('.msg').append(msgAlert).fadeIn('slow');

                    setTimeout(function (){
                        $('.alert-danger').fadeOut('slow');
                    }, 2000);
                }
            }
        });
    });


});
