idEstado = 0;
var estados = {
    lista: []
};
$(document).ready(function() {

    $(document).on("click", "#bntGetDependencia", function( e ){

        $.post(baseurl + 'Dependencia/dependenciaJson/', function (data) {
            var result = JSON.parse(data);
            $.each(result, function (i, val) {
                $("#dependenciaselect").append('<option value="'+val.id+'">'+ val.nombre+'</option>');
            });
        });
    });

    $(document).on("click", "#bntGetDependencia", function( e ){
        e.preventDefault();
        var idEstado      = $(this).data('id');
        $.post(baseurl+"Dependencia/get_Dependencia_id/"+idEstado, function(data){
            var result = JSON.parse(data);
            var content = "";  
            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Nombre de la Dependencia: </label>';                      
            content += '<input type="text" name="nombre" class="form-control" id="recipient-name" value="'+ result.nombre +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Alias de la Dependencia: </label>';                      
            content += '<input type="text" name="alias" class="form-control" id="recipient-name" value="'+ result.alias +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="exampleFormControlSelect2">Dependencias:</label>';
            content += '<select name="dependencia" class="form-control" id="dependenciaselect">';
            content += '<div id="dependenciaselect">';
            content += '<option value="'+ result.id_dpn+'">'+result.dpnnombre+'</option>'
            content += '</div>';
            content += '</select>'
            content += '</div>';

            
            content += '<input type="hidden" name="id" class="form-control" id="recipient-name" value="'+ result.id +'">';                 
            $("#divEditarDependencia").append(content);            
        });
        
    });

    $(document).on("click", "#btnCerrarDependencia", function () {
        $("#divEditarDependencia").empty();
    });
    $(document).on("click", "#iconCerrarDependencia", function () {
        $("#divEditarDependencia").empty();
    });

    $(document).on("click", "#btnEliminarDependencia", function( e ){
            e.preventDefault();//para que no recargue la pagina, no redirecciona con el link

            //nombre tomado del data-nombre
            //var nombre  = $(this).data("nombre");
            var id      = $(this).data('id');
            var nombre  = $(this).data('nombre');
            alertify.confirm('Estas seguro?', 'De querer  eliminar La Dependencia: '+ nombre,
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
                url : baseurl+'Dependencia/delete/' + id,
                dataType: 'json'
            });

            //quita la fila de la tabla
            $("#fila"+id).remove();
            alertify.success('Borrado');

        }

});