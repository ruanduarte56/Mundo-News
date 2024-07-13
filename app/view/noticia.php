<?php
if(isset($model[1][0]["artigo"])){
$artigo=explode('///',$model[1][0]['artigo']);
if(isset($model[1][0]['fotoa2a'])){$f2=$model[1][0]['fotoa2a'];}
}else{
    echo "url invalida";
    exit;
}?>

<div class="container-fluid mt-5 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="<?php echo $model[1][0]['fotoartigo1']?>" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href=""><?= $model[1][0]['tipo']?></a>
                                <a class="text-body" href=""><?= $model[1][0]['postatoem']?></a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold"><?= $model[1][0]['titulo']?></h1>
                            <p><?= $artigo[0];?></p>
                            <p><?= $artigo[1];?></p>
                            <?php 
                            echo "<img class='img-fluid w-50 float-left mr-4 mb-2' src='{$model[1][0]['fotoa1a']}'>
                            <p>$artigo[2]</p>
                            <img class='img-fluid w-50 float-right mr-4 mb-2' src='{$model[1][0]['fotoa2a']}'>
                            ";
                            for($i=3;$i<count($artigo); $i++){
                                echo "<p>{$artigo[$i]}</p>";
                            }
                          ?>
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="<?php echo "{$model[1][0]['fotoautor']}";?>" width="25" height="25" alt="">
                                <span><?=$model[1][0]['author']?></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ml-3"><i class="far fa-eye mr-2"></i><?=$model[1][0]['visualizacoes']?></span>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- News Detail End -->
