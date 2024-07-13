<?php
namespace app\controllers;
use app\controllers\controller;
use app\models\model;

class homecontroller extends controller{
   public function index() {
    $model=model::getnoticias();
    $this->carregar("home",$model);
   } 

   public function search() {
      $titulo = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';
      $model = Model::search($titulo); // Chama o método de pesquisa do modelo passando o título
      $this->carregar("search", $model); // Carrega a view 'search' com os dados do modelo
  }
  
}