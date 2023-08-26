<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pacientes</h1>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Administracion de pacientes

                </div>
                <div class="card-body">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Editar registo</h3>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo base_url()?>/paciente/update/<?= $paciente['id'] ?>" autocomplete="off">
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="nombre"  name="nombre"  type="text"   value="<?= $paciente['nombre'] ?>" placeholder="ingrese su nombre" >
                                                        <label for="nombre">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="apellido_p" name="apellido_p"  type="text"  value="<?= $paciente['apellido_p'] ?>" placeholder="Ingrese apellido paterno " />
                                                        <label for="apellido_p">APellido Paterno</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="apellido_m" type="text"  value="<?= $paciente['apellido_m'] ?>"placeholder="Ingrese apellido materno " />
                                                        <label for="apellido_m">APellido Materno</label>
                                                    </div>
                                                </div>
                                            </div>
                                      
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="direccion" type="direccion"  value="<?= $paciente['direccion'] ?>" placeholder="Ingrese su direccion" />
                                                <label for="inputEmail">Direccion</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">

                                                   <?php echo print_r($paciente); ?>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Seleccione estado civil</option>
                                                            <option value="soltero" <?= ($paciente['estado_civil'] === 'soltero') ? 'selected' : '' ?>>Soltero</option>
                                                            <option value="casado" <?= ($paciente['estado_civil'] === 'casado') ? 'selected' : '' ?>>Casado</option>
                                                            <option value="union_libre      ">union libre</option>
                                                            <option value="4">otros</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="telefono" type="text" placeholder="Ingrese el telefono " />
                                                        <label for="telefono">Telefono</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                    <select class="form-select" aria-label="Default select example">
                                                            <option selected>Seleccione Genero</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Femenino</option>
                                                            <option value="3">Otros</option>
                                                         
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="nombre_responsable" type="text" placeholder="Ingrese el nombre del responsable" />
                                                        <label for="nombre_responsable">Nombre del responsable</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="telefono_responsable" type="text" placeholder="telefono_responsable" />
                                                        <label for="inputPasswordConfirm">Telefono del responsable</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                               

                                                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>