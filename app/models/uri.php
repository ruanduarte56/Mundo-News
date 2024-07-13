<?php
namespace app\models;
use app\models\model;

class uri extends model{
    public $uri=array();
    public function uri(){
        for ($i = 0; $i < count(model::getnoticias()); $i++) {
            $uri = model::getnoticias()[$i]['titulo'];
            $uri = str_replace(" ", '-', $uri);
            $uri = str_replace(",", "e", $uri); // Use $uri0 em vez de $uri aqui
            $uri = str_replace(
                array('á', 'à', 'ã', 'â', 'é', 'ê', 'í', 'ó', 'ô', 'õ', 'ú', 'ü', 'ç', 'Á', 'À', 'Ã', 'Â', 'É', 'Ê', 'Í', 'Ó', 'Ô', 'Õ', 'Ú', 'Ü', 'Ç'),
                array('a', 'a', 'a', 'a', 'e', 'e', 'i', 'o', 'o', 'o', 'u', 'u', 'c', 'A', 'A', 'A', 'A', 'E', 'E', 'I', 'O', 'O', 'O', 'U', 'U', 'C'),
                $uri
            );
            $uri = preg_replace('/[^a-zA-Z0-9\s-]/', '', $uri);
            array_push($this->uri, $uri);
        }
        
        return $this->uri;
        
    }

    public function uricategoria($tipo){
        for ($i = 0; $i < count(model::gettiponoticia($tipo)); $i++) {
            $titulo = model::gettiponoticia($tipo)[$i]['titulo'];
            $uri = str_replace(" ", '-', $titulo);
            $uri = str_replace(",", "e", $uri); 
            $uri = str_replace(
                array('á', 'à', 'ã', 'â', 'é', 'ê', 'í', 'ó', 'ô', 'õ', 'ú', 'ü', 'ç', 'Á', 'À', 'Ã', 'Â', 'É', 'Ê', 'Í', 'Ó', 'Ô', 'Õ', 'Ú', 'Ü', 'Ç'),
                array('a', 'a', 'a', 'a', 'e', 'e', 'i', 'o', 'o', 'o', 'u', 'u', 'c', 'A', 'A', 'A', 'A', 'E', 'E', 'I', 'O', 'O', 'O', 'U', 'U', 'C'),
                $uri
            );
            $uri = preg_replace('/[^a-zA-Z0-9\s-]/', '', $uri);
            array_push($this->uri, $uri);
        }
        return $this->uri;
    }
}

