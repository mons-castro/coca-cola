<div class="container-fluid mt--6">
    <!-- Manage User Access -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm12">
            <div class="card h-100">
                <div class="card-body">
                    <h5 style="font-size: 22px;" class="card-title"><i class="fas fa-user-plus"></i> Crear un Nuevo Usuario</h5>
                    <form action="" method="post" class="mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nombre</label>
                                    <input name="nombre" class="form-control" type="text" id="example-text-input" placeholder="Ej. Abraham">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Apellido</label>
                                    <input name="apellido" class="form-control" type="text" id="example-text-input" placeholder="Ej. Ayala Padilla">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Correo</label>
                                    <input name="correo" class="form-control" type="text" id="example-text-input" placeholder="Ej. direccion@arpan.com.mx">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Teléfono</label>
                                    <input name="telefono" class="form-control" type="text" id="example-text-input" placeholder="Ej. 4426101289">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Contraseña</label>
                                    <input name="acceso" class="form-control" type="password" id="example-text-input" placeholder="Escribe aquí la contraseña">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Repetir Contraseña</label>
                                    <input name="acceso-confirmacion" class="form-control" type="password" id="example-text-input" placeholder="Repite aquí la contraseña">
                                </div>
                            </div>

                            <button name="createAdminBtn" class="btn btn-block btn-danger" type="submit"><i class="fas fa-plus-circle"></i> Crear nuevo usuario</button>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['createAdminBtn'])) {
                        if ($_POST['acceso'] == $_POST['acceso-confirmacion']) {
                            $data = array(
                                'nombre' => $_POST['nombre'],
                                'apellido' => $_POST['apellido'],
                                'correo' => $_POST['correo'],
                                'telefono' => $_POST['telefono'],
                                'acceso-confirmacion' => $_POST['acceso-confirmacion']
                            );

                            $admin->createNewAdmin($data);
                        } else {
                            $admin->getAlerts(
                                'error',
                                'Las contraseñas no coinciden, intenta de nuevo.'
                            );
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm12">
            <div class="card h-100">
                <div class="card-body">
                    <h5 style="font-size: 22px;" class="card-title"><i class="fas fa-users"></i> Usuarios Registrados</h5>

                    <article class="container">
                        <div class="row">
                            <?php
                            $admin->getAllAdmins();
                            ?>
                        </div>
                    </article>
                    </section>
                </div>
            </div>
        </div>
    </div>


    <!-- Manage Platrofm Videos -->
    <div class="card mt-5">
        <div class="p-4 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Modificar Vídeos de Curso</h3>
                </div>
            </div>

            <form action="" method="POST">
                <h4 class="mt-3 text-uppercase">Introducción</h4>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][0]; ?>
                        <input name="introduccion1" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][0]; ?>">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][1]; ?>
                        <input name="introduccion2" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][1]; ?>">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][2]; ?>
                        <input name="introduccion3" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][2]; ?>">
                    </div>
                </div>

                <hr>

                <h4 class="mt-5 text-uppercase">Módulo 1</h4>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][3]; ?>
                        <input name="modulo11" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][3]; ?>">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][4]; ?>
                        <input name="modulo12" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][4]; ?>">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][5]; ?>
                        <input name="modulo13" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][5]; ?>">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][6]; ?>
                        <input name="modulo14" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][6]; ?>">
                    </div>
                </div>

                <hr>

                <h4 class="mt-5 text-uppercase">Módulo 2</h4>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][7]; ?>
                        <input name="modulo21" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][7]; ?>">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][8]; ?>
                        <input name="modulo22" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][8]; ?>">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][9]; ?>
                        <input name="modulo23" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][9]; ?>">
                    </div>
                </div>

                <hr>

                <h4 class="mt-5 text-uppercase">Módulo 3</h4>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][10]; ?>
                        <input name="modulo31" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][10]; ?>">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][11]; ?>
                        <input name="modulo32" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][11]; ?>">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][12]; ?>
                        <input name="modulo33" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][12]; ?>">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <?php echo $admin->getURLVideos()['titulo'][13]; ?>
                        <input name="modulo34" type="text" class="form-control" value="<?php echo $admin->getURLVideos()['url'][13]; ?>">
                    </div>
                </div>

                <button name="saveNewVideos" type="submit" class="btn btn-semi-rounded text-white rounded-pill mt-4">Confirmar cambios</button>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['saveNewVideos'])) {
        $videos = array(
            'introduccion1' => $_POST['introduccion1'],
            'introduccion2' => $_POST['introduccion2'],
            'introduccion3' => $_POST['introduccion3'],
            'modulo11' => $_POST['modulo11'],
            'modulo12' => $_POST['modulo12'],
            'modulo13' => $_POST['modulo13'],
            'modulo14' => $_POST['modulo14'],
            'modulo21' => $_POST['modulo21'],
            'modulo22' => $_POST['modulo22'],
            'modulo23' => $_POST['modulo23'],
            'modulo31' => $_POST['modulo31'],
            'modulo32' => $_POST['modulo32'],
            'modulo33' => $_POST['modulo33'],
            'modulo34' => $_POST['modulo34']
        );

        if ($admin->updateURLVideos($videos)) {
            header('Location: ?settings');
        }
    }
    ?>


    <!-- Manage Access Code by State -->
    <div class="card">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Administrar Códigos de Acceso por Estado</h3>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="font-size: 15px;">Estado</th>
                        <th scope="col" style="font-size: 15px;">Asesor</th>
                        <th scope="col" style="font-size: 15px;">Supervisor</th>
                        <!-- <th scope="col" style="font-size: 15px;">Embotellador</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $admin->getAccessCodeTable();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 
    <div id="accessPanelCode" class="container-fluid mt--6">
    <div class="card p-5">
        <div class="text-center">
            <div class="container">
                <h2>Escribe el Código de Acceso</h2>
                <input placeholder="Escribe aquí" type="password" id="settingsPassword" class="form-control">
                <button type="submit" id="unlockSettingsPanelButton" class="btn btn-block bg-danger btn-semi-rounded text-white text-uppercase mt-4">Acceder</button>

                <h3 id="errorCodeMessage" class="text-danger font-weight-bolder mt-3">Acceso incorrecto, intenta de nuevo</h3>
            </div>
        </div>
    </div>
</div>
-->