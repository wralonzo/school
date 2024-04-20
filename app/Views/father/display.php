<div class="w-full mb-12 px-4">
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-4xl text-blueGray-700 text-center">
                        Listado de padres
                    </h3>
                    <a href="<?php echo base_url(); ?>father/registrar">
                        <div class="">
                            <i class="fa fa-plus fa-2x"></i>
                        </div>
                    </a>
                    <?php if (session()->get('no_access')) : ?>
                        <h5 style="color: red"><?php echo session()->get('no_access'); ?></h5>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="mx-4">
            <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Nombres
                        </th>
                        <th>
                            Dirección
                        </th>
                        <th>
                            Télefono
                        </th>
                        <th>
                            Usuario
                        </th>
                        <th>
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data as $item) : ?>
                        <tr class="center-text">
                            <td>
                                <span class="ml-3 font-bold text-blueGray-600">
                                    <?= $item['name'] ?>
                                </span>
                            </td>
                            <td>
                                <?= $item['address'] ?>

                            </td>
                            <td>
                                <?= $item['mobile']  ?>

                            </td>
                            <td>
                                <?php echo getUserName($item['user'])->user; ?>
                            </td>

                            <td>
                                <a class="py-6" href="<?= base_url() ?>father/editar/<?= $item['id_father'] ?>">
                                    <i class="fas fa-edit fa-fw me-3 text-primary"></i><span class="text-primary">
                                </a>
                                <a class="py-6" href="<?= base_url() ?>father/borrar/<?= $item['id_father'] ?>">
                                    <i class="fas fa-trash fa-fw me-3 text-danger"></i><span class="text-red">
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<script>
    $("table#example").Grid({
        pagination: {
            enabled: true,
            limit: 5,
            summary: false
        },
        search: {
            enabled: true
        },
        style: {
            th: {
                'text-align': 'center'
            },
            td: {
                'text-align': 'center'
            },
        }
    });
</script>