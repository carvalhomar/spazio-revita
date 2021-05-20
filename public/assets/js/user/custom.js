$(function(){
    //load function
    setTimeout(function (){
        $('#global-loader').fadeOut('slow');
    }, 1000);

    //load datatables
    $('#usertable').DataTable({
        "oLanguage": {
            "sProcessing": "Processando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "Não foram encontrados resultados",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando de 0 até 0 de 0 registros",
            "sInfoFiltered": "",
            "sInfoPostFix": "",
            "pagingType": "full_numbers",
            "sSearch": "Buscar:",
            "sUrl": "",
            "oPaginate": {
                "sFirst":    "Primeiro",
                "sPrevious": "Anterior",
                "sNext":     "Seguinte",
                "sLast":     "Último"
            }
        },
    });

    //Remove line in dataTables
    remove = function(item) {
        swal({
                title: "Tem certeza?",
                text: "O registro será removido permanentemente!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn btn-danger",
                confirmButtonText: "Sim, remove o item!",
                closeOnConfirm: false
            },
            function(){
                swal("Removido!", "Registro removido com sucesso.", "success");
                var tr = $(item).closest('tr');

                $.ajax({
                    type:"post",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{ id:$(item).attr("data-id") },
                    url:'/user/remove/'+$(item).attr("data-id"),
                    success: function(response){
                        console.log(response);

                        tr.fadeOut(400, function() {
                            tr.fadeOut('slow');
                            return false;
                        });
                    }
                });


            });


    }

});
