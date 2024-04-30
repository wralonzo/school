<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Registrar Evento</h5>
                    <form method="POST" action="<?= base_url() ?>event/registrar">
                        <div class="form-outline" data-mdb-input-init>
                            <input name="name" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Nombre</label>
                        </div> 

                        <div class="form-outline mt-3" data-mdb-input-init>
                            <input name="date" type="date" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Fecha del evento</label>
                        </div>   
                        
                        <div class="form-outline  mt-3" data-mdb-input-init>
                            <div class="content-select">
                                <select name="status">
                                    <option>Seleccione el estado del evento</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
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