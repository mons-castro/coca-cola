<!-- Action Cards -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="row">
                <!-- Card Information -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="font-size: 22px;" class="card-title">
                                <i class="fas fa-info-circle"></i>
                                Información de la Plataforma
                            </h5>
                            <p class="card-text">
                            <div class="mb-2">
                                <h5 class="h4 card-title font-weight-bolder mb-0">Nombre del Proyecto</h5>
                                <span class="text-muted mb-0">Empoderamiento de Mujeres y Pequeños Negocios</span>
                            </div>

                            <div class="mb-2">
                                <h5 class="h4 card-title font-weight-bolder mb-0">Aliado Estratégico</h5>
                                <span class="text-muted mb-0">Tecnológico Nacional de México Campus Ciudad
                                    Hidalgo</span>
                            </div>

                            <div class="mb-2">
                                <h5 class="h4 card-title font-weight-bolder mb-0">Fecha de Lanzamiento</h5>
                                <span class="text-muted mb-0">31 de Agosto de 2020</span>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Record Analysis by Role -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="font-size: 22px;" class="card-title">
                                <i class="fas fa-chart-line"></i>
                                Registros de Roles Globales
                            </h5>
                            <canvas id="chartRecordsByRole" width="200" height="100"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="font-size: 22px;" class="card-title">
                                <i class="fas fa-chart-line"></i>
                                Hombres y Mujeres
                            </h5>
                            <canvas id="chartGender" width="100%"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="font-size: 22px;" class="card-title">
                            <i class="fas fa-mouse"></i>
                                Clicks de Redes Sociales
                            </h5>
                            <canvas id="chartSocialNetworkclicks" width="100%"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Quiz 1 -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="font-size: 22px;" class="card-title">
                                <i class="fas fa-chart-line"></i>
                                Análisis Preguntas Módulo 1
                            </h5>
                            <h3 id="moduleOneQuestionOneText">Cargando...</h3>
                            <canvas id="chartModuleOneQuestionOne" width="200" height="100"></canvas>

                            <h3 id="moduleOneQuestionTwoText">Cargando...</h3>
                            <canvas id="chartModuleOneQuestionTwo" width="200" height="100"></canvas>

                            <h3 id="moduleOneQuestionThreeText">Cargando...</h3>
                            <canvas id="chartModuleOneQuestionThree" width="200" height="100"></canvas>

                            <h3 id="moduleOneQuestionFourText">Cargando...</h3>
                            <canvas id="chartModuleOneQuestionFour" width="200" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-8 col-md-12 col-sm-12">
            <!-- Analysis by state LEARNER -->
            <div class="card">
                <div class="card-body">
                    <h5 style="font-size: 22px;" class="card-title">
                        <i class="fas fa-chart-bar"></i>
                        Registros de Capacitados por Estado
                    </h5>
                    <canvas id="chartLeaernerRecordsByState" width="200" height="100"></canvas>
                </div>
            </div>

            <!-- Analysis by state CHECKER -->
            <div class="card">
                <div class="card-body">
                    <h5 style="font-size: 22px;" class="card-title">
                        <i class="fas fa-chart-bar"></i>
                        Registros de Asesores por Estado
                    </h5>
                    <canvas id="chartCheckerRecordsByState" width="200" height="100"></canvas>
                </div>
            </div>

            <!-- Analysis by state COACH -->
            <div class="card">
                <div class="card-body">
                    <h5 style="font-size: 22px;" class="card-title">
                        <i class="fas fa-chart-bar"></i>
                        Registros de Supervisor por Estado
                    </h5>
                    <canvas id="chartCoachRecordsByState" width="200" height="100"></canvas>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="font-size: 22px;" class="card-title">
                                <i class="fas fa-chart-line"></i>
                                Análisis Preguntas Módulo 2
                            </h5>
                            <h3 id="moduleTwoQuestionOneText">Cargando...</h3>
                            <canvas id="chartModuleTwoQuestionOne" width="200" height="100"></canvas>

                            <h3 id="moduleTwoQuestionTwoText">Cargando...</h3>
                            <canvas id="chartModuleTwoQuestionTwo" width="200" height="100"></canvas>

                            <h3 id="moduleTwoQuestionThreeText">Cargando...</h3>
                            <canvas id="chartModuleTwoQuestionThree" width="200" height="100"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="font-size: 22px;" class="card-title">
                                <i class="fas fa-chart-line"></i>
                                Análisis Preguntas Módulo 3
                            </h5>
                            <h3 id="moduleThreeQuestionOneText">Cargando...</h3>
                            <canvas id="chartModuleThreeQuestionOne" width="200" height="100"></canvas>

                            <h3 id="moduleThreeQuestionTwoText">Cargando...</h3>
                            <canvas id="chartModuleThreeQuestionTwo" width="200" height="100"></canvas>

                            <h3 id="moduleThreeQuestionThreeText">Cargando...</h3>
                            <canvas id="chartModuleThreeQuestionThree" width="200" height="100"></canvas>

                            <h3 id="moduleThreeQuestionFourText">Cargando...</h3>
                            <canvas id="chartModuleThreeQuestionFour" width="200" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>