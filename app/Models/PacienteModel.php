<?php

namespace App\Models;

use CodeIgniter\Model;

class PacienteModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'paciente';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['curp','nombre','apellido_p','apellido_m','direccion','estado_civil','telefono','edad','genero','fecha_registro','nombre_responsable','telefono_responsable'];

  


}
