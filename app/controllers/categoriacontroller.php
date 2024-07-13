<?php
namespace app\controllers;
use app\controllers\controller;
use app\models\model;

class categoriacontroller extends controller{
   public function index() {
    $model=model::getcategorias();
    $this->carregar("categorias",$model);
   } 

   public function futebol($tipo,$titulo=null) {
    $this->paginasespecificas($tipo,$titulo);
   }

   public function saude($tipo,$titulo=null) {
      $this->paginasespecificas($tipo,$titulo);
     }
     public function politica($tipo,$titulo=null) {
      $this->paginasespecificas($tipo,$titulo);
     }

     public function economia($tipo,$titulo=null) {
      $this->paginasespecificas($tipo,$titulo);
     }
}