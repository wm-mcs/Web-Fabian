<?php
namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\TrayectoriaRepo;



class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $NoticiasRepo;
    protected $TrayectoriaRepo;
  

    public function __construct(ImgHomeRepo     $ImgHomeRepo,
                                EmpresaRepo     $EmpresaRepo, 
                                NoticiasRepo    $NoticiasRepo,
                                TrayectoriaRepo $TrayectoriaRepo )
    {
        $this->ImgHomeRepo     = $ImgHomeRepo;
        $this->EmpresaRepo     = $EmpresaRepo;
        $this->NoticiasRepo    = $NoticiasRepo;
        $this->TrayectoriaRepo = $TrayectoriaRepo;
        
    }

    public function get_home(Request $Request)
    {           
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos(); 
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        return view('paginas.paginas_personalizadas.fabian_pagina', compact('Empresa','blogs'));
    }


    public function get_servicios(Request $Request)
    {
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos(); 
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        return view('paginas.paginas_personalizadas.servicio_pagina', compact('Empresa','blogs'));
    }

    public function get_contacto(Request $Request)
    {
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos(); 
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        return view('paginas.paginas_personalizadas.contacto_pagina', compact('Empresa','blogs'));
    }

    public function get_quienes_somos(Request $Request)
    {
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos(); 
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        return view('paginas.paginas_personalizadas.quienes_somos_pagina', compact('Empresa','blogs'));
    }


}
