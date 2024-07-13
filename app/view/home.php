<div class='container-fluid'>
            <div class='row'>
            <div class='col-lg-7 px-0'>
                <div class='owl-carousel main-carousel position-relative'>
                    <?php 
                    for($i=0;$i<4;$i++){
                        $tipo=$this->model[$i]['tipo'];
                        $titulo=$this->model[$i]['titulo'];             
                        $uri=new \app\models\uri;
                        $titulo_uri=$uri->uri()[$i];
                    echo "<div class='position-relative overflow-hidden' style='height: 500px;'>
                        <img data-link='/categoria/$tipo/$titulo_uri' class='img-fluid h-100' src='{$this->model[$i]['fotoartigo1']}' style='object-fit: cover;'>
                        <div class='overlay'>
                            <div class='mb-2'>
                                <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                    href='/categoria/$tipo'>$tipo</a>
                                <a class='text-white' href='#'>{$this->model[$i]['postatoem']}</a>
                            </div>
                            <a class='h2 m-0 text-white text-uppercase font-weight-bold'href='/categoria/$tipo/$titulo_uri''>$titulo</a>
                        </div>
                    </div>";}?>
                    </div>
                    </div>
                <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    <?php
                    for($i=1;$i<5;$i++){
                        $tipo=$this->model[$i]['tipo'];
                        $titulo_int=$this->model[$i]['titulo'];
                        $titulo=substr($titulo_int,0,50);         
                        $titulo.=strlen($titulo_int)>50 ? '...':''; 
                        $uri=new \app\models\uri;
                        $titulo_uri=$uri->uri()[$i];
                        echo "<div class='col-md-6 px-0'>
                        <div class='position-relative overflow-hidden' style='height: 250px;'>
                            <img data-link='/categoria/$tipo/$titulo_uri' class='img-fluid w-100 h-100' src='{$this->model[$i]['fotoartigo1']}' style='object-fit: cover;'>
                            <div class='overlay'>
                                <div class='mb-2'>
                                    <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                        href='/categoria/$tipo'>{$this->model[$i]['tipo']}</a>
                                    <a class='text-white' href='/categoria/$tipo/$titulo_uri'><small>{$this->model[$i]['postatoem']}</small></a>
                                </div>
                                <a class='h6 m-0 text-white text-uppercase font-weight-semi-bold' href='/categoria/$tipo/$titulo_uri'>$titulo</a>
                            </div>
                        </div>
                    </div>";}?>
                </div>
                </div>
                </div>
                </div>
        <!-- Breaking News Start -->
        <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">ultimas Noticias</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            <?php for( $i= 0;$i< 3;$i++){
                                $titulo=$this->model[$i]['titulo'];
                                $uri=new \app\models\uri;
                                $titulo_uri=$uri->uri()[$i];
                           echo "<div class='text-truncate'><a class='text-white text-uppercase font-weight-semi-bold' href='/categoria/$tipo/$titulo_uri'> $titulo</a></div>";}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->

    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Destaques</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                <?php
                 for($i=0;$i<5;$i++){
                    $tipo=$this->model[$i]['tipo'];
                     $titulo_int=$this->model[$i]['titulo'];
                        $titulo=substr($titulo_int,0,50);         
                        $titulo.=strlen($titulo_int)>50 ? '...':''; 
                    $uri=new \app\models\uri;
                    $titulo_uri=$uri->uri()[$i];
                    echo "<div class='position-relative overflow-hidden' style='height: 300px;'>
                    <img data-link='/categoria/$tipo/$titulo_uri' class='img-fluid h-100' src='{$this->model[$i]['fotoartigo1']}' style='object-fit: cover;'>
                    <div class='overlay'>
                        <div class='mb-2'>
                            <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                href='/categoria/$tipo'>{$this->model[$i]['tipo']}</a>
                            <a class='text-white' href='/categoria/$tipo/$titulo_uri'><small>{$this->model[$i]['postatoem']}</small></a>
                        </div>
                        <a class='h6 m-0 text-white text-uppercase font-weight-semi-bold' href='/categoria/$tipo/$titulo_uri'>$titulo</a>
                    </div>
                </div>";}?>

                </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Interresantes</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="/categoria/$tipo/$titulo_uri"></a>
                            </div>
                        </div>
                        <?php for($i=0;$i<4;$i++){
                            $tipo=$this->model[$i]['tipo'];
                             $titulo_int=$this->model[$i]['titulo'];
                        $titulo=substr($titulo_int,0,50);         
                        $titulo.=strlen($titulo_int)>50 ? '...':''; 
                            $descricao=substr($this->model[$i]['descricao'],0,90);
                            $uri=new \app\models\uri;
                            $titulo_uri=$uri->uri()[$i];
                        echo "<div class='col-lg-6'>
                        <div class='position-relative mb-3'>
                            <img data-link='/categoria/$tipo/$titulo_uri' class='img-fluid w-100' src='{$this->model[$i]['fotoartigo1']}' style='height: 273px !important; object-fit: cover;'>
                            <div class='bg-white border border-top-0 p-4'>
                                <div class='mb-2'>
                                    <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                        href='/categoria/$tipo'>{$this->model[$i]['tipo']}</a>
                                    <a class='text-body' href='/categoria/$tipo/$titulo_uri'><small>{$this->model[$i]['postatoem']}</small></a>
                                </div>
                                <a class='h4 d-block mb-3 text-secondary text-uppercase font-weight-bold' href='/categoria/$tipo/$titulo_uri'>$titulo</a>
                                <p class='m-0'>$descricao</p>
                            </div>
                            <div class='d-flex justify-content-between bg-white border border-top-0 p-4'>
                                <div class='d-flex align-items-center'>
                                    <img data-link='/categoria/$tipo/$titulo_uri' class='rounded-circle mr-2' src='{$this->model[$i]['fotoautor']}' width='25' height='25' alt=''>
                                    <small>{$this->model[$i]['author']}</small>
                                </div>
                                <div class='d-flex align-items-center'>
                                    <small class='ml-3'><i class='far fa-eye mr-2'></i>{$this->model[$i]['visualizacoes']}</small>        
                                </div>
                            </div>
                        </div>
                    </div>";}?>                       
                        <div class="col-lg-12 mb-3">
                            <a href="/categoria/$tipo/$titulo_uri"><img data-link='/categoria/$tipo/$titulo_uri' class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
                        </div>                     
                        <?php for( $i= 0;$i< 4;$i++){
                            $tipo=$this->model[$i]['tipo'];
                             $titulo_int=$this->model[$i]['titulo'];
                        $titulo=substr($titulo_int,0,50);         
                        $titulo.=strlen($titulo_int)>50 ? '...':''; 
                            $uri=new \app\models\uri;
                            $titulo_uri=$uri->uri()[$i];
                        echo "<div class='col-lg-6'>
                            <div class='d-flex align-items-center bg-white mb-3' style='height:110px'>
                                <img style='width:110px !important; height:110px !important; object-fit:cover;' data-link='/categoria/$tipo/$titulo_uri' class='img-fluid' src='{$this->model[$i]['fotoartigo1']}' alt=''>
                                <div class='w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0'>
                                    <div class='mb-2'>
                                        <a class='badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2' href='/categoria/$tipo'>{$this->model[$i]['tipo']}</a>
                                        <a class='text-body' href='/categoria/$tipo/$titulo_uri'><small>{$this->model[$i]['postatoem']}</small></a>
                                    </div>
                                    <a class='h6 m-0 text-secondary text-uppercase font-weight-bold' href='/categoria/$tipo/$titulo_uri'> $titulo</a>
                                </div>
                            </div>
                        </div>";}?>
                        <div class="col-lg-12 mb-3">
                            <a href="/categoria/$tipo/$titulo_uri"><img data-link='/categoria/$tipo/$titulo_uri' class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
                        </div>

                        <?php
                            $tipo=$this->model[0]['tipo'];
                            $titulo_int=$this->model[0]['titulo'];
                        $titulo=substr($titulo_int,0,70);         
                        $titulo.=strlen($titulo_int)>70 ? '...':''; 
                            $descricao=substr($this->model[0]['descricao'],0,50);
                           $uri=new \app\models\uri;
                           $titulo_uri=$uri->uri()[0];
                        echo "<div class='col-lg-12'>
                        <div class='row news-lg mx-0 mb-3'>
                            <div class='col-md-6 h-100 px-0'>
                                <img data-link='/categoria/$tipo/$titulo_uri' class='img-fluid h-100' src='{$this->model[0]['fotoartigo1']}' style='object-fit: cover;'>
                            </div>
                            <div class='col-md-6 d-flex flex-column border bg-white h-100 px-0'>
                                <div class='mt-auto p-4'>
                                    <div class='mb-2'>
                                        <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                            href='/categoria/$tipo/$titulo_uri'>{$this->model[0]['tipo']}</a>
                                        <a class='text-body' href='/categoria/$tipo/$titulo_uri'><small>{$this->model[0]['postatoem']}</small></a>
                                    </div>
                                    <a class='h4 d-block mb-3 text-secondary text-uppercase font-weight-bold' href='/categoria/$tipo/$titulo_uri'>$titulo</a>
                                    <p class='m-0'>$descricao</p>
                                </div>
                                <div class='d-flex justify-content-between bg-white border-top mt-auto p-4'>
                                    <div class='d-flex align-items-center'>
                                        <img class='rounded-circle mr-2' src='{$this->model[0]['fotoautor']}' width='25' height='25' alt=''>
                                        <small>{$this->model[0]['author']}</small>
                                    </div>
                                    <div class='d-flex align-items-center'>
                                        <small class='ml-3'><i class='far fa-eye mr-2'></i>{$this->model[0]['visualizacoes']}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>"?>
                        <?php for( $i= 0;$i< 4;$i++){
                            $tipo=$this->model[$i]['tipo'];
                             $titulo_int=$this->model[$i]['titulo'];
                        $titulo=substr($titulo_int,0,50);         
                        $titulo.=strlen($titulo_int)>50 ? '...':''; 
                            $uri=new \app\models\uri;
                            $titulo_uri=$uri->uri()[$i];
                        echo "<div class='col-lg-6'>
                            <div class='d-flex align-items-center bg-white mb-3' style='height: 110px;'>
                                <img style='width:110px !important; height:110px !important; object-fit:cover;' data-link='/categoria/$tipo/$titulo_uri' class='img-fluid' src='{$this->model[$i]['fotoartigo1']}' alt=''>
                                <div class='w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0'>
                                    <div class='mb-2'>
                                        <a class='badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2' href='/categoria/$tipo'>{$this->model[$i]['tipo']}</a>
                                        <a class='text-body' href='/categoria/$tipo/$titulo_uri'><small>{$this->model[$i]['postatoem']}</small></a>
                                    </div>
                                    <a class='h6 m-0 text-secondary text-uppercase font-weight-bold' href='/categoria/$tipo/$titulo_uri'> $titulo</a>
                                </div>
                            </div>
                        </div>";}?>
                        
                    </div>
                </div>
           