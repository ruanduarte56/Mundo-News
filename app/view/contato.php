<?php echo "<script> document.getElementsByClassName('nav-link')[14].classList.add('active')
 document.getElementsByClassName('nav-link')[10].classList.remove('active')
 </script>"?>

<div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Contate nos para qualquer duvida</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <div class="mb-4">
							<div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Nosso escritório</h6>
                                </div>
                                <p class="m-0">São Paulo em breve</p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-envelope-open text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Nosso Email </h6>
                                </div>
                                <p class="m-0">mundonews@gmail.com</p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-phone-alt text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Nosso telefone</h6>
                                </div>
                                <p class="m-0">11 982732255</p>
                            </div>
                        </div>
                        <h6 class="text-uppercase font-weight-bold mb-3">Envie sua mensagem</h6>
                        <form method="POST" onsubmit="enviarFormulario(event)">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input minlength="3" name="nome" type="text" class="form-control p-4" placeholder="Seu nome" required="required"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control p-4" placeholder="Seu Email" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="assunto" type="text" class="form-control p-4" placeholder="Assunto" required="required"/>
                            </div>
                            <div class="form-group">
                                <textarea minlength="30" name="mensagem" class="form-control" rows="4" placeholder="Messagem" required="required"></textarea>
                            </div>
                            <p style="color:wheat; padding:10px;" id="resposta_erros"></p>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                    type="submit">Enviar Messagens</button>
                            </div>
                        </form>
                    </div>
                </div>
                