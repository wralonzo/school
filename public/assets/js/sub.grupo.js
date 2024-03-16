idEstado = 0;
var estados = {
    lista: []
};
$(document).ready(function() {

    // $(document).on("click", "#selectGrupos", function( e ){

    //     $.post(baseurl + 'Grupo/grupoJSON/', function (data) {
    //         // var result = JSON.parse(data);
    //         console.log(data);
    //         $.each(data, function (i, val) {
    //             $("#selectGrupos").append('<option value="'+val.id_grp+'">'+ val.codigo_grp+'</option>');
    //         });
    //     });
    // });

    $(document).on("click", "#bntGetSubGrupo", function( e ){
        e.preventDefault();

        // $(document).on("click", "#selectGrupos", function( e ){

            $.post(baseurl + 'Grupo/grupoJSON/', function (data) {
                $("#selectGrupos").empty();
                var result = JSON.parse(data);
                console.log(result);
                $.each(result, function (i, val) {
                    $("#selectGrupos").append('<option value="'+val.id_grp+'">'+ val.concepto+'</option>');
                });
            });
        // });

        var idEstado      = $(this).data('id');
        $.post(baseurl+"SubGrupo/get_SubGrupo_id/"+idEstado, function(data){
            var result = JSON.parse(data);
            console.log(result);
            var content = "";  
            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Codigo Del Sub Grupo: </label>';                      
            content += '<input type="text" name="codigo" class="form-control" id="recipient-name" value="'+ result.codigo +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="recipient-name" class="col-form-label">Concepto Del Sub Grupo: </label>';                      
            content += '<input type="text" name="concepto" class="form-control" id="recipient-name" value="'+ result.concepto_sub_grp +'" required> '; 
            content += '</div>';

            content += '<div class="form-group">';
            content += '<label for="exampleFormControlSelect2">Grupos:</label>';
            content += '<select name="grupo" class="form-control" id="selectGrupos">';
            content += '<div id="selectGrupos">';
            content += '<option selected value="'+ result.id_grp+'">'+result.concepto+'</option>'
            content += '</div>';
            content += '</select>'
            content += '</div>';

            
            content += '<input type="hidden" name="id" class="form-control" id="recipient-name" value="'+ result.id +'">';                 
            $("#divEditarSubGrupo").append(content);            
        });
    });

    $(document).on("click", "#btnCerrarSubGrupo", function () {
        $("#divEditarSubGrupo").empty();
    });
    $(document).on("click", "#iconCerrarSubGrupo", function () {
        $("#divEditarSubGrupo").empty();
    });

    $(document).on("click", "#btnEliminarSubGrupo", function( e ){
            e.preventDefault();//para que no recargue la pagina, no redirecciona con el link

            //nombre tomado del data-nombre
            //var nombre  = $(this).data("nombre");
            var id      = $(this).data('id');
            var nombre  = $(this).data('nombre');
            alertify.confirm('Estas seguro?', 'De querer  eliminar El Sub Grupo: '+ nombre,
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
                url : baseurl+'SubGrupo/delete/' + id,
                dataType: 'json'
            });

            //quita la fila de la tabla
            $("#fila"+id).remove();
            alertify.success('Borrado');

        }

});