idEstado = 0;
var estados = {
    lista: []
};
$(document).ready(function() {

    $(document).on("click", "#bntGetInsumo", function( e ){

        $.post(baseurl + 'Renglon/RenglonJSON/', function (data) {
            var result = JSON.parse(data);
            $.each(result, function (i, val) {
                $("#selectGrupos").append('<option value="'+val.id+'">'+ val.codigo+'</option>');
            });
        });
    });

    $(document).on("click", "#bntGetInsumo", function( e ){
        e.preventDefault();
        var idEstado      = $(this).data('id');
        $.post(baseurl+"Insumo/get_insumo_id/"+idEstado, function(data){
            var result = JSON.parse(data);
            var content = "";  
            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Codigo Insumo: </label>';                      
            content += '<input type="text" name="codigo" class="form-control" id="recipient-name" value="'+ result.codigo +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Característica del Insumo: </label>';                      
            content += '<input type="text" name="caracteristica" class="form-control" id="recipient-name" value="'+ result.caracteristica +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Presentación del Insumo: </label>';                      
            content += '<input type="text" name="presentacion" class="form-control" id="recipient-name" value="'+ result.presentacion +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Cantidad Unidad de Medida del Insumo: </label>';                      
            content += '<input type="text" name="cantidad" class="form-control" id="recipient-name" value="'+ result.cantidad_um +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Código de presentación del Insumo: </label>';                      
            content += '<input type="text" name="codigoPresentacion" class="form-control" id="recipient-name" value="'+ result.codigo_presentacion +'" required> '; 
            content += '</div>';


            content += '<div class="form-group">';
            content += '<label for="exampleFormControlSelect2">Sub Grupos:</label>';
            content += '<select name="renglon" class="form-control" id="selectGrupos">';
            content += '<div id="selectGrupos">';
            content += '<option value="'+ result.idRenglon+'">'+result.codigoRenglon+'</option>'
            content += '</div>';
            content += '</select>'
            content += '</div>';

            
            content += '<input type="hidden" name="id" class="form-control" id="recipient-name" value="'+ result.id +'">';                 
            $("#divEditarInsumo").append(content);            
        });
    });

    $(document).on("click", "#btnCerrarInsumo", function () {
        $("#divEditarInsumo").empty();
    });
    $(document).on("click", "#iconCerrarInsumo", function () {
        $("#divEditarInsumo").empty();
    });

    $(document).on("click", "#btnEliminarInsumo", function( e ){
            e.preventDefault();//para que no recargue la pagina, no redirecciona con el link

            //nombre tomado del data-nombre
            //var nombre  = $(this).data("nombre");
            var id      = $(this).data('id');
            var nombre  = $(this).data('nombre');
            alertify.confirm('Estas seguro?', 'De querer  eliminar El Insumo: '+ nombre,
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
                url : baseurl+'Insumo/delete/' + id,
                dataType: 'json'
            });

            //quita la fila de la tabla
            $("#fila"+id).remove();
            alertify.success('Borrado');

        }

});