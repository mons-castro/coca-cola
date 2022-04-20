<?php
if (!isset($_GET['info_negocios'])) {
  header('Location: dashboard.php');
}
$businessName = $admin->getBusinessInformation($_GET['info_negocios']);

$img_url = 'https://prod-015845-mexicococacola-cloudfronts3content-12ei93trh58xd.s3-us-west-1.amazonaws.com/5by20-bucket/shops/' . $businessName['fotografia'] . '';
$img_explode = explode('/', $img_url);

if ($img_explode[5] == "") {
  $img_url = "https://prod-015845-mexicococacola-cloudfronts3content-12ei93trh58xd.s3-us-west-1.amazonaws.com/5by20-bucket/shops/1";
}

?>

<!--
  Save in localStorage learner and checker deleted here.
 -->

<!-- Header -->
<div class="header align-items-center mb-4" style="height: 200px;">
  <!-- Mask -->
  <span class="mask bg-gradient-default"></span>
  <!-- Header container -->
  <div class="container align-items-center">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <h1 class="display-3 text-white ml-3">
          <?php

          $explode = explode("∫", $businessName['negocio']);
          if (count($explode) > 1) {
            print_r($explode[1]);
          } else {
            print_r($explode[0]);
          }
          ?>
        </h1>
        <p class="text-white ml-3">
          <?php
          print_r($businessName['ciudad'] . ', ' . $businessName['estado']);
          ?>
        </p>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ml-3 ml-md-0 align-self-center text-left text-md-right mb-3 mb-md-0">
        <?php
        if ($businessName['suspendido']) {
          echo '
              <h4 class="text-white font-weight-bold mt-4">Esta cuenta se encuentra suspendida!. Pulse el botón para desbloquear.</h4>
              <button id="unlockBtn" class="btn btn-danger btn-semi-rounded text-uppercase">Desbloquear</button>
            ';
        }
        ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
        <div class="card">
          <div class="card-body">
            <h3>Datos de la tienda</h3>
            <h6 class="heading-small text-muted mb-4">Información personal</h6>
            <div class="pl-lg-3">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="input-username">Nombre</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-username" placeholder="Nombre" value="<?php print_r($businessName['nombre']); ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="input-last-name">Apellido</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-last-name" placeholder="Apellidos" value="<?php print_r($businessName['apellido']); ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="input-email">Correo</label>
                  <input type="email" class="form-control input-rounded shadow" id="input-email" placeholder="Correo Electrónico" value="<?php print_r($businessName['correo']); ?>" readonly>
                </div>
                <div class="form-group col-md-3">
                  <label for="input-phone">Telefono</label>
                  <input type="number" class="form-control input-rounded shadow" id="input-phone" placeholder="Número de telefono" value="<?php print_r($businessName['telefono']); ?>" readonly>
                </div>
                <div class="form-group col-md-3">
                  <label for="input-username">Edad</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-username" placeholder="Nombre" value="<?php print_r($businessName['edad']); ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                  <label for="input-business">Negocio</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-business" placeholder="Nombre del  negocio" value="<?php print_r($businessName['negocio']); ?>">
                </div>


                <div class="form-group col-md-6">
                  <label for="input-username">Escolaridad</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-username" placeholder="Nombre" value="<?php print_r($businessName['escolaridad']); ?>" readonly>
                </div>
              </div>
            </div>
            <h6 class="heading-small text-muted mb-4">Ubicación</h6>
            <div class="pl-lg-3">
              <div class="row">

                <div class="form-group col-md-4">
                  <label for="input-username">Estado</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-username" placeholder="Nombre" value="<?php print_r($businessName['estado']); ?>" readonly>
                </div>

                <div class="form-group col-md-4">
                  <label for="input-username">Municipio</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-username" placeholder="Nombre" value="<?php print_r($businessName['ciudad']); ?>" readonly>
                </div>

                <div class="form-group col-md-4">
                  <label for="input-username">Código Postal</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-username" placeholder="Nombre" value="<?php print_r($businessName['codigo']); ?>" readonly>
                </div>

                <div class="form-group col-md-6">
                  <label for="input-username">Calle</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-username" placeholder="Nombre" value="<?php print_r($businessName['calle']); ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                  <label for="input-username">Colonia</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-username" placeholder="Nombre" value="<?php print_r($businessName['colonia']); ?>" readonly>
                </div>

                <div class="form-group col-md-4">
                  <label for="input-reference">Referencia</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-reference" placeholder="No tiene referencia" value="<?php print_r($businessName['numeroCliente']); ?>">
                </div>

                <div class="form-group col-md-4">
                  <label for="input-reference">Número de Cliente Coca-Cola</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-cocaNumber" placeholder="No tiene número" value="<?php print_r($businessName['numeroVendedor']); ?>">
                </div>

                <div class="form-group col-md-4">
                  <label for="input-reference">Contraseña</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-password" placeholder="Escribe para cambiar la contraseña">
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2">
                  <a class="btn bg-danger btn-block btn-semi-rounded text-white text-uppercase" data-toggle="modal" data-target="#eliminarCapacitado">
                    Eliminar capacitado
                  </a>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2">
                  <input id="input-token" type="hidden" value="<?php echo $_SESSION['token']; ?>">
                  <input type="button" id="updateButton" value="Actualizar" name="updateLearner" class="btn btn-block bg-danger btn-semi-rounded text-white text-uppercase"></input>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-3">
        <div class="card">
          <img id="businessImg" src="<?php echo $img_url ?>" class="card-img-top" onerror="imgNotFound()" alt="..." style="border-radius: 2rem 2rem 0rem 0rem;">
          <div class="card-body">
            <h3 id="businessImgText" class="text-center">Fotografía del negocio</h3>

            <a id='downloadBtn' href="<?php echo $img_url ?>" class="btn bg-danger btn-block btn-semi-rounded text-white text-uppercase"><i class="fas fa-download"></i> Descargar</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="eliminarCapacitado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="form-row">
            <div class="form-group col-12">
              <label for="numberBusiness">Se eliminará el siguiente capacitado: </label>
              <input type="text" class="form-control input-rounded shadow" id="numberBusiness" placeholder="Número de telefono" value="<?php print_r($businessName['nombre'] . " " . $businessName['apellido']); ?>">
              <br>
              <input type="text" name="idLearner" class="form-control input-rounded shadow d-none" value="<?php print_r($businessName['id']); ?>">
            </div>
          </div>
          <a class="btn btn-block btn-danger" href="../../controller/dropUsersData.php?userType=learner&user=<?php echo $businessName['id']; ?>&token=<?php echo $_SESSION['token']; ?>">Eliminar</a>
        </form>
      </div>
    </div>
  </div>
</div>