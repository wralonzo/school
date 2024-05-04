<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Registrar asistencia al evento</h5>
                    <form method="POST" action="<?= base_url() ?>event/attendance">
                        <input name="user" type="hidden" value="<?= session()->get('id_user') ?>" />

                        <div class="form-outline mt-3" data-mdb-input-init>
                            <div class="content-select">
                                <select name="children">
                                    <option>Seleccione un estudiante</option>
                                    <?php
                                    if (count($students) > 0) :
                                        foreach ($students as $item) :

                                    ?>
                                            <option value="<?= $item['id_children'] ?>"><?= $item['name'] ?></option>

                                    <?php endforeach;
                                    endif; ?>
                                </select>
                                <i></i>
                            </div>
                        </div>

                        <div class="form-outline mt-3" data-mdb-input-init>
                            <div class="content-select">
                                <select name="event">
                                    <option>Seleccione un evento</option>
                                    <?php
                                    if (count($events) > 0) :
                                        foreach ($events as $item) :

                                    ?>
                                            <option value="<?= $item['id_event'] ?>"><?= $item['name'] ?></option>

                                    <?php endforeach;
                                    endif; ?>
                                </select>
                                <i></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-4">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>