<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\ResponseInterface;
use App\Models\ResidentesModel;
//use CodeIgniter\HTTP\ResponseInterface;

class Residentes extends BaseController
{
    //Retorna los datos devuelta 'withInput()' al formulario
    protected $helpers = ['form'];

    public function index()
    {
        return view('residentes/formulario');
    }
    public function actualiza()
    {
        return view ('residentes/actualiza');
    }
    public function new()
    {
        //return view('residentes/formulario');
    }
    public function guardar()
    {

        $rules = [
            'nombre'    => 'required',
            'apellidoP' => 'required',
            'numControl' => 'required|is_unique[residente.numControl]',
            'domicilio' => 'required',
            'correo'    => 'required|valid_email|is_unique[residente.correo]',
            'ciudad'    => 'required',
            'seguroSocial' => 'required',
            'numeroSS'  => 'required|is_unique[residente.numeroSS]',
            'celular'   => 'required|min_length[10]'
        ];
        //Si no se cumplen las reglas se regresan los datos al formulario y la lista de errores
        if (!$this->validate($rules)) {
            //return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
            return redirect()->to(base_url('residentes'))->withInput()->with('error', $this->validator->listErrors());
        }
        $post = $this->request->getPost([
            'nombre', 
            'apellidoP', 
            'apellidoM', 
            'numControl', 
            'domicilio', 
            'correo', 
            'ciudad', 
            'seguroSocial', 
            'numeroSS', 
            'telefono', 
            'celular', 
            'idprogramaEducativo'
        ]);
        $residentesModel = new ResidentesModel();
        $residentesModel->insert([
            'nombre'    => trim($post['nombre']),
            'apellidoP' => trim($post['apellidoP']),
            'apellidoM' => trim($post['apellidoM']),
            'numControl'=> trim($post['numControl']),
            'domicilio' => $post['domicilio'],
            'correo'    => $post['correo'],
            'ciudad'    => $post['ciudad'],
            'seguroSocial' => $post['seguroSocial'],
            'numeroSS'  => $post['numeroSS'],
            'telefono'  => $post['telefono'],
            'celular'   => $post['celular'],
            'idprogramaEducativo' => $post['idprogramaEducativo'],
        ]);

        /*
        * Crear evento despues de insertar datos
        if ($insertar) {
            return redirect()->to('/sara/eventos')->with('success', 'Evento creado correctamente.');
        } else {
           // return redirect()->back()->with('error', 'Hubo un error al crear el evento.');
           echo 'error', 'Hubo un error al crear el evento.';
        }
        */

        //$this->session->setFlashdata('mensaje', 'Registro Agregado.');
        //Si los datos se ingresaron correctamente regresa al formulario con un mensaje
        return redirect()->to(base_url('residentes'))->with('mensaje', 'Se actualizaron los datos');
        //$this->session->setFlashdata('mensaje','Registro Agregado.');
        //return redirect()->to('users')->with('success','well done!');
    }
}
