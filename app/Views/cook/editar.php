<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Editar Comida</h5>
                    <form method="POST" action="<?= base_url() ?>cook/editar/<?= $data['id_cook'] ?>">
                        <div class="form-outline" data-mdb-input-init>
                            <input name="name" value="<?= $data['name'] ?>" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Nombres y Apellidos</label>
                        </div>
                        <div class="form-outline  mt-3" data-mdb-input-init>
                            <input name="descripction" value="<?= $data['descripction'] ?>" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Descripción</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-4">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>