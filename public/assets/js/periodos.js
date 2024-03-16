idPresupuesto = 0;
var estados = {
    lista: []
};
$(document).ready(function() {

    $("#bntGetPeriodo").click(function( e ){
        var idPresupuesto      = $(this).data('id');
        $.ajax({
            type: "POST",
            url: baseurl + 'Estado/getEstadosJSON',
            success: function(response) {
                let dataItems = JSON.parse(response)
                console.log(dataItems.length);
                if(dataItems.length < 1){
                    $('#selectPeriodo').append('<option value="">ingrese un estado</option>');
                }else{
                    jQuery.each(dataItems, function(index, item) {
                        $('#selectPeriodo').append('<option value=' + item.id_est + '>' + item.nombre_est + '</option>');
                    });
                }
                // console.log(response);
            }
        });


        $.post(baseurl+"PeriodoPresupuestal/get_Periodo_id/"+idPresupuesto, function(data){
            var result = JSON.parse(data);
            var content = "";
            content += '<div class="form-group">';                                  
            content += '<label for="recipient-name" class="col-form-label">Alias del Periodo Presupuestal: </label>';
            content += '<input type="text" name="aliasPresupuesto" class="form-control" id="recipient-name" value="'+ result.alias_prd_prs +'">';
            content += '</div>';

            content += '<div class="form-group">'; 
            content += '<label for="recipient-name" class="col-form-label">Descripcion del Periodo Presupuestal: </label>';
            content += '<input type="text" name="descripcionPresupuesto" class="form-control" id="recipient-name" value="'+ result.descripcion_prd_prs +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
                content += '<label for="exampleFormControlSelect2">Estado del Periodo Presupuestal:</label>';
                content += '<select id="selectPeriodo" name="estados" class="form-control">';
                    content += '<div id="selectPeriodo">';
                        content += '<option selected value="'+result.id_est+'" >-----'+result.nombre_est+'-----</option>';
                    content += '</div>';
                content += '</select>';
            content += '</div>';

            content += '<input type="hidden" name="idPresupuesto" class="form-control" id="recipient-name" value="'+ result.id_prd_prs +'">';

            $("#divEditarPeriodo").append(content);
        });
        $.ajax({
            type: "POST",
            url: baseurl + 'Estado/getEstadosJSON',
            success: function(response) {
                let dataItems = JSON.parse(response)
                console.log(dataItems.length);
                if(dataItems.length < 1){
                    $('#selectPeriodo').append('<option value="">ingrese un estado</option>');
                }else{
                    jQuery.each(dataItems, function(index, item) {
                        $('#selectPeriodo').append('<option value=' + item.id_est + '>' + item.nombre_est + '</option>');
                    });
                }
                // console.log(response);
            }
        });
    });

    $(document).on("click", "#btnCerrarPeriodo", function () {
        $("#divEditarPeriodo").empty();
        $("#selectPeriodo").empty();

    });
    $(document).on("click", "#iconCerrarPeriodo", function () {
        $("#divEditarPeriodo").empty();
    });

    $(document).on("click", "#btnEliminarPeriodo", function( e ){
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
                url : baseurl+'PeriodoPresupuestal/delete/' + id,
                dataType: 'json'
            });

            //quita la fila de la tabla
            $("#fila"+id).remove();
            alertify.success('Borrado');

        }

});