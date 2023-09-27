<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PacienteModel;

class Paciente extends BaseController
{

    public function index()
    {
        session()->set('key', 'value');
        $model = new PacienteModel();
        $data['pacientes'] = $model->findAll();
        echo view('header');
        echo view('contenido', $data);
        echo view('footer');
    }

    public function new()
    {
        echo view('header');
        echo view('pacientes/new');
        echo view('footer');
    }

    public function create()
    {
        $model = new PacienteModel();
        if ($this->validate('pacientes')) {
            $data = [
                'nombre' => $this->request->getPost('nombre'),
                'apellido_p' => $this->request->getPost('apellido_p'),
                'apellido_m' => $this->request->getPost('apellido_m'),
                'direccion' => $this->request->getPost('direccion'),
                'estado_civil' => $this->request->getPost('estado_civil'),
                'telefono' => $this->request->getPost('telefono'),
                'edad' => $this->request->getPost('edad'),
                'genero' => $this->request->getPost('genero'),
                'nombre_responsable' => $this->request->getPost('nombre_responsable'),
                'telefono_responsable' => $this->request->getPost('telefono_responsable'),


            ];

            $model->insert($data);
            return redirect()->to('paciente')->with('mensaje', 'Se registro correctamente');
        } else {
            //var_dump($this->validator->listErrors());
            session()->setFlashdata(['validation' => $this->validator->listErrors()]);

            // var_dump($validation);
            return redirect()->back()->withInput();
        }
    }


    public function show($id)
    {


        $model = new PacienteModel();
        $data['paciente'] = $model->find($id);

        //verifica si encontrol al paciente 
        if (!$data['paciente']) {
            // Puedes redirigir a una página de error o mostrar un mensaje
            return redirect()->to('/paciente')->with('error', 'Paciente no encontrado');
        }
        echo view('header');
        echo view('pacientes/show', $data);
        echo view('footer');
    }

    public function edit($id)
    {
        $model = new PacienteModel();
        $data['paciente'] = $model->find($id);

        echo view('header');
        echo view('pacientes/edit', $data);
        echo view('footer');
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $model = new PacienteModel();
        if ($this->validate('pacientes')) {
            $data = [
                'nombre' => $this->request->getPost('nombre'),
                'apellido_p' => $this->request->getPost('apellido_p'),
                'apellido_m' => $this->request->getPost('apellido_m'),
                'direccion' => $this->request->getPost('direccion'),
                'estado_civil' => $this->request->getPost('estado_civil'),
                'telefono' => $this->request->getPost('telefono'),
                'edad' => $this->request->getPost('edad'),
                'genero' => $this->request->getPost('genero'),
                'nombre_responsable' => $this->request->getPost('nombre_responsable'),
                'telefono_responsable' => $this->request->getPost('telefono_responsable'),

            ];
            $model->update($id, $data);
            return redirect()->to('paciente')->with('mensaje', 'Se actualizo el registro correctamente');
        } else {
            //var_dump($this->validator->listErrors());
            session()->setFlashdata(['validation' => $this->validator->listErrors()]);

            // var_dump($validation);
            return redirect()->back()->withInput();
        }

    }

    public function remove($id)
    {
        $model = new PacienteModel();
        $model->delete($id);
        session()->setFlashdata('mensaje', 'Registro eliminado correctamente');
        return redirect()->back();
        // return redirect()->to(base_url().'paciente');
    }
}