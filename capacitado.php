<?php
ob_start();
header('Access-Control-Allow-Origin: *');

@$correoRegistro = $_GET['registro'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="https://prod-015845-mexicococacola-cloudfronts3content-12ei93trh58xd.s3.us-west-1.amazonaws.com/5by20-bucket/Celia/celia-bienvenida.png" />
  <meta property="og:description" content="En Fundación Coca-Cola queremos reconocer e impulsar a las tenderas y los tenderos en México. Con este curso diseñado especialmente para ti mejorarás el manejo de tu tienda de abarrotes o miscelánea, tu salud financiera y tu desempeño como empresaria o empresario." />
  <meta property="og:title" content="Programa de Empoderamiento de Mujeres y Pequeños Negocios" />
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="../../../src/css/fonts.css">
  <link rel="stylesheet" href="../../../src/css/animate.css">
  <link rel="stylesheet" href="../../../src/css/inicio-registro.css">
  <link rel="shortcut icon" href="../../../src/media/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../../../src/media/favicon.ico" type="image/x-icon">
  <title>Empoderamiento de Mujeres y Pequeños Negocios | Registro</title>
</head>

<body class="accent-background-light">

  <svg style="transform: rotate(180deg);" class="d-none d-sm-block d-md-none d-block d-sm-none" width="100%" height="172" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill="#FF6720">
      <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="18s" values="M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z;

            M0 86.3149C316 86.315 444 159.155 884 51.1554C1324 -56.8446 1320.29 34.1214 1538 70.4063C1814 116.407 2156 188.408 2560 86.315V232.317L0 232.316V86.3149Z;

            M0 53.6584C158 11.0001 213 0 363 0C513 0 855.555 115.001 1154 115.001C1440 115.001 1626 -38.0004 2560 53.6585V199.66L0 199.66V53.6584Z;

            M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z;" />
    </path>
  </svg>
  <!-- Modal de información -->
  <!-- 
    <div class="modal fade" id="informationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Información</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Los campos marcados con <span class="red-color">*</span> son obligatorios, si tienes dudas en algún
          campo puedes presionar o acercarte al icono de pregunta <span class="red-color"><i class="fas fa-question-circle"></i></span> y leer más.
          <br>
          <b>Tus datos no serán guardados hasta que finalices el proceso.</b>
        </div>
        <div class="modal-footer">
          <button type="button" id="closeInfo" class="btn text-white secondary-background" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
   -->

  <div class="container-fluid">
    <section class="row ">
      <div class="col-lg-6 col-md-6 col-sm-12 d-none d-xl-block d-none d-lg-block d-xl-none p-0 fixed-top reg-img">
        <img src="../../../src/media/images/laura_bejarano.jpg" class="img-fluid" alt="" />
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 d-none d-xl-block d-none d-lg-block d-xl-none p-0"></div>

      <div class="col col-lg-6 col-md-12 col-sm-12">
        <div class="container-fluid mt-4">
          <h1 class="font-title title-color text-uppercase text-center">Regístrate</h1>

          <div class="text-center">
            <p>¿Tienes dudas? Mira <a href="#!" class="green-color" data-toggle="modal" data-target="#signupModal">este vídeo</a> de como registrarte correctamente.</p>
          </div>

          <!-- Tutorial Modal -->
          <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">¿Como registrarte?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="ml-auto mr-auto">
                    <div class="embed-responsive embed-responsive-16by9">
                      <video controls>
                        <source src="https://prod-015845-mexicococacola-cloudfronts3content-12ei93trh58xd.s3.us-west-1.amazonaws.com/5by20-bucket/tutoriales/TenderoTendera.mp4" type="video/mp4">
                      </video>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>

          <div class="shadow mb-3">
            <div class="card-body text-center">
              <p class="font-weight-bolder">Avance de registro</p>
              <div class="progress">
                <div class="progress-bar blue-background-color progress-bar-striped progress-bar-animated" id="signUpProgressBar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                </div>
              </div>
            </div>
          </div>
          <?php
          include('../../../controller/learnerController.php');
          $learner = new LearnerController();

          if (isset($_POST['crearUsuario'])) {

            if ($_POST['acceso'] == $_POST['acceso-confirmacion']) {
              $user = array(
                'promotor' => ucwords(strtolower($_POST['numero-coca'])),
                'nombre' => ucwords(strtolower($_POST['nombre'])),
                'apellido' => ucwords(strtolower($_POST['apellido'])),
                'genero' => $_POST['genero'],
                'edad' => $_POST['edad'],
                'correo' => strtolower($_POST['correo']),
                'telefono' => $_POST['telefono'],
                'acceso' => $_POST['acceso'],
                'estado' => ucwords(strtolower($_POST['estado'])),
                'ciudad' => ucwords(strtolower($_POST['localidad'])),
                'localidad' => ucwords(strtolower($_POST['localidad'])),
                'calle' => ucwords(strtolower($_POST['calle'])),
                'colonia' => ucwords(strtolower($_POST['colonia'])),
                'numero' => $_POST['numero'],
                'codigo' => $_POST['codigo'],
                'escolaridad' => $_POST['escolaridad'],
                'negocio' => ucwords(strtolower($_POST['negocio'])),
                'numero-coca' => $_POST['numero-coca'],
                'identificador-coca' => $_POST['identificador-coca'],
                'foto' => $_FILES['foto']['name'],
                'foto_tmp' => $_FILES['foto']['tmp_name']
              );
              $learner->signUp($user);
            } else {
              echo '<div class="alert alert-danger text-uppercase text-center" role="alert">
                                    Las contraseñas no coinciden, inténtelo de nuevo.
                              </div>';
            }
          }
          ?>

          <form action="" id="register-form" method="POST" enctype="multipart/form-data" novalidate>
            <article id="firstForm" class="animated fadeIn">
              <div class="mt-4">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="userName" class="grey-caption-text ml-3">Nombre (s)<span class="red-color">*</span></label>
                      <input name="nombre" type="text" class="form-control input-rounded shadow" id="userName" placeholder="Escribe tu nombre" value="" />

                      <p id="nameTextFailed" class="red-color ml-3 mt-2"><i class="fas fa-times-circle"></i>Escribe
                        más de una letra. No se aceptan símbolos ni números. </p>
                      <p id="nameTextSuccess" class="text-success ml-3 mt-2"><i class="fas fa-check-circle"></i>¡Que
                        buen nombre!</p>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="userLastName" class="grey-caption-text ml-3">Apellido (s)<span class="red-color">*</span></label>
                      <input name="apellido" type="text" class="form-control input-rounded shadow" id="userLastName" placeholder="Escribe tu apellido" />

                      <p id="lastNameTextFailed" class="red-color ml-3 mt-2"><i class="fas fa-times-circle"></i>Escribe más de una letra. No se aceptan símbolos ni números.
                      </p>
                      <p id="lastNameTextSuccess" class="text-success ml-3 mt-2"><i class="fas fa-check-circle"></i>¡Que
                        gran apellido!</p>
                    </div>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="genSelection" class="grey-caption-text ml-3">
                        <span class="red-color">*</span>
                        Género
                        <i data-toggle="tooltip" data-placement="right" title="Para fines estadísticos" class="fas fa-question-circle"></i>
                      </label>
                      <select name="genero" class="form-control shadow" id="genSelection">
                        <option disabled selected>Selecciona tu género</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="ageSelection" class="grey-caption-text ml-3">
                        <span class="red-color">*</span>
                        Edad
                        <i data-toggle="tooltip" data-placement="right" title="Para fines estadísticos" class="fas fa-question-circle"></i>
                      </label>
                      <select name="edad" class="form-control shadow" id="ageSelection">
                        <option value="18-30">18-30</option>
                        <option value="31-35">31-35</option>
                        <option value="36-50">36-50</option>
                        <option value="51+">51+</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="educationSelection" class="grey-caption-text ml-3">Escolaridad
                        <span class="red-color">*</span></label>
                      <select name="escolaridad" class="form-control shadow" id="educationSelection">
                        <option disabled selected>Nivel de estudios</option>
                        <option value="Preescolar">Preescolar</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Preparatoria">Preparatoria</option>
                        <option value="Universidad">Universidad</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group mt-3">
                  <label class="grey-caption-text ml-3">
                    ¿Cuentas con un correo electrónico?
                    <i data-toggle="tooltip" data-placement="right" title="Si no tienes un correo propio marca la casilla no para que se te otorgue un correo temporal." class="fas fa-question-circle"></i>
                  </label>
                  <div class="ml-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="userEmailOptions" value="true" />
                      <label class="form-check-label" for="emailRadio1">Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="userEmailOptions" value="false" />
                      <label class="form-check-label" for="emailRadio2">No</label>
                    </div>
                  </div>
                </div>

                <div class="form-group" id="userEmailInput">
                  <label for="userEmail" class="grey-caption-text ml-3">
                    <span class="red-color">*</span>
                    Correo Electrónico
                    <i data-toggle="tooltip" data-placement="right" title="Esta es una dirección única" class="fas fa-question-circle"></i></label>
                  <input name="correo" type="email" class="form-control input-rounded shadow" id="userEmail" placeholder="Escribe tu correo electrónico" value="<?php echo $correoRegistro; ?>" />

                  <p id="emailTextFailed" class="red-color ml-3 mt-2"><i class="fas fa-times-circle"></i>Correo
                    electrónico no válido</p>
                  <p id="emailTextSuccess" class="text-success ml-3 mt-2"><i class="fas fa-check-circle"></i>¡Es un buen
                    correo para usar!</p>

                  <p id="fakeEmailText" class="animated fadeInDown red-color ml-3 mt-2">Este es tu correo electrónico temporal, sólo podrás utilizarlo para iniciar sesión en esta plataforma.</p>
                </div>


                <div class="form-group">
                  <label for="userPhone" class="grey-caption-text ml-3">
                    <span class="red-color">*</span>
                    Teléfono móvil
                    <i data-toggle="tooltip" data-placement="right" title="Esta es un teléfono único y 10 digitos" class="fas fa-question-circle"></i> </label>
                  <input name="telefono" type="tel" class="form-control input-rounded shadow" id="userPhone" placeholder="Escribe tu número de teléfono" />

                  <p id="phoneTextFailed" class="red-color ml-3 mt-2"><i class="fas fa-times-circle"></i>El teléfono
                    debe ser numérico de 10 digitos, sin guiones, letras ni lada.</p>
                  <p id="phoneTextSuccess" class="text-success ml-3 mt-2"><i class="fas fa-check-circle"></i>¡Grandioso!
                  </p>
                </div>

                <div class="row mt-4">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="userPassword" class="grey-caption-text ml-3">Contraseña <span class="red-color">*</span></label>
                      <input name="acceso" type="password" class="form-control input-rounded shadow" id="userPassword" placeholder="*********" autocomplete="off" />
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="userPasswordConfirm" class="grey-caption-text ml-3">Repite la contraseña
                        <span class="red-color">*</span></label>
                      <input name="acceso-confirmacion" type="password" class="form-control input-rounded shadow" id="userPasswordConfirm" placeholder="*********" autocomplete="off" />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <p id="passMatchTextSuccess" class="text-success ml-3"><i class="fas fa-check-circle"></i>¡Bien
                      hecho! Puedes continuar</p>
                    <p id="passMatchTextFailed" class="red-color ml-3"><i class="fas fa-times-circle"></i>Las
                      contraseñas no coinciden.</p>
                  </div>
                  <div class="col-md-6">
                    <p id="passwordToggle" style="cursor: pointer;" class="green-color ml-4 mt-2">Mostrar contraseñas <i class="far fa-eye"></i></p>
                  </div>
                </div>

              </div>
            </article>

            <article id="secondForm" class="animated fadeIn">
              <div class="mt-4">

                <div class="form-group">
                  <label for="userPostalCode" class="grey-caption-text ml-3">
                    <span class="red-color">*</span>
                    Código Postal
                    <i data-toggle="tooltip" data-placement="right" title="Escribe tu código para acceder directamente a tu ubicación" class="fas fa-question-circle"></i>
                  </label>
                  <input name="codigo" type="number" class="form-control input-rounded shadow" id="userPostalCode" placeholder="Escribe tu código postal" />
                </div>
                <div class="form-group">
                  <a id="postalCodeButton" class="btn btn-lg shadow-light-red btn-semi-rounded btn-block text-white text-uppercase">Buscar
                    ubicación <i class="fas fa-search-location"></i></a>
                </div>

                <div id="userAutocomplete">
                  <!-- Autocompletado de ubicación a partir del código postal -->
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <label for="userState" class="grey-caption-text ml-3">
                        <span class="red-color">*</span>
                        Estado
                        <i data-toggle="tooltip" data-placement="right" title="Este campo se llena automaticamente, de lo contrario puedes llenarlo con tus datos" class="fas fa-question-circle"></i>
                      </label>
                      <input name="estado" type="text" class="form-control input-rounded shadow" id="userState" placeholder="Escribe el estado donde vives" />
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <label for="userTown" class="grey-caption-text ml-3">
                        <span class="red-color">*</span>
                        Municipio
                        <i data-toggle="tooltip" data-placement="right" title="Este campo se llena automaticamente, de lo contrario puedes llenarlo con tus datos" class="fas fa-question-circle"></i>
                      </label>
                      <input name="localidad" type="text" class="form-control input-rounded shadow" id="userTown" placeholder="Escribe el municipio donde vives" />
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                      <div class="form-group">
                        <label for="locationSelection" class="grey-caption-text ml-3">
                          <span class="red-color">*</span>
                          Colonia
                          <i data-toggle="tooltip" data-placement="right" title="Para fines estadísticos" class="fas fa-question-circle"></i>
                        </label>
                        <select name="colonia" class="form-control shadow" id="locationSelection">
                          <option disabled selected>Selecciona tu colonia</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <p class="ml-auto mr-auto red-color">Estos campos: Calle, Número son llenados manualmente, por favor completalos.</p>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <label for="userStreet" class="grey-caption-text ml-3">
                        <span class="red-color">*</span>
                        Calle
                        <i data-toggle="tooltip" data-placement="right" title="Este campo se llena automaticamente, de lo contrario puedes llenarlo con tus datos" class="fas fa-question-circle"></i>
                      </label>
                      <input name="calle" type="text" class="form-control input-rounded shadow" id="userStreet" placeholder="Escribe aquí tu calle" />
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <label for="userHouseNumber" class="grey-caption-text ml-3">
                        <span class="red-color">*</span>
                        Número
                        <i data-toggle="tooltip" data-placement="right" title="Este campo se llena automaticamente, de lo contrario puedes llenarlo con tus datos" class="fas fa-question-circle"></i>
                      </label>
                      <input name="numero" type="text" class="form-control input-rounded shadow" id="userHouseNumber" placeholder="Escribe aquí tu número exterior de residencia" />
                    </div>
                  </div>
                </div>

              </div>
            </article>

            <article id="thirdForm" class="animated fadeIn mt-4">
              <div class="form-group">
                <label for="userBusinessName" class="grey-caption-text ml-3">
                  <span class="red-color">*</span>
                  Nombre del negocio
                  <i data-toggle="tooltip" data-placement="right" title="Ej. Abarrotes La Rosa" class="fas fa-question-circle"></i>
                </label>
                <input name="negocio" type="text" class="form-control input-rounded shadow" id="userBusinessName" placeholder="Escribe el nombre del negocio" />

                <p id="businessNameTextFailed" class="red-color ml-3 mt-2"><i class="fas fa-times-circle"></i>Escribe más de una letra. No se aceptan símbolos ni números. </p>
                <p id="businessNameTextSuccess" class="text-success ml-3 mt-2"><i class="fas fa-check-circle"></i>¡Puedes continuar!</p>
              </div>

              <!-- Código de Referencia -->
              <div class="form-group mt-4">
                <label class="grey-caption-text ml-3">
                  ¿Tienes algún código de referencia?
                  <i data-toggle="tooltip" data-placement="right" title="El código de referencia te lo proporcionará la persona que te invitó." class="fas fa-question-circle"></i>
                </label>
                <div class="ml-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="clientNumberOptions" value="true" />
                    <label class="form-check-label" for="inlineRadio1">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="clientNumberOptions" value="false" />
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                </div>
              </div>

              <div class="form-group" id="inputClientNumber">
                <label for="userCocaClient" class="grey-caption-text ml-3">Ingresa el código de referencia
                  <span class="red-color">*</span></label>
                <input name="numero-coca" type="text" class="form-control input-rounded shadow" id="userCocaClient" placeholder="Escribe el código aquí">
              </div>

              <!-- Número de Cliente Coca-Cola -->
              <div class="form-group mt-4">
                <label class="grey-caption-text ml-3">
                  ¿Tienes un número de cliente Coca-Cola?
                  <i data-toggle="tooltip" data-placement="right" title="El código de referencia te lo proporcionará la persona que te invitó." class="fas fa-question-circle"></i>
                </label>
                <div class="ml-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="CocaNumberOptions" value="true" />
                    <label class="form-check-label" for="inlineRadio1">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="CocaNumberOptions" value="false" />
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                </div>
              </div>

              <div class="form-group" id="inputCocaClientNumber">
                <label for="userCocaClient" class="grey-caption-text ml-3">Ingresa el número de cliente
                  <span class="red-color">*</span></label>
                <input name="identificador-coca" type="text" class="form-control input-rounded shadow" id="cocaClientID" placeholder="Escribe el número aquí">
              </div>


              <div id="addUserPhoto" class="form-group mt-4">
                <label class="grey-caption-text ml-3">
                  Foto del negocio
                  <i data-toggle="tooltip" data-placement="right" title="Captura una foto de tu establecimiento por fuera" class="fas fa-question-circle"></i>
                </label>
                <div class="custom-file shadow">
                  <input id="foto" name="foto" type="file" class="custom-file-input" />
                  <label class="custom-file-label" for="customFile">Click para subir una foto</label>
                </div>
              </div>
              <div class="progress" id="photoProgress">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" id="progressDataPhoto" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>


            </article>

            <article id="infoView" class="animated fadeIn mt-4">
              <h4 class="text-center font-weight-bolder my-3 text-uppercase">Estos son tus datos</h4>
              <div class="card shadow px-4 py-2 text-center text-sm-center text-md-left">

                <div class="row">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <p id="" class="my-2">Nombre (s):</p><span id="previewName" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Apellido (s): </p><span id="previewLastName" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Género: </p><span id="previewGen" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Edad: </p><span id="previewAge" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Corre electrónico: </p><span id="previewEmail" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Teléfono: </p><span id="previewPhone" class="red-color font-weight-bold"></span>
                  </div>

                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <p id="" class="my-2">Código Postal: </p><span id="previewCP" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Estado: </p><span id="previewState" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Municipio: </p><span id="previewLocation" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Colonia: </p><span id="previewNeigh" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Calle: </p><span id="previewStreet" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Número: </p><span id="previewNumber" class="red-color font-weight-bold"></span>
                  </div>

                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <p id="" class="my-2">Escolaridad: </p><span id="previewSchool" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Nombre del negocio: </p><span id="previewShop" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Código de referencia: </p><span id="previewCode" class="red-color font-weight-bold"></span>
                    <p id="" class="my-2">Número de cliente Coca-Cola: </p><span id="previewCodeCoca" class="red-color font-weight-bold"></span>
                  </div>
                </div>

              </div>
              <div class="text-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="checkTerms">
                  <label class="form-check-label mt-3" for="checkTerms">
                    Al seleccionar la casilla validas que tus datos son correctos y aceptas los términos y condiciones de uso. <br>
                    <a class="green-color" href="http://avisodeprivacidad.coca-cola.com.mx/" target="_blank">Ver el
                      aviso de privacidad</a>
                  </label>
                </div>
              </div>
            </article>

            <div class="row animated mt-3 fadeIn px-0">
              <div class="col-6">
                <a id="backButton" class="btn btn-lg  shadow-light-red btn-semi-rounded btn-block text-white text-uppercase">Anterior</a>
              </div>

              <div class="col-6">
                <a id="nextButton" class="btn btn-lg shadow-light-red btn-semi-rounded btn-block text-white text-uppercase text-wrap">Siguiente</a>
              </div>
            </div>

            <div class="form-group mt-5">
              <button id="saveDataButton" type="submit" name="crearUsuario" class="btn btn-lg shadow-light-red btn-semi-rounded btn-block text-white text-uppercase animated fadeIn">Finalizar
                registro</button>
            </div>

            <div class="form-group text-center font-caption">
              <b>Recuerda que tus datos no serán guardados hasta que finalices el proceso.</b>

              <p class="mt-4" style="font-size: 22px;">¿Ya tienes una cuenta? <a href="../inicio-sesion/iniciar-sesion.php" class="green-color text-decoration-none">Inicia
                  sesión
                  aquí</a> </p>
            </div>
          </form>

        </div>
      </div>
    </section>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="../../../src/js/index.js"></script>
  <script src="../../../src/js/host.js"></script>
  <script src="../../../src/js/validation.js"></script>
  <script src="../../../src/js/signup.js"></script>
</body>

</html>

<script>
  $('#checkTerms').click(function() {
    var user = {
      'nombre': $('[name=nombre]').val(),
      'apellido': $('[name=apellido]').val(),
      'edad': $('[name=edad]').val(),
      'correo': $('[name=correo]').val(),
      'telefono': $('[name=telefono]').val(),
      'contraseña': $('[name=acceso]').val(),
      'estado': $('[name=estado]').val(),
      'ciudad': $('[name=ciudad]').val(),
      'localidad': $('[name=localidad]').val(),
      'calle': $('[name=calle]').val(),
      'colonia': $('[name=colonia]').val(),
      'numero': $('[name=numero]').val(),
      'codigo': $('[name=codigo]').val(),
      'negocio': $('[name=negocio]').val()
    };

    for (var key in user) {
      var value = user[key];
      if (value.length == 0 || value == null) {
        Swal.fire({
          icon: 'info',
          title: 'Datos incompletos',
          html: 'El campo <b>' + key + '</b> no tiene información, por favor completalo para continuar.'
        }).then((result) => {
          if (result) {
            $('#saveDataButton').hide();
            location.reload();
          }
        });
      } else {
        $('#saveDataButton').show();
      }
    }
  });
</script>

<?php ob_end_flush(); ?>