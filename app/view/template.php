
<?php //var_dump($model[0][0]['tags'])?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Mundo News</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
<link rel="manifest" href="/img/site.webmanifest">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#"><?php  setlocale(LC_TIME, 'pt_BR'); echo date("M/d/Y");?></a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Anucie</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="/contato">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body small" href="#">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                        <li class="nav-item">
                            <a target="_blank" class="nav-link text-body" href="https://twitter.com/intent/tweet?url=https://www.mundonews"><small class="fab fa-twitter"></small></a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" class="nav-link text-body" href="https://www.facebook.com/sharer/sharer.php?u=https://www.mundonews.com"><small class="fab fa-facebook-f"></small></a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" class="nav-link text-body" href="https://www.linkedin.com/sharing/share-offsite/?url=https://www.mundonews.com"><small class="fab fa-linkedin-in"></small></a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" class="nav-link text-body" href="#"><small class="fab fa-instagram"></small></a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" class="nav-link text-body" href="#"><small class="fab fa-google-plus-g"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-youtube"></small></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="/" class="navbar-brand p-0 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-uppercase text-primary">Mundo<span class="text-secondary font-weight-normal">News</span></h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <a href="https://htmlcodex.com"><img class="img-fluid" src="/img/ads-728x90.png" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">Mundo<span class="text-white font-weight-normal">News</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/categoria" class="nav-item nav-link">Categoria</a>
                    <a href="/exclusivos" class="nav-item nav-link">Exclusivo</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/home/politica-de-privacidade" class="dropdown-item">Politica de privacidade</a>
                            <a href="/home/termos-de-uso" class="dropdown-item">Termos de uso</a>
                            <a href="#" class="dropdown-item">Em breve</a>
                        </div>
                    </div>
                    <a href="/contato" class="nav-item nav-link">Contato</a>
                </div>
                <form action="/home/search/" method="get" class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
    <input name="search" type="text" class="form-control border-0" placeholder="Pesquise uma notícia" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
    <div class="input-group-append">
        <button class="input-group-text bg-primary text-dark border-0 px-3"><i class="fa fa-search"></i></button>
    </div>
</form>


            </div>
        </nav>
    </div>
    <!-- Navbar End -->

<?php 
$this->carregarview($view, $model,$titulo);
?>

<div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Siga Nos</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">facebook Mundo News</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Em breve</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Em breve</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Em breve</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Em breve</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Em breve</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->
                       <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Anúcio</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="/img/news-800x500-2.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- Ads End -->
                    <div id="exclusivas" class="mb-3"> 
                       <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Exclusivas</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                        <?php for($i=0;$i<count($this->model[0]);$i++){
                            $tipo=$this->model[0][$i]['tipo'];
                            $titulo_int=$this->model[0][$i]['titulo'];
                       $titulo=substr($titulo_int,0,40);         
                       $titulo.=strlen($titulo_int)>40 ? '...':''; 
                       $uri = str_replace(" ", '-', $titulo_int);
                       $uri = str_replace(",", "e", $uri); 
                       $uri = str_replace(
                           array('á', 'à', 'ã', 'â', 'é', 'ê', 'í', 'ó', 'ô', 'õ', 'ú', 'ü', 'ç', 'Á', 'À', 'Ã', 'Â', 'É', 'Ê', 'Í', 'Ó', 'Ô', 'Õ', 'Ú', 'Ü', 'Ç'),
                           array('a', 'a', 'a', 'a', 'e', 'e', 'i', 'o', 'o', 'o', 'u', 'u', 'c', 'A', 'A', 'A', 'A', 'E', 'E', 'I', 'O', 'O', 'O', 'U', 'U', 'C'),
                           $uri
                       );
                       $titulo_uri = preg_replace('/[^a-zA-Z0-9\s-]/', '', $uri);
                            if(isset($this->model[0][$i]['titulo'])){
                       echo "<div class='d-flex align-items-center bg-white mb-3' style='height: 110px;'>
                       <img style='width:110px; height:110px; object-fit:cover;' class='img-fluid' src='{$this->model[0][$i]['fotoartigo1']}' alt=''>
                       <div class='w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0'>
                           <div class='mb-2'>
                               <a class='badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2' href='/categoria/$tipo'>$tipo</a>
                               <a class='text-body' href=''><small>{$this->model[0][$i]['postatoem']}</small></a>
                           </div>
                           <a class='h6 m-0 text-secondary text-uppercase font-weight-bold' href='/categoria/$tipo/$titulo_uri'>$titulo</a>
                       </div>
                   </div>";}else{
                    echo "<script>document.getElementById('exclusivas').style.display='none' </script>";
                   }}?>
                            </div>
                            </div>
                            
                            <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <form  onsubmit="enviarnewslatter(event)" method="POST" class="bg-white text-center border border-top-0 p-3">
                            <p>Obtenha conteúdo informativo do mundo todo na palma de sua mão</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <input name="email" type="text" class="form-control form-control-lg" placeholder="Seu Email">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary font-weight-bold px-3">Obter</button>
                                </div>
                            </div>
                            <small id="res_new">noticias toda semana gratuitamente</small>
                        </form>
                    </div>
                    <!-- Newsletter End -->
                       <!-- Tags Start -->
                    <div id="tags" class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <?php if(isset($model[1][0]['tags'])){
                                    $tags=explode(',',$model[1][0]['tags']);
                                        foreach($tags as $tag){
                                echo "<a href='/home/search/?search=$tag' class='btn btn-sm btn-outline-secondary m-1'>$tag</a>";}}
                                else{
                                    echo "<script>document.getElementById('tags').style.display='none' </script>";;
                                }?> 
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->

        </div>
    </div>
</div>
</div>

<!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Nosso Contato</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>São Paulo</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+11 982732255</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>mundonews@gmail.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Siga nos</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Em breve</h5>
             <div class='mb-3'>
               <div class='mb-2'>
                   <a class='badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2' href='/categoria/$tipo'></a>
                   <a class='text-body' href=''><small></small></a>
               </div>
               <a class='small text-body text-uppercase font-weight-medium' href='/categoria/$tipo/$titulo_uri'></a>
           </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categorias</h5>
                <div class="m-n1">
                <a href="/categoria/politica" class="btn btn-sm btn-secondary m-1">Política</a>
                <a href="/categoria/empresas" class="btn btn-sm btn-secondary m-1">Empresas</a>
                <a href="/categoria/corporativas" class="btn btn-sm btn-secondary m-1">Corporativas</a>
                <a href="/categoria/saude" class="btn btn-sm btn-secondary m-1">Saúde</a>
                <a href="/categoria/esporte" class="btn btn-sm btn-secondary m-1">Esporte</a>
                <a href="/categoria/futebol" class="btn btn-sm btn-secondary m-1">Futebol</a>
                <a href="/categoria/games" class="btn btn-sm btn-secondary m-1">Games</a>
                <a href="/categoria/tecnologia" class="btn btn-sm btn-secondary m-1">Tecnologia</a>
                <a href="/categoria/comida" class="btn btn-sm btn-secondary m-1">Comida</a>
                <a href="/categoria/entretenimento" class="btn btn-sm btn-secondary m-1">Entretenimento</a>
                <a href="/categoria/viagens" class="btn btn-sm btn-secondary m-1">Viagens</a>
                <a href="/categoria/estilo-de-vida" class="btn btn-sm btn-secondary m-1">Estilo de Vida</a>
                <a href="/categoria/ciencias" class="btn btn-sm btn-secondary m-1">Ciências</a>
                <a href="/categoria/em-breve" class="btn btn-sm btn-secondary m-1">Em breve</a>
                <a href="/categoria/em-breve" class="btn btn-sm btn-secondary m-1">Em breve</a>
                <a href="/categoria/em-breve" class="btn btn-sm btn-secondary m-1">Em breve</a>
                <a href="/categoria/em-breve" class="btn btn-sm btn-secondary m-1">Em breve</a>
                <a href="/categoria/em-breve" class="btn btn-sm btn-secondary m-1">Em breve</a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Algumas fotos</h5>
                <div class="row">
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="/img/news-110x110-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="/img/news-110x110-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="/img/news-110x110-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="/img/news-110x110-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="/img/news-110x110-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="/img/news-110x110-1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">Mundo News</a>. Todos os direitos reservados. 
		
		<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
		Criado por <a href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/contatoajax.js"></script>
    <script src="/js/newslatterajax.js"></script>
    

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
    <script src="/js/linksfotos.js"></script>
</body>

</html>