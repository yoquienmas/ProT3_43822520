<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuarios_model;

class Login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
      
        $dato['titulo'] = 'Iniciar Sesión';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login'); // Asegurate que este sea el path real
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuarios_model();

        // Datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

    
        $data = $model->where('email', $email)->first();
        
        if ($data) {
            $pass = $data['pass'];
            $ba = $data['baja'];

            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/Login_controller');
            }

            if (password_verify($password, $pass)) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre'     => $data['nombre'],
                    'apellido'   => $data['apellido'],
                    'email'      => $data['email'],
                    'usuario'    => $data['usuario'],
                    'perfil_id'  => $data['perfil_id'],
                    'logged_in'  => TRUE
                ];
                
                $session->set($ses_data);
                $session->setFlashdata('msg', '¡Bienvenido!');
                return redirect()->to('/panel');
            } else {
                $session->setFlashdata('msg', 'Contraseña Incorrecta');
                return redirect()->to('/Login_controller');
            }
        } else {
            $session->setFlashdata('msg', 'No Existe el Email o es Incorrecto');
            return redirect()->to('/Login_controller');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
