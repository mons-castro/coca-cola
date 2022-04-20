<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <select id="select-tec" name="tecnologico" class="form-control shadow card">
                <option disabled selected>SELECCIONA UNA INSTITUCIÓN U ORGANIZACIÓN:</option>
                <?php
                    $admin->getSchools();
                ?>
            </select>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 px-2">
            <div id="map" class="card" style='width: 100%; height: 80vh;'></div>
        </div>
    </div>
    <div id="#fetchUsers" class="fetchUsers container">

    </div>
</div>