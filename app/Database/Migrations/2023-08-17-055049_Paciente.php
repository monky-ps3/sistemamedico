<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paciente extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],            
            'curp'     => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            
            'nombre'     => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            
            'apellido_p'     => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            
            'apellido_m'     => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            
            'direccion'     => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            
            'estado_civil'     => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            
            'telefono'     => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],            
            'edad'       => [
                'type'       => 'INT',
                'constraint' => 3,
            ],
            'genero'     => [
                'type'       => 'ENUM',
                'constraint' => ['Masculino', 'Femenino', 'Otro'],
            ],
            
            'fecha_registro'     => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'nombre_responsable'     => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'telefono_responsable'     => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            // Agrega más columnas según tus necesidades
        ]);
    
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('paciente');
    }

    public function down()
    {
        //
    }
}
