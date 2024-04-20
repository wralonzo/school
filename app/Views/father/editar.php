<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Editar Padre</h5>
                    <form method="POST" action="<?= base_url() ?>father/editar/<?= $data['id_father'] ?>">
                        <div class="form-outline" data-mdb-input-init>
                            <input name="name" value="<?= $data['name'] ?>" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Nombres y Apellidos</label>
                        </div>
                        <div class="form-outline  mt-3" data-mdb-input-init>
                            <input name="address" value="<?= $data['address'] ?>" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Dirección</label>
                        </div>
                        <div class="form-outline  mt-3" data-mdb-input-init>
                            <input name="mobile" value="<?= $data['mobile'] ?>" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Télefono</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-4">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>