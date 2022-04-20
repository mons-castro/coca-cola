<div class="container-fluid mt--6">
    <div class="card">
        <div class="card-body">
            <h5 style="font-size: 22px;" class="card-title"><i class="fas fa-chalkboard"></i> Registrar una nueva Institución u Organización</h5>
            <form action="" method="post" class="mb-3">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nombre de la Institución/Organización</label>
                            <input name="escuela" class="form-control" type="text" id="example-text-input" placeholder="Ej. Intituto Tecnológico Superior de Ciudad Hidalgo">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="stateSelection" class="form-control-label">Estado</label>
                            <select name="estado" class="form-control shadow" id="stateSelection">
                                <option disabled selected>Selecciona el estado de pertenencia</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Latitud</label>
                            <input name="latitud" class="form-control" type="number" step="any" id="example-text-input" placeholder="Ej. 19.709148">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Longitud</label>
                            <input name="longitud" class="form-control" type="number" step="any" id="example-text-input" placeholder="Ej. -100.517463">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <button name="createSchoolBtn" class="btn btn-danger" type="submit"><i class="fas fa-plus-circle"></i> Guardar datos</button>
                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST['createSchoolBtn'])) {
                $data = array(
                    'escuela' => $_POST['escuela'],
                    'estado' => $_POST['estado'],
                    'latitud' => $_POST['latitud'],
                    'longitud' => $_POST['longitud']
                );
                $admin->createNewSchool($data);
            }
            ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 style="font-size: 22px;" class="card-title"><i class="fas fa-school"></i> Instituciones/Organizaciones Registradas</h5>

            <article class="container">
                <div class="row">
                    <?php
                    $admin->getAllSchools();
                    ?>
                </div>
            </article>
            </section>
        </div>
    </div>