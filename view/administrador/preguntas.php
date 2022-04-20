<div class="container-fluid mt--6">
  <div class="card">
    <div class="card-body">
      <h5 style="font-size: 22px;" class="card-title"><i class="fas fa-question-circle"></i> Administrar Preguntas Fecuentes</h5>

      <?php
      if (isset($_POST['sendFAQ'])) {
        $data = array(
          'section' => $_POST['section'],
          'question' => $_POST['question'],
          'answer' => $_POST['answer']
        );
        $admin->saveNewFaq($data);
      }
      ?>
      <br>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">¿Cuál es la pregunta?</label>
              <input name="question" class="form-control" type="text" id="example-text-input" placeholder="Ej. ¿Cómo recupero mi contraseña?">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
              <div class="form-group">
                <label for="section">¿A que sección pertenece?</label>
                <select class="form-control" id="section" name="section">
                  <option disabled selected>Selecciona una sección</option>
                  <option value="1">Tenderas y Tenderos</option>
                  <option value="2">Asesores</option>
                  <option value="3">Supervisores</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">¿Cuál es la respuesta?</label>
              <textarea name="answer" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Escribe aquí tu respuesta"></textarea>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <button name="sendFAQ" class="btn btn-danger text-uppercase btn-block" type="submit">Guardar pregunta</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 style="font-size: 22px;" class="card-title"><i class="fas fa-list"></i> Todas las preguntas</h5>


      <div class="row">
        <?php
        foreach ($admin->getAllFaq() as $key => $value) {
          //print_r($value['pregunta'] . ", ");
        ?>

          <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title font-weight-bolder h3"><?php echo $value['pregunta']; ?></h5>
                <p class="card-text"><?php echo $value['respuesta']; ?></p>

              </div>
              <div class="card-footer">
                <a href="#!" class="btn btn-block btn-warning text-uppercase card-link" data-toggle="modal" data-target="#modal<?php echo $value['ID_faq']; ?>">Editar</a>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal<?php echo $value['ID_faq']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Actualizar Pregunta </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <?php
                  if (isset($_POST['updateQuestionFaq'])) {
                    $dataEdit = array(
                      'id' => $value['ID_faq'],
                      'section' => $_POST['sectionEdit'],
                      'question' => $_POST['questionEdit'],
                      'answer' => $_POST['answerEdit']
                    );

                    $admin->editFaq($dataEdit);
                  }
                  ?>

                  <form action="" method="POST">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">¿Cuál es la pregunta?</label>
                          <input name="questionEdit" class="form-control" type="text" id="example-text-input" placeholder="Ej. ¿Cómo recupero mi contraseña?" style="color: #000000;" value="<?php echo $value['pregunta']; ?>">
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label for="section">¿A que sección pertenece?</label>
                            <select class="form-control" id="section" name="sectionEdit">
                              <option disabled selected>Selecciona una sección</option>
                              <option value="1" <?php echo ($value['seccion'] == 1) ? 'selected' : ''; ?>>Tendederas y Tendederos</option>
                              <option value="2" <?php echo ($value['seccion'] == 2) ? 'selected' : ''; ?>>Promotores</option>
                              <option value="3" <?php echo ($value['seccion'] == 3) ? 'selected' : ''; ?>>Supervisores</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">¿Cuál es la respuesta?</label>
                          <textarea name="answerEdit" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Escribe aquí tu respuesta" style="color: #000000;">
                        <?php echo $value['respuesta']; ?>
                        </textarea>
                        </div>
                      </div>
                    </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" name="updateQuestionFaq" class="btn btn-info font-weight-bolder">Guardar cambios</button>
                </div>
                </form>

              </div>
            </div>
          </div>

        <?php
        }
        ?>
      </div>

    </div>
  </div>
</div>