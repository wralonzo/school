idEstado = 0;
var estados = {
    lista: []
};
$(document).ready(function() {


    $(document).on("click", "#bntGetDetalle", function( e ){
        e.preventDefault();
        var idEstado      = $(this).data('id');
        $.post(baseurl+"DetallePacc/get_detallePacc_id/"+idEstado, function(data){
            var result = JSON.parse(data);
            var content = "";  
            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Codigo Renglón: </label>';                      
            content += '<input type="text" name="descripcion" class="form-control" id="recipient-name" value="'+ result.descripcion +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="exampleFormControlSelect2">Paccs:</label>';
            content += '<select name="pacc" class="form-control" id="selectPaccs">';
            content += '<div id="selectPaccs">';
            content += '<option value="'+ result.idPacc+'">'+result.idPacc+'</option>'
            content += '</div>';
            content += '</select>'
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="exampleFormControlSelect2">Forma de Compra Directa:</label>';
            content += '<select name="compra" class="form-control" id="selectCompras">';
            content += '<div id="">';
            content += '<option value="'+ result.idCompra+'">'+result.nombreCompra+'</option>'
            content += '</div>';
            content += '</select>'
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="exampleFormControlSelect2">Renglones:</label>';
            content += '<select name="renglon" class="form-control" id="selectRenglones">';
            content += '<div id="selectRenglones">';
            content += '<option value="'+ result.idRenglon+'">'+result.codigoRenglon+'</option>'
            content += '</div>';
            content += '</select>'
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="exampleFormControlSelect2">Insumos:</label>';
            content += '<select name="insumo" class="form-control" id="selectInsumos">';
            content += '<div id="selectInsumos">';
            content += '<option value="'+ result.idInsumo+'">'+result.codigoInsumo+'</option>'
            content += '</div>';
            content += '</select>'
            content += '</div>';

            
            content += '<input type="hidden" name="id" class="form-control" id="recipient-name" value="'+ result.id +'">';                 
            $("#divEditarDetalle").append(content);            
        });
    });
    $(document).on("click", "#bntGetDetalle", function( e ){

        $.post(baseurl + 'Pacc/paccJson/', function (data) {
            var result = JSON.parse(data);
            $.each(result, function (i, val) {
                $("#selectPaccs").append('<option value="'+val.id+'">'+ val.id+'</option>');
            });
        });
    });

    $(document).on("click", "#bntGetDetalle", function( e ){

        $.post(baseurl + 'CompraDirecta/getCompraDirectaJSON/', function (data) {
            var result = JSON.parse(data);
            $.each(result, function (i, val) {
                $("#selectCompras").append('<option value="'+val.id_forma_compra_directa+'">'+ val.nombre_forma_compra_directa+'</option>');
            });
        });
    });

    $(document).on("click", "#bntGetDetalle", function( e ){

        $.post(baseurl + 'Renglon/RenglonJson/', function (data) {
            var result = JSON.parse(data);
            $.each(result, function (i, val) {
                $("#selectRenglones").append('<option value="'+val.id+'">'+ val.codigo+'</option>');
            });
        });
    });

    $(document).on("click", "#bntGetDetalle", function( e ){

        $.post(baseurl + 'Insumo/insumoJson/', function (data) {
            var result = JSON.parse(data);
            $.each(result, function (i, val) {
                $("#selectInsumos").append('<option value="'+val.id+'">'+ val.codigo+'</option>');
            });
        });
    });

    $(document).on("click", "#btnCerrarDetalle", function () {
        $("#divEditarDetalle").empty();
    });
    $(document).on("click", "#iconCerrarDetalle", function () {
        $("#divEditarDetalle").empty();
    });

    $(document).on("click", "#btnEliminarDetalle", function( e ){
            e.preventDefault();//para que no recargue la pagina, no redirecciona con el link

            //nombre tomado del data-nombre
            //var nombre  = $(this).data("nombre");
            var id      = $(this).data('id');
            var nombre  = $(this).data('nombre');
            alertify.confirm('Estas seguro?', 'De querer  eliminar El Detalle de PACC: '+ nombre,
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
                url : baseurl+'DetallePacc/delete/' + id,
                dataType: 'json'
            });

            //quita la fila de la tabla
            $("#fila"+id).remove();
            alertify.success('Borrado');

        }

});