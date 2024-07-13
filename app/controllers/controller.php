<?php
namespace App\Controllers;

use app\models\model;

class Controller {
    public $model;

    public function paginasespecificas($tipo,$titulo=null) {
        if($titulo==null){
        $model=model::gettiponoticia($tipo);
        $this->carregar('categoria',$model);
        return;
     }
     $model=model::getnoticiaespecifica($tipo,$titulo);
     $this->carregar("noticia",$model,$titulo);
  
       } 

    public function carregar($view, $model = array(),$titulo=null) {
        $this->model = $model;
        require __DIR__ . '/../view/template.php';
    }

    public function carregarView($view, $model = array(),$titulo=null) {
        extract($model);
        require __DIR__ . "/../view/{$view}.php";
    }
}
