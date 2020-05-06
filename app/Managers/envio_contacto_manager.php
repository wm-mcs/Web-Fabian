<?php  
namespace App\Managers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Managers\ManagerBase;

/**
* 
*/
class envio_contacto_manager extends ManagerBase 
{


  public function getRules()
  {
    $rules = [
      'name'      => 'required|regex:/^[A-Za-zÑñÁáÉéÍíÓóÚúÜü ]{1,50}$/',
      'email'     => 'required|email',
      'mensaje'   => 'required'
             ];

    return $rules;
  }
 
  
  
  
}