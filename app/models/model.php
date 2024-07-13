<?php
namespace app\models;
use app\database\conexao;


class model{

    public static function  getnoticias(){
        try{
            $conexao =new conexao;
            $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $stmt=$conexao->prepare("select * from noticias order by id desc;");
            $stmt->execute();
            return  $stmt-> fetchALL(\PDO::FETCH_ASSOC);
        }catch(\Exception $e){
            echo "".$e->getMessage();
        }
    }
    public static function  getcategorias(){
        try{
            $conexao =new conexao;
            $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $views=$conexao->query("SELECT tipo, SUM(visualizacoes) AS visualizacoes FROM noticias GROUP BY tipo; order by tipo asc;");
            return $views->fetchAll(\PDO::FETCH_ASSOC);
        }catch(\Exception $e){
            echo "".$e->getMessage();
        }
    }
    public static function  gettiponoticia($tipo){
        try{
            $conexao =new conexao;
            $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            //addslashes($tipo);
            $stmt=$conexao->prepare("select * from noticias where tipo=:tipo;");
            $stmt->bindParam(':tipo',$tipo);
            $stmt->execute();
            return $stmt-> fetchAll(\PDO::FETCH_ASSOC);
        }catch(\Exception $e){
            echo "".$e->getMessage();
        }
    }

    public static function  getnoticiaespecifica($tipo,$titulo){
        try{
            $conexao =new conexao;
            $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            //addslashes($tipo);
            $titulo=substr($titulo,0,25);
            $stmttags = $conexao->prepare("SELECT * FROM noticias WHERE replace(replace(titulo,' ','-'),',','e') LIKE :titulo");
            $titulo_like = '%' . $titulo . '%';
            $stmttags->bindParam(':titulo', $titulo_like);
            $stmttags->execute();
            $tags=$stmttags->fetchAll(\PDO::FETCH_ASSOC);
            $id=$tags[0]['id'];
            $conexao->query("INSERT INTO noticias (id,visualizacoes) VALUES ($id,1) ON DUPLICATE KEY UPDATE visualizacoes = visualizacoes + 1;");
            $stmt=$conexao->prepare("select * from noticias where tipo=:tipo;"); 
            $stmt->bindParam(':tipo',$tipo); 
            $stmt->execute();
            return [$stmt-> fetchAll(\PDO::FETCH_ASSOC),$tags];
        }catch(\Exception $e){
            echo "".$e->getMessage();
        }
    }

    public static function search($titulo){
        try{
            $conexao =new conexao;
            $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $search=$conexao->prepare("SELECT * FROM noticias WHERE MATCH(titulo, descricao,tipo,author) AGAINST(:titulo IN NATURAL LANGUAGE MODE);");
            $search->bindParam(':titulo',$titulo);
            $search->execute();
            return [$search->fetchAll(),$titulo];

        }
        catch(\Exception $e){
            echo $e->getMessage();
        }
    }
    public static function contato(){
        $texto = $_POST["texto"];
        
    }
}