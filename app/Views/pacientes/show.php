<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Paciente</h1>

            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item">Nombre: <?= $paciente['nombre'] ?></li>
                    <li class="list-group-item">Appelido paterno: <?= $paciente['apellido_p'] ?></li>
                    <li class="list-group-item">Apellido Materno: <?= $paciente['apellido_m'] ?> </li>
                    <li class="list-group-item">Direccion: <?= $paciente['direccion'] ?> </li>
                    <li class="list-group-item">Estado civil: <?= $paciente['estado_civil'] ?> </li>
                    <li class="list-group-item">Telefono: <?= $paciente['telefono'] ?> </li>
                    <li class="list-group-item">Genero: <?= $paciente['genero'] ?> </li>
                    <li class="list-group-item">Nombre del responsable : <?= $paciente['nombre_responsable'] ?> </li>
                    <li class="list-group-item">Telefono del responsable <?= $paciente['telefono_responsable'] ?> </li>

                </ul>
            </div>



        </div>
    </main>