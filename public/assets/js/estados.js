idEstado = 0;
var estados = {
    lista: []
};
var baseurl = 'http://192.168.0.101/inde-insumos/index.php/';
$(document).ready(function() {

    $(document).on("click", "#bntGetEstado", function( e ){
        e.preventDefault();
        var idEstado      = $(this).data('id');
        var url = baseurl+"Estado/get_estado_id/"+idEstado;
        $.post(baseurl+"Estado/get_compra_id/"+idEstado, function(data){
            var result = JSON.parse(data);
            var content = "";                        
            content += '<input type="text" name="nombreEstado" class="form-control" id="recipient-name" value="'+ result.nombre_est +'" required> '; 
            content += '<input type="hidden" name="idEstado" class="form-control" id="recipient-name" value="'+ result.id_est +'">';                 
            $("#divEditarEstado").append(content);            
        });
    });

    $(document).on("click", "#btnCerrar", function () {
        $("#divEditarEstado").empty();
    });
    $(document).on("click", "#iconCerrar", function () {
        $("#divEditarEstado").empty();
    });

    $(document).on("click", "#btnEliminarEstado", function( e ){
            e.preventDefault();//para que no recargue la pagina, no redirecciona con el link

            //nombre tomado del data-nombre
            //var nombre  = $(this).data("nombre");
            var id      = $(this).data('id');
            var nombre  = $(this).data('nombre');
            alertify.confirm('Estas seguro?', 'De querer  eliminar El estado: '+ nombre,
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
                url : baseurl+'Estado/delete/' + id,
                dataType: 'json'
            });

            //quita la fila de la tabla
            $("#fila"+id).remove();
            alertify.success('Borrado');

        }

});