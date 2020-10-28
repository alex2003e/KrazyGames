<?php 

$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();

$social = ControladorPlantilla::ctrEstiloPlantilla();

$jsonRedesSociales = json_decode($social["redesSociales"],true);		


?>


    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Servicios</h2>
                <h3 class="section-subheading text-muted">Como empresa nos sentimos orgullosos de contar con nuestros usuarios.</h3>
            </div>
             <center>
            <div class="row text-center">
           
              <a class="col-md-4" href="http://localhost:8080/KRAZYGAMES/kreazyGames-tienda/fronted/" target="_blank">
                    <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                    <h4 class="my-3">Tienda</h4><br>
                    <p class="text-muted"> <Blockquote style = "border: none">Aquí podrás encontrar nuestros productos y conocer más sobre ellos.</Blockquote></p>
              </a>
            
            </div>
            </center> 
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Productos</h2>
                <h3 class="section-subheading text-muted">A continuación podrás encontrar nuestros productos más destacados.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link"  href="http://localhost:8080/KRAZYGAMES/kreazyGames-tienda/fronted/arjetas-locas" target="_blank">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid-1" src="<?php echo $servidor;?>vistas/img/portfolio/01-thumbnail.jpeg" alt=""
                        /></a>
                        <div class="portfolio-caption-1">
                            <div class="portfolio-caption-heading">Tarjetas Locas</div>
                            <div class="portfolio-caption-subheading text-muted">Da un paso hacia adelante en un ámbito saludable</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link"  href="http://localhost:8080/KRAZYGAMES/kreazyGames-tienda/fronted//hidroearth" target="_blank"><div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo $servidor;?>vistas/img/portfolio/02-thumbnail.jpg" alt=""
                        /></a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">HidroEarth</div>
                            <div class="portfolio-caption-subheading text-muted">Un hobby autosustentable y ecológico </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link"  href="http://localhost:8080/KRAZYGAMES/kreazyGames-tienda/fronted/" target="_blank">
                         <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid-2" src="<?php echo $servidor;?>vistas/img/portfolio/carrito.png" alt=""/></a>
                        <div class="portfolio-caption">
                            <h4 class="portfolio-caption-heading">Tienda</h4>
                            <div class="portfolio-caption-subheading text-muted">Aquí podrás encontrar más productos</div>
                        </div>
                    </div>
                </div>
               
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nuestra Empresa</h2>
                <h3 class="section-subheading text-muted"><Blockquote style = "border: none">Tenemos una gran trayectoria en nuestra empresa en donde llegaremos a un gran futuro</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $servidor;?>vistas/img/about/1.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Como surge nuestra empresa.</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted"><Blockquote style = "border: none">En vista a las crecientes problemáticas sociales, ecológicas y de salud hemos decidido crear un proyecto en el cual por medio de la programación y diversión llevemos a los usuarios soluciones y concientizarlos sobre estos problemas y que se puede hacer al respecto.</blockquote></p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $servidor;?>vistas/img/about/2.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Objetivos de nuestra empresa.</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted"><Blockquote style = "border: none">Nuestro proyecto busca que la sociedad sea más tolerante y más consiente de los efectos que pueden tener en el medio ambiente y así mismos como individuos, promoviendo un estilo de vida saludable, ecológico y empático.</blockquote> </p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $servidor;?>vistas/img/about/3.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Como lograremos nuestros objetivos. </h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted"> <Blockquote style = "border: none">Cada producto que lanzamos lleva un mensaje  que facilita a  los usuarios  tomar conciencia sobre los problemas que asechan sus vidas diarias como puede ser la obesidad, contaminación, drogadicción, homofobia, etc ; estos problemas deterioran la vida de cada uno como persona haciéndonos más inhumanos o afectando nuestra salud y la de los ecosistemas; con esto en mente le enseñamos a las personas consciente e inconscientemente a tratarlos.</blockquote></p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $servidor;?>vistas/img/about/4.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>¿ Por qué elegir nuestra empresa ?</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted"><Blockquote style = "border: none"> Nos enfocamos en la comodidad del usuario y que tenga una buena experiencia. </blockquote></p></div>
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
                <h3 class="section-subheading text-muted">Miramos hacia el futuro como equipo de trabajo.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4" >
                    <div class="team-member">
                     <a href="problematicas.html">   <img class="mx-auto rounded-circle" src="<?php echo $servidor;?>vistas/img/usuarios/40/944.jpg" alt="" /></a>
                        <h4>ALI ALEXANDER RAYO G.</h4>
                        <p class="text-muted">Diseñador principal</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                       <a href=""><img class="mx-auto rounded-circle" src="<?php echo $servidor;?>vistas/img/usuarios/40/foronda.jpg" alt="" /></a> 
                        <h4>DUBAN SNYDER FORONDA</h4>
                        <p class="text-muted">Comerciante  principal</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                     <a href=""><img class="mx-auto rounded-circle" src="<?php echo $servidor;?>vistas/img/usuarios/40/mono.png" alt="" /></a>  
                        <h4>JHON ESNEIDER MOLINA </h4>
                        <p class="text-muted">Desarrollador principal</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Puden contactarnos a nuestras redes para más información.</p></div>
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
                            <input class="form-control" id="name" type="text" placeholder="Nombre*" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Correo*" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Teléfono*" required="required" data-validation-required-message="Please enter your phone number." />
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

