<main class="app-content">
    <div class="app-title">
        <div>

            <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="<?php echo BASE_URL . ''; ?>"></a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body"></div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div></div>
                        </div>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-categorias-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-categorias" type="button" role="tab"
                                    aria-controls="nav-categorias" aria-selected="true">ejmplo</button>
                                
                                <button class="nav-link" id="nav-nuevo-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-nuevo" type="button" role="tab" aria-controls="nav-nuevo"
                                    aria-selected="false"></button>
                                </div>
                                <button class="btn btn-danger" type="button" onclick="openModal();"><i class="fa-solid fa-upload"></i>
                                Importar Csv</button>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active mt-2" id="nav-categorias" role="tabpanel"
                                aria-labelledby="nav-categorias-tab" tabindex="0">
                                <h5 class="card-title text-center">ejemplo</h5>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover nowrap" id="tbl_alumno"
                                        style="width: 100%;">
                                        <thead>
                                            <tr>
                                                

                                               
                                            </tr>
                                        </thead>

                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade p-3" id="nav-nuevo" role="tabpanel"
                                aria-labelledby="nav-nuevo-tab" tabindex="0">
                                <form id="formulario" autocomplete="off">
                                    <input type="hidden" id="id" name="id">
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label for="año">ejemplo<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input class="form-control" type="text" name="ejemplo" id="ejemplo" placeholder="Nombre">
                                            </div>
                                            <span id="errornombre" class="text-danger"></span>
                                        </div>
                                       
                                       
                                    </div>
                                    <div class="text-end">
                                        <button class="formbutonnuevo" type="button" id="btnNuevo"> <i
                                                class="fa-regular fa-user"></i> Nuevo</button>
                                        <button class="formbuton" type="submit" id="btnAccion">Registrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

