<?php
namespace app\controllers;
use app\controllers\controller;
use app\models\model;

class contatocontroller extends controller{
   public function index() {
    $model=model::getnoticias();
    $this->carregar("contato",$model);
   } 
 
   public function envio() {
      
      // Verificar se o método de requisição é POST
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Verificar se os dados do formulário foram recebidos corretamente
          if (isset($_POST['nome'], $_POST['email'], $_POST['assunto'], $_POST['mensagem'])) {
              $nome = $_POST["nome"];
              $email = $_POST["email"];
              $assunto = $_POST["assunto"];
              $mensagem = $_POST["mensagem"];
              if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  if (strlen($mensagem) > 30) {
                      $nome_arquivo = "contatos.txt";
                      $caminho_arquivo = $nome_arquivo;
                      $dados = "Nome: $nome\n";
                      $dados .= "Email: $email\n";
                      $dados .= "Assunto: $assunto\n";
                      $dados .= "Mensagem: $mensagem\n\n";
                      file_put_contents($caminho_arquivo, $dados, FILE_APPEND);
                      exit;
                  } else {
                      http_response_code(400);
                  }
              } else {
                  http_response_code(400);
              }
          } else {
              http_response_code(400);
          }
      } else {
          http_response_code(400); 
      }

     
   }

   public function newslatter() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['email'])){
            $email=$_POST['email'];
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                file_put_contents("newslatter.txt", "$email\n", FILE_APPEND);
                exit;
            }else{
                http_response_code(400);
            }
        }
    }

   
 }

}