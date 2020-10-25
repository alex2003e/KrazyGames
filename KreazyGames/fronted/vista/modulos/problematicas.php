<?php 

$url = Ruta::ctrRuta();

$servidor = Ruta::ctrRutaServidor();

$social = ControladorPlantilla::ctrEstiloPlantilla();

$jsonRedesSociales = json_decode($social["redesSociales"],true);		


include "modulos/cabezote.Empresa.php";
?>

        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Problematícas</h2>
                    <h3 class="section-subheading text-muted">Tenemos una gran trayectoria en nuestra empresa en donde llegaremos a un gran futuro</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1"><div class="timeline-image"><img  data-toggle="modal" href="" class="rounded-circle img-fluid" src="<?php echo $servidor;?>vistas/img/about/obesidad_infantil.png" alt="" /></div></a>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Como surge nuestra empresa.</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">En vista a las crecientes problematícas sociales,ecológicas y de salud hemos decidido crear un proyecto en el cual por medio de la programación y diversión llevamos a los usuarios soluciones,  consientizándolos sobre estos problemas y que se puede hacer al respecto.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2"><div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $servidor;?>vistas/img/about/2.jpg" alt="" /></div></a>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Objetivos de nuestra empresa.</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Nuestro proyecto busca que la sociedad sea más tolerante y consciente de los efectos que pueden tener en el medio ambiente y así mismos como individuos, promoviendo un estilo de vida saludable, ecologíco y empático. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Se parte<br />de nuestra<br />¡historia!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sobre nosotros</h2>
                    <h3 class="section-subheading text-muted">Miramos hacia el futuro como quipo de trabajo.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo $servidor;?>vistas/img/usuarios/40/944.jpg" alt="" />
                            <h4>ALI ALEXANDER RAYO</h4>
                            <p class="text-muted"> Diseñador principal</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo $servidor;?>vistas/img/usuarios/40/foronda.jpg" alt="" />
                            <h4>DUBAN SNYDER FORONDA</h4>
                            <p class="text-muted"> Comerciante principal</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo $servidor;?>vistas/img/usuarios/40/mono.png
                            " alt="" />
                            <h4>JHON ESNEIDER MOLINA </h4>
                            <p class="text-muted"> Desarrollador principal </p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Puedes contáctarnos a nuestras redes para más información.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo $servidor;?>vistas/img/logos/envato.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo $servidor;?>vistas/img/logos/designmodo.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo $servidor;?>vistas/img/logos/themeforest.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo $servidor;?>vistas/img/logos/creative-market.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contáctenos</h2>
                    <h3 class="section-subheading text-muted">Déjanos tus dudas y visita nuestras redes.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Correo*" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Número*" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Escribe tu mensaje*" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">www.krazyGames.com</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right"><a class="mr-3" href="#!">Derechos reservados </a><a href="#!">Términos de Uso</a></div>
                </div>
            </div>
        </footer>
       
        <?php
        
        include"modulos/footer.php";
        
        ?>
</body>
</html>