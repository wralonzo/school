idEstado = 0;
var estados = {
    lista: []
};

$(document).ready(function() {

    $(document).on("click", "#bntGetCompra", function( e ){
        e.preventDefault();
        var idEstado      = $(this).data('id');

        $.post(baseurl+"CompraDirecta/get_compra_id/"+idEstado, function(data){
            var result = JSON.parse(data);
            var content = "";                        
            content += '<input type="text" name="nombre" class="form-control" id="recipient-name" value="'+ result.nombre_forma_compra_directa +'" required> '; 
            content += '<input type="hidden" name="id" class="form-control" id="recipient-name" value="'+ result.id_forma_compra_directa +'">';                 
            $("#divEditarCompra").append(content);            
        });
    });

    $(document).on("click", "#btnCerrarCompra", function () {
        $("#divEditarEstado").empty();
    });
    $(document).on("click", "#iconCerrarCompra", function () {
        $("#divEditarCompra").empty();
    });

    $(document).on("click", "#btnEliminarCompra", function( e ){
            e.preventDefault();//para que no recargue la pagina, no redirecciona con el link

            //nombre tomado del data-nombre
            //var nombre  = $(this).data("nombre");
            var id      = $(this).data('id');
            var nombre  = $(this).data('nombre');
            alertify.confirm('Estas seguro?', 'De querer  eliminar La Compra Directa: '+ nombre,
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
                url : baseurl+'CompraDirecta/delete/' + id,
                dataType: 'json'
            });

            //quita la fila de la tabla
            $("#fila"+id).remove();
            alertify.success('Borrado');

        }

});