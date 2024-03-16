idEstado = 0;
var estados = {
    lista: []
};
$(document).ready(function() {

    $(document).on("click", "#bntGetUnidad", function( e ){

        $.post(baseurl + 'Dependencia/dependenciaJson/', function (data) {
            var result = JSON.parse(data);
            $.each(result, function (i, val) {
                $("#dependenciaselectUnidad").append('<option value="'+val.id_dpn+'">'+ val.nombre_dpn+'</option>');
            });
        });
    });

    $(document).on("click", "#bntGetUnidad", function( e ){
        e.preventDefault();
        var idEstado      = $(this).data('id');
        $.post(baseurl+"UnidadEjecutora/get_unidad_id/"+idEstado, function(data){
            var result = JSON.parse(data);
            var content = "";  
            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Nombre de la Unidad Ejecutora: </label>';                      
            content += '<input type="text" name="nombre" class="form-control" id="recipient-name" value="'+ result.nombre +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Alias de la Unidad Ejecutora: </label>';                      
            content += '<input type="text" name="alias" class="form-control" id="recipient-name" value="'+ result.alias +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="exampleFormControlSelect2">Dependencias:</label>';
            content += '<select name="dependencia" class="form-control" id="dependenciaselectUnidad">';
            content += '<div id="dependenciaselectUnidad">';
            content += '<option value="'+ result.id_dpn+'">'+result.nombre_dpn+'</option>'
            content += '</div>';
            content += '</select>'
            content += '</div>';

            
            content += '<input type="hidden" name="id" class="form-control" id="recipient-name" value="'+ result.id +'">';                 
            $("#divEditarUnidad").append(content);            
        });
    });

    $(document).on("click", "#btnCerrarUnidad", function () {
        $("#divEditarUnidad").empty();
    });
    $(document).on("click", "#iconCerrarUnidad", function () {
        $("#divEditarUnidad").empty();
    });

    $(document).on("click", "#btnEliminarUnidad", function( e ){
            e.preventDefault();//para que no recargue la pagina, no redirecciona con el link

            //nombre tomado del data-nombre
            //var nombre  = $(this).data("nombre");
            var id      = $(this).data('id');
            var nombre  = $(this).data('nombre');
            alertify.confirm('Estas seguro?', 'De querer  eliminar La Unidad Ejecutora: '+ nombre,
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
                url : baseurl+'UnidadEjecutora/delete/' + id,
                dataType: 'json'
            });

            //quita la fila de la tabla
            $("#fila"+id).remove();
            alertify.success('Borrado');

        }

});
