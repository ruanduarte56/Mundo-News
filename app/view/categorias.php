<?php echo "<script> document.getElementsByClassName('nav-link')[11].classList.add('active')
 document.getElementsByClassName('nav-link')[10].classList.remove('active');</script>"?>

<div style="margin-top:70px;" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Escolha um tema</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href=""></a>
                            </div>
                        </div>
                                   
                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
                        </div>                     
                        <?php for( $i= 0;$i< count($this->model);$i++){
                        echo "<div class='col-lg-6'>
                            <div class='d-flex align-items-center bg-white mb-3' style='height: 110px;'>
                                <img class='img-fluid' src='/img/{$this->model[$i]['tipo']}.jpeg' alt=''>
                                <div class='w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0'>
                                    <div class='mb-2'>
                                        <a class='badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2' href='/categoria/{$this->model[$i]['tipo']}'>{$this->model[$i]['tipo']}</a>
                                        <a class='text-body' href=''><small>{$this->model[$i]['visualizacoes']}vizualizações</small></a>
                                    </div>
                                    <a class='h6 m-0 text-secondary text-uppercase font-weight-bold' href='/categoria/{$this->model[$i]['tipo']}'>{$this->model[$i]['tipo']}</a>
                                </div>
                            </div>
                        </div>";}?>
                        
                    </div>
                </div>
           