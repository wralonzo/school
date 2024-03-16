idEstado = 0;
var estados = {
    lista: []
};
$(document).ready(function() {

    $(document).on("click", "#bntGetRenglon", function( e ){

        $.post(baseurl + 'Grupo/grupoJSON/', function (data) {
            var result = JSON.parse(data);
            $.each(result, function (i, val) {
                $("#selectGrupos").append('<option value="'+val.id_grp+'">'+ val.codigo_grp+'</option>');
            });
        });
    });

    $(document).on("click", "#bntGetRenglon", function( e ){
        e.preventDefault();
        var idEstado      = $(this).data('id');
        $.post(baseurl+"Renglon/get_renglon_id/"+idEstado, function(data){
            var result = JSON.parse(data);
            var content = "";  
            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Codigo Renglón: </label>';                      
            content += '<input type="text" name="codigo" class="form-control" id="recipient-name" value="'+ result.codigo +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Concepto Del Renglón: </label>';                      
            content += '<input type="text" name="concepto" class="form-control" id="recipient-name" value="'+ result.concepto +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="exampleFormControlSelect2">Sub Grupos:</label>';
            content += '<select name="grupo" class="form-control" id="selectGrupos">';
            content += '<div id="selectGrupos">';
            content += '<option value="'+ result.idGrupo+'">'+result.codigoGrupo+'</option>'
            content += '</div>';
            content += '</select>'
            content += '</div>';

            
            content += '<input type="hidden" name="id" class="form-control" id="recipient-name" value="'+ result.id +'">';                 
            $("#divEditarRenglon").append(content);            
        });
    });

    $(document).on("click", "#btnCerrarRenglon", function () {
        $("#divEditarRenglon").empty();
    });
    $(document).on("click", "#iconCerrarRenglon", function () {
        $("#divEditarRenglon").empty();
    });

    $(document).on("click", "#btnEliminarRenglon", function( e ){
            e.preventDefault();//para que no recargue la pagina, no redirecciona con el link

            //nombre tomado del data-nombre
            //var nombre  = $(this).data("nombre");
            var id      = $(this).data('id');
            var nombre  = $(this).data('nombre');
            alertify.confirm('Estas seguro?', 'De querer  eliminar El Renglon: '+ nombre,
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
                url : baseurl+'Renglon/delete/' + id,
                dataType: 'json'
            });

            //quita la fila de la tabla
            $("#fila"+id).remove();
            alertify.success('Borrado');

        }

});