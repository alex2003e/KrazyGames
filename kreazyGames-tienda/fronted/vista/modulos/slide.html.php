
<!--=====================================
		  SLIDESHOW
======================================-->
<div class="container-fluid" id="slide">
	
	<div class="row">
		
		<!--=====================================
				DIAPOSITIVAS
		======================================-->
		<ul>

			<?php

				$slide = ControladorSlide::ctrMostrarSlide();

			

			  ?>

		<!-- SLIDE 1 -->
		
			<li>
				
				<img src="http://localhost:8080/vista/vistas/img/slide/default/fondo2.jpg">

				<div class="slideOpciones slideOpcion1">
					
					<img class="imgProducto" src="http://localhost:8080/vista/vistas/img/slide/slide1/tarjetasLocas.png" style="top:5%; right:10%; height:90%; width:40%">

					<div class="textosSlide" style="top:20%; left:10%; width:40%">
						
						<h1 style="color:#333; font-size:2px";>Lorem Ipsum</h1>

						<h2 style="color:#777">Lorem ipsum dolor sit</h2>

						<h3 style="color:#888">Lorem ipsum dolor sit</h3>

						<a href="#">
							
							<button class="btn btn-default backColor text-uppercase">

							VER PRODUCTO <span class="fa fa-chevron-right"></span>

							</button>

						</a>

					</div>	

				</div>

			</li>	

			<!-- SLIDE 2 -->
		
			<li>
				
				<img src="http://localhost:8080/vista/vistas/img/slide/default/fondo2.jpg">

				<div class="slideOpciones slideOpcion2">
					
					<img class="imgProducto" src="http://localhost:8080/vista/vistas/img/slide/slide2/riego.png" style="top:5%; left:15%; width:25%">

					<div class="textosSlide" style="top:15%; right:15%; width:40%">
						
						<h1 style="color:#333">Lorem Ipsum</h1>

						<h2 style="color:#777">Lorem ipsum dolor sit</h2>

						<h3 style="color:#888">Lorem ipsum dolor sit</h3>

						<a href="#">
							
							<button class="btn btn-default backColor text-uppercase">

							VER PRODUCTO <span class="fa fa-chevron-right"></span>

							</button>

						</a>

					</div>	

				</div>

			</li>	


		</ul>

		<!--=====================================
		PAGINACIÓN
		======================================-->

		<ol id="paginacion">

        	<li item="1"><span class="fa fa-circle"></span></li>
			<li item="2"><span class="fa fa-circle"></span></li>

		</ol>	

		<!--=====================================
		FLECHAS
		======================================-->	

		<div class="flechas" id="retroceder"><span class="fa fa-chevron-left"></span></div>
		<div class="flechas" id="avanzar"><span class="fa fa-chevron-right"></span></div>

	</div>

</div>

<center>
	
	<button id="btnSlide" class="backColor">
		
			<i class="fa fa-angle-up"></i>

	</button>

</center>