<?php

namespace App\Controllers;

class Home extends BaseController{

    public function index()
    {
    	echo view('front/head_view');
    	echo view('front/navbar');
        echo view('front/main');
    	echo view('front/footer');
        
        
    
    }

    public function contacto()
    {
        
    	echo view('front/head_view');
    	echo view('front/navbar');
        echo view('front/contacto');
    	echo view('front/footer');
    }

 public function terminosYusos()
    {
         $data['titulo']='Termonos y Usos';
        echo view('front/head_view');
        echo view('front/navbar');
        echo view('front/terminosYusos');
        echo view('front/footer');
    }
 public function quienes_somos()
    {

        echo view('front/head_view');
        echo view('front/navbar');
        echo view('front/quienessomos');
        echo view('front/footer');
    }
    public function comercializacion()
    {

        echo view('front/head_view');
        echo view('front/navbar');
        echo view('front/comercializacion');
        echo view('front/footer');
    }
}
