idGrupo = 0;

$(document).ready(function() {



    $(document).on("click", "#btnEditarGrupo", function( e ){
        e.preventDefault();
        var idPresupuesto      = $(this).data('id');

        $.get(baseurl+"Grupo/get_grupo_id/"+idPresupuesto, function(data){
            var result = JSON.parse(data);
            var content = "";
            content += '<div class="form-group">';                                  
            content += '<label for="recipient-name" class="col-form-label">Código de Grupo: </label>';
            content += '<input type="text" name="codigo" class="form-control" id="recipient-name" value="'+ result.codigo_grp +'">';
            content += '</div>';

            content += '<div class="form-group">'; 
            content += '<label for="recipient-name" class="col-form-label">Concepto: </label>';
            content += '<input type="text" name="concepto" class="form-control" id="recipient-name" value="'+ result.concepto +'" required> '; 
            content += '</div>';

            content += '<input type="hidden" name="id" class="form-control" id="recipient-name" value="'+ result.id_grp +'">';

            $("#divEditarGrupo").append(content);

        });
    });

    $(document).on("click", "#btnCerrarGrupo", function () {
        $("#divEditarGrupo").empty();
    });
    $(document).on("click", "#iconCerrarGrupo", function () {
        $("#divEditarPeriodo").empty();
    });

    $(document).on("click", "#btnEliminarGrupo", function( e ){
            e.preventDefault();//para que no recargue la pagina, no redirecciona con el link

            //nombre tomado del data-nombre
            //var nombre  = $(this).data("nombre");
            var id      = $(this).data('id');
            var nombre  = $(this).data('nombre');
            alertify.confirm('Estas seguro?', 'De querer  eliminar El Grupo: '+ nombre,
                function(){
                    borrarCurso(id);
                },
                function(){
                    alertify.error('Cancelado')
                });
        });

        function borrarCurso(id){
            //cuando estamos seguros que lo que queremos borrar
            $.ajax({
                type: 'POST',
                url : baseurl+'Grupo/delete/' + id,
                dataType: 'json'
            });

            //quita la fila de la tabla
            $("#fila"+id).remove();
            alertify.success('Borrado');

        }

});