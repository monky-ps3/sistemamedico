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
                <a href="<?= base_url('paciente/new')  ?>" class="btn btn-success">Nuevo</a></p>
              
               <?php  echo view('partials/session')?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                            <th>Nombre</th>
                              
                              <th>Telefono</th>
                              <th>Fecha Ingreso</th>
                              <th>Responsable</th>
                              <th>Telefono Responsable</th>
                              <th>Configuracion</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                              
                                <th>Telefono</th>
                                <th>Fecha Ingreso</th>
                                <th>Responsable</th>
                                <th>Telefono Responsable</th>
                                <th>Configuracion</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($pacientes as $paciente) : ?>
                                <tr>
                                    <td><?= $paciente['nombre']; ?></td>
                                  
                                    <td><?= $paciente['telefono']; ?></td>
                                    <td><?= $paciente['fecha_registro']; ?></td>
                                    <td><?= $paciente['nombre_responsable']; ?></td>
                                    <td><?= $paciente['telefono_responsable']; ?></td>
                                    <td>
                                    <a href="<?= base_url('paciente/show/' . $paciente['id']); ?>" class="btn btn-info">Ver</a>
                                    <a href="<?= base_url('paciente/edit/' . $paciente['id']); ?>" class="btn btn-warning">Editar</a>
                                    <a href="<?= base_url('index.php/paciente/remove/' . $paciente['id']); ?>"  class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>        
                    </table>
                </div>
            </div>
        </div>
    </main>