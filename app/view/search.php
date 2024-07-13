<?php 
if(!isset($this->model[0][0]['titulo'])){
        echo "noticia não encontrada";
        exit;
    }
 ?>

<div class="container-fluid mt-5 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Tópicos sobre <?=$model[1]?></h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="/categoria/$tipo/$titulo_uri"></a>
                            </div>
                        </div>
                        <?php for($i=0;$i<count($this->model[0]);$i++){
                            $tipo=$this->model[0][$i]['tipo'];
                             $titulo_int=$this->model[0][$i]['titulo'];
                        $titulo=substr($titulo_int,0,50);         
                        $titulo.=strlen($titulo_int)>50 ? '...':''; 
                            $descricao=substr($this->model[0][$i]['descricao'],0,90);
                            $uri = str_replace(" ", '-', $titulo_int);
                            $uri = str_replace(",", "e", $uri); 
                            $uri = str_replace(
                                array('á', 'à', 'ã', 'â', 'é', 'ê', 'í', 'ó', 'ô', 'õ', 'ú', 'ü', 'ç', 'Á', 'À', 'Ã', 'Â', 'É', 'Ê', 'Í', 'Ó', 'Ô', 'Õ', 'Ú', 'Ü', 'Ç'),
                                array('a', 'a', 'a', 'a', 'e', 'e', 'i', 'o', 'o', 'o', 'u', 'u', 'c', 'A', 'A', 'A', 'A', 'E', 'E', 'I', 'O', 'O', 'O', 'U', 'U', 'C'),
                                $uri
                            );
                            $titulo_uri = preg_replace('/[^a-zA-Z0-9\s-]/', '', $uri);
                        echo "<div class='col-lg-6'>
                        <div class='position-relative mb-3'>
                            <img data-link='/categoria/$tipo/$titulo_uri' class='img-fluid w-100' src='{$this->model[0][$i]['fotoartigo1']}' style='height: 273px !important; object-fit: cover;'>
                            <div class='bg-white border border-top-0 p-4'>
                                <div class='mb-2'>
                                    <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                        href='/categoria/$tipo'>{$this->model[0][$i]['tipo']}</a>
                                    <a class='text-body' href='/categoria/$tipo/$titulo_uri'><small>{$this->model[0][$i]['postatoem']}</small></a>
                                </div>
                                <a class='h4 d-block mb-3 text-secondary text-uppercase font-weight-bold' href='/categoria/$tipo/$titulo_uri'>$titulo</a>
                                <p class='m-0'>$descricao</p>
                            </div>
                            <div class='d-flex justify-content-between bg-white border border-top-0 p-4'>
                                <div class='d-flex align-items-center'>
                                    <img data-link='/categoria/$tipo/$titulo_uri' class='rounded-circle mr-2' src='{$this->model[0][$i]['fotoautor']}' width='25' height='25' alt=''>
                                    <small>{$this->model[0][$i]['author']}</small>
                                </div>
                                <div class='d-flex align-items-center'>
                                    <small class='ml-3'><i class='far fa-eye mr-2'></i>{$this->model[0][$i]['visualizacoes']}</small>        
                                </div>
                            </div>
                        </div>
                    </div>";}?>                       

</div>
</div>