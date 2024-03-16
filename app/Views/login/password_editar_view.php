
    <?php

//echo validation_errors("<p class='bg-danger'>");
echo form_open('login/cambiar_password/');
// echo $producto->descripcionProducto;

?>
<div class="container "align="center">
<a  href="<?php echo base_url(); ?>login/vista_login"><input class="btn btn-primary" type="button" value="Volver" name="submit" /></a>
</div>


    <br><div><h1 align="center" class="text-transparent">ACTUALIZAR CONTRASEÑA </h1></div>


    <br>
    <div class="container" aling="center">

    <div class="container form-group col col-lg-4">
    <?php echo form_label('Mi contraseña nueva'); ?>
        <?php
        $data = array(
            'class'         => 'form-control',
            'name'          => 'txtClave',
            'type'          => 'password',
            'placeholder'   => 'Tu contraseña nueva',
            'value'         => set_value('txtClave')
        );
        ?>
        <?php echo form_password($data); ?>
        <?php echo form_error('txtClave', '<p class="alert alert-warning">', '</p>') ?>


        </div>


                <div class="container col col-lg-1">
                            <?php
                            $data = array(

                                'class'         => 'btn btn-success',
                                'name'          => 'submit',
                                'value'         => 'Actualizar'

                            );
                            ?>
                <?php echo form_submit($data); ?>
                </div>
            </div><br><br>
<?php
    echo form_close();

?>

