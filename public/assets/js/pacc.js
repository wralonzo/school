idEstado = 0;
var estados = {
    lista: []
};
$(document).ready(function() {

    $(document).on("click", "#bntGetPacc", function( e ){

        $.post(baseurl + 'Dependencia/dependenciaJson/', function (data) {
            var result = JSON.parse(data);
            $.each(result, function (i, val) {
                $("#dependenciaselect").append('<option value="'+val.id+'">'+ val.alias+'</option>');
            });
        });
    });
    $(document).on("click", "#bntGetPacc", function( e ){

        $.post(baseurl + 'PeriodoPresupuestal/periodoJSON/', function (data) {
            var result = JSON.parse(data);
            $.each(result, function (i, val) {
                $("#periodoselect").append('<option value="'+val.id_prd_prs+'">'+ val.alias_prd_prs+'</option>');
            });
        });
    });
    $(document).on("click", "#bntGetPacc", function( e ){
        e.preventDefault();
        var idEstado      = $(this).data('id');
        $.post(baseurl+"Pacc/get_pacc_id/"+idEstado, function(data){
            var result = JSON.parse(data);
            var content = "";  

            content += '<div class="form-group">';
            content += '<label for="exampleFormControlSelect2">Período Presupuestal:</label>';
            content += '<select name="periodo" class="form-control" id="periodoselect">';
            content += '<div id="periodoselect">';
            content += '<option value="'+ result.idPeriodo+'">'+result.aliasPeriodo+'</option>'
            content += '</div>';
            content += '</select>'
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="exampleFormControlSelect2">Dependencias:</label>';
            content += '<select name="dependencia" class="form-control" id="dependenciaselect">';
            content += '<div id="dependenciaselect">';
            content += '<option value="'+ result.idDependencia+'">'+result.aliasDependencia+'</option>'
            content += '</div>';
            content += '</select>'
            content += '</div>';

            
            content += '<input type="hidden" name="id" class="form-control" id="recipient-name" value="'+ result.id +'">';                 
            $("#divEditarPacc").append(content);            
        });
    });

    $(document).on("click", "#btnCerrarPacc", function () {
        $("#divEditarPacc").empty();
    });
    $(document).on("click", "#iconCerrarPacc", function () {
        $("#divEditarPacc").empty();
    });

    $(document).on("click", "#btnEliminarPacc", function( e ){
            e.preventDefault();//para que no recargue la pagina, no redirecciona con el link

            //nombre tomado del data-nombre
            //var nombre  = $(this).data("nombre");
            var id      = $(this).data('id');
            var nombre  = $(this).data('nombre');
            alertify.confirm('Estas seguro?', 'De querer  eliminar El Pacc: '+ nombre,
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
                url : baseurl+'Pacc/delete/' + id,
                dataType: 'json'
            });

            //quita la fila de la tabla
            $("#fila"+id).remove();
            alertify.success('Borrado');

        }

});