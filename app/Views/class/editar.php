<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Editar Clase</h5>
                    <form method="POST" action="<?= base_url() ?>class/editar/<?= $data['id_class'] ?>">
                        <div class="form-outline" data-mdb-input-init>
                            <input name="name" value="<?= $data['name'] ?>" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Nombre</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-4">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>