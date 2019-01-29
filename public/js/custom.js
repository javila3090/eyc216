$('.delete-file').on('click', function(){
    var id = $(this).attr('data-id');
    var theElement = $(this);
    swal({
        title: "¿Estás Seguro?",
        text: "No podrás deshacer esta acción",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sí, estoy seguro",
        closeOnConfirm: true
    },function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                type: 'GET',
                url: '/miembros/delete/file/'+id,
                success: function(data) {
                    if(data.message=='Ok'){
                        swal(
                            '¡Hecho!',
                            'Registro eliminado con éxito',
                            'success'
                        )
                    }
                }
            });
            $(theElement).closest('tr').remove();
        }
    });
});