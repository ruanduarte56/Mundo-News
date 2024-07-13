"<div class='col-lg-12'>
                        <div class='row news-lg mx-0 mb-3'>
                            <div class='col-md-6 h-100 px-0'>
                                <img data-link='/categorias/$tipo/$titulo_uri' class='img-fluid h-100' src='{$this->model[0]}['fotoartigo1']}' style='object-fit: cover;'>
                            </div>
                            <div class='col-md-6 d-flex flex-column border bg-white h-100 px-0'>
                                <div class='mt-auto p-4'>
                                    <div class='mb-2'>
                                        <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                            href='/categoria/$tipo/$titulo_uri'>{$this->model[0]}['tipo']}}</a>
                                        <a class='text-body' href='/categoria/$tipo/$titulo_uri'><small>{$this->model[0]}['postatoem']}}</small></a>
                                    </div>
                                    <a class='h4 d-block mb-3 text-secondary text-uppercase font-weight-bold' href='/categoria/$tipo/$titulo_uri'>{$this->model[0]}['titulo']}}</a>
                                    <p class='m-0'>{$this->model[0]}['descricao']}}</p>
                                </div>
                                <div class='d-flex justify-content-between bg-white border-top mt-auto p-4'>
                                    <div class='d-flex align-items-center'>
                                        <img class='rounded-circle mr-2' src='{$this->model[0]}['fotoautor']}' width='25' height='25' alt=''>
                                        <small>{$this->model[0]}['author']}}</small>
                                    </div>
                                    <div class='d-flex align-items-center'>
                                        <small class='ml-3'><i class='far fa-eye mr-2'></i>12345</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>"