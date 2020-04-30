<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Puppy Hour</title>

        <!--Favicon-->
        <link rel="icon" href="img/logo.png" sizes="16x16">

        <!--CSS-->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/signup-form.css">

        <!--JQuery-->
        <script src="jquery/jquery-3.4.1.js"></script>

        <!--Jquery Functions-->
        <script src="jquery/functions.js"></script>

        <!--Bootstrap-->
        <link rel="stylesheet" href="bootstrap/bootstrap-4.4.1/css/bootstrap.min.css">
        <script href="bootstrap/bootstrap-4.4.1/js/bootstrap.min.js"></script></script>
    </head>
    <body>

        <!--NAVBAR-->
        <nav class="menu">
            <a href="#cover" class="brand"><img id="puppy-hour-logo" src="img/logo.png"></a>
            <h3 id="logo-text">Puppy Hour</h3>
            <ul class="nav justify-content-end">
                <li class="nav-item"><a href="#cover">home</a></li>
                <li class="nav-item"><a href="#sobre">sobre</a></li>
                <li class="nav-item"><a href="#services">serviços</a></li>
                <li class="nav-item"><a id="signup-open" href="#">cadastramento</a></li>
                <li class="nav-item"><a id="menu-contato" href="#contato">contato</a></li>
                <li class="nav-item"><a id="menu-contato" href="dashboard_login.html">Entrar</a></li>
            </ul>
        </nav>
        








        <!--SIGNUP FORM-->
        <div class="signup-form">
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <div class="signup-form-container">
                        <h1>Cadastramento</h1>
                        <hr>
                        <br>
                        
                        <!--CONTACT FORM-->
                    <form action="processa_cadastro.php" method="POST" class="contact-form">
                        <!--NAME INPUT-->
                        <h4>Informações do pet</h4>
                        <br>
                        <input type="text" name="nomepet" placeholder="Nome do pet" class="form-control"><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <!--BREED INPUT-->
                                <input type="text" name="raca" placeholder="Raça" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <!--WEIGHT INPUT-->
                                <input type="number" name="peso" placeholder="Peso (kg)" class="form-control">
                            </div>
                        </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5>Vacinas em dia?</h5>
                                    <ul class="signup-form-options">
                                        <li><input checked="false" type="checkbox">Sim</li>
                                        <li><input checked="false" type="checkbox">Não</li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
                                    <h5>Restrição/Doença?</h5>
                                    <ul class="signup-form-options">
                                        <li><input checked="false" type="checkbox" class="restrition-yes-checkbox">Sim</li>
                                        <input id="restrition-description" type="text" class="form-control" placeholder="Qual?">
                                        <li><input checked="false" type="checkbox">Não</li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
                                    <h5>Alergia(s)</h5>
                                    <ul class="signup-form-options">
                                        <li><input checked="false" type="checkbox" class="alergic-yes-checkbox">Sim</li>
                                        <input id="alergic-description" type="text" class="form-control" placeholder="Qual? ( ou quais?)">
                                        <li><input checked="false" type="checkbox">Não</li>
                                    </ul>
                                </div>
                            </div>
                            <br>
    
                            <h4>Comportamento</h4>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    <p>Calmo</p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="slide-container">
                                        <input type="range" min="0" max="100"  id="my-range">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p>Agressivo</p>
                                </div>
                            </div>
                        <br>
                        <h4>Informações do dono</h4>
                        <br>
                        <!--NAME INPUT-->
                        <input type="text" name="nomedono" placeholder="nome do dono" class="form-control">
                        <br>
                        <!--ADDRESS INPUT-->
                        <input type="text" name="endereco" placeholder="Endereço" class="form-control"><br>
                        <!--TEL INPUT-->
                        <input type="tel" name="tell" placeholder="Telefone" class="form-control"></textarea>
                        <br>
                        <input type="email" name="email" placeholder="E-mail" class="form-control"></textarea>
                        <br>

                        <h5>Formas de pagamento</h5>
                        <ul class="signup-form-options">
                            <li>Dinheiro</li>
                            <li>Débito</li>
                            <li>Crédito (x2)</li>
                            <li>Boleto</li>
                        </ul>

                        <input id="btn-enviar-form" type="submit" class="btn btn-primary btn-lg" value="Enviar">
                    </form>

                        

                    </div>
                </div>
                <div class="col-sm-4">
                    <img class="close-button-image" src="img/close.png">
                </div>
            </div>
        </div>









        <!--COVER-->
        <div id="cover" class="background-cover">
            <div class="cover-info">
                <h1>Hora de dar <br> uma voltinha</h1>
                <div class="cover-divider"></div>

                <p>Faça o seu cadastro clicando no botão abaixo. Sinta-se à vontade para navegar pelo nosso site e descobrir um pouco mais da nossa empresa.</p>
                <a href="#" class="btn btn-light btn-lg" id="btn-cadastramento">Cadastramento</a>
            </div>
        </div>


        <section id="sobre" class="about-us">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Quem somos?</h1>
                    <p>Trazemos o serviço de passeio com os seus amiguinhos de quatro patas para quem não tem tempo disponível, afim de proporcionar uma melhor qualidade de vida àqueles que amamos. Nossa meta é trazer mais alegria, calma, saúde e bem-estar ao seu doguito. </p>

                    <a id="btn-saiba-mais-sobre" href="#" class="btn btn-primary btn-lg">Saiba mais</a>
                </div>
                <div class="col-sm-6">
                    <img id="about-us-dog-img" src="img/about-us-dog.png">
                </div>
            </div>
        </section>

        <!--EVENT SECTION-->
        <div class="event-section">
            <div class="event-section-filter">
                <div class="row">
                    <div class="col-sm-4">
                        <h1>Reunião de Pets - Em breve</h1>
                        <p>Local: <span>Em breve</span></p>
                        <a id="btn-cadastramento-event" href="#" class="btn btn-light btn-lg">Cadastramento</a>
                    </div>
                    <div class="col-sm-4">
                        <div id="divider"></div>
                    </div>
                    <div class="col-sm-4">
                        <h3>Contato:</h3>
                        <p>(11) 95309-5053 - Bárbara</p>
                        <p>(11) 96462-7245 - Gabriela</p>
                    </div>
                </div>
            </div>
        </div>

        <!--SERVICES-->
        <section id="services" class="our-services">
            <h1>Nossos serviços</h1>
            <p>Encontre aqui a melhor opção para você, qualquer dúvida entre em contato conosco <a id="help-contact" href="#contato">clicando aqui.</a></p>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <div id="card">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card-one-img"></div>
                            </div>
                            <div class="col-sm-8">
                                <h3>Passeio Semanal</h3>
                                <p>Vamos entrar numa rotina?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="card">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card-two-img"></div>
                            </div>
                            <div class="col-sm-8">
                                <h3>Treino de Passeio</h3>
                                <p>Com dificuldades de passear com seu doguinho? nós te ensinamos!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-6">
                    <div id="card">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card-three-img"></div>
                            </div>
                            <div class="col-sm-8">
                                <h3>Passeio Livre</h3>
                                <p>Quando seu dia estiver corrido, te damos uma mão... ou melhor, uma patinha.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="card">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card-four-img"></div>
                            </div>
                            <div class="col-sm-8">
                                <h3>Pacotes de Passeio</h3>
                                <p>Venha conhecer a melhor opção para você e seu pet!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr id="section-divider">

        <!--CONTATO-->
        <section id="contato" class="contact">
            <div class="row">
                <div class="col-sm-6">
                    <div id="contact-img"></div>
                </div>
                <div class="col-sm-6">
                    <!--SECTION TITLE-->
                    <h1>Contato</h1>
                    <br>

                    <!--CONTACT FORM-->
                    <form action="processa.php" method="POST" class="contact-form">
                        <!--NAME INPUT-->
                        <input type="text" name="nome" placeholder="nome" class="form-control" id="nome"><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <!--E-MAIL INPUT-->
                                <input type="email" name="email" placeholder="E-mail" class="form-control" id="email">
                            </div>
                            <div class="col-sm-6">
                                <!--PHONE INPUT-->
                                <input type="tel" name="tel" placeholder="Telefone" class="form-control" id="tel">
                            </div>
                        </div>
                        <br>
                        <!--SUBJECT INPUT-->
                        <input type="text" name="assunto" placeholder="Assunto" class="form-control" id="assunto"><br>
                        <!--MESSAGE INPUT-->
                        <textarea name="mensagem" cols="50" rows="10" placeholder="Digite sua mensagem aqui..." class="form-control" id="mensagem"></textarea>
                        <br>
                        <input id="btn-enviar-form" type="submit" class="btn btn-primary btn-lg" value="Enviar">
                    </form>
                </div>
            </div>
        </section>


        <!--RODAPÉ-->
        <footer class="rodape">    
            <h6>Todos os Direitos Reservados &copy; Puppy Hour, 2020</h6>
            <p>by: <a href="#">Bubble Dev</a></p>
        </footer>


    </body>
</html>