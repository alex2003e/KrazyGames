<?php
$servidor = Ruta::ctrRutaServidor();
?>
<!--=====================================
		BANNER
======================================-->

<figure class="banner">

		

	<?php echo		'<img src= "' .$servidor.'/vistas/img/banner/web.jpg" class="img-responsive" width="100%">'
?>


	<div class="textoBanner textoCentro">
	
		<h1 style="color:#fff">consulta de alimentacion</h1>
		<h2 style="color:#fff"><b>50% off</b></h2>
		<h3 style="color:#fff">para mas informacion  : 31277782899</h3>

	</div>
</figure>


<!--=====================================
	BARRA  PRODUCTOS  GRATIS   
======================================-->

<div class="container-fluid   well  well-sm  barraProductos">
	<div class="container">
		
		<div class="row">
			
			<div class="col-xs-12 organizarProductos">
				
				<div class="btn-group pull-right">
					
					<button type="button" class="btn btn-default btnGrid" id="btnGrid0" data-toggle="tooltip" title="en cuadricula">
						
						<i class="fa fa-th" aria-hidden="true"></i>
						
						<span class="col-xs-0 pull-right">GRID</span>

					</button>

					<button type="button" class="btn btn-default btnList" id="btnList0" data-toggle="tooltip" title="en listado">
						
						<i class="fa fa-list" aria-hidden="true"></i>
						
						<span class="col-xs-0 pull-right">LST</span>

					</button>

				</div>

			</div>

		</div>


	</div>

</div>



<!--=====================================
	VITRINA DE PRODUCTOS GRATIS		
======================================-->
<div class="container-fluid   productos">
	
	<div class="container">
		
		<div class="row">

		<!--=====================================
				BARRA TITULO
		======================================-->

			<div class="col-xs-12 tituloDestacado" >
			
			   <!--=======================================================-->
			   <div class="col-sm-6 col-xs-12">
			   	
					<h1><small>PRODUCTOS GRATIS</small></h1>

			   </div>
			   <!--=======================================================-->
			   <div class="col-sm-6 col-xs-12">
			   		<a href="articulo-gratis">
			   			<button class="btn btn-default backColor pull-right" data-toggle="tooltip" title="ver mas productos">
			   		
			   				VER MAS <span class="fa fa-chevron-right"></span>

			   			</button>
					</a>
			   </div>
       		   <!--=======================================================-->			  
			</div>
			
			<div class="clearfix"></div>
			<hr>

		</div>
	       <!--=====================================
	       	   VITRINA DE PRODUCTOS EN CUADRICULA
	       ======================================-->
	       <ul class="grid0" style="display:none">
	       	   
	       	   <!-- producto 1-->

	       	   <li class="col-md-3 col-sm-6 col-xs-12">
	       	   	<!--=======================================================-->

	       	   	<figure>
	       	   		
	       	   		<a href="#" class="pixelProductos">
	       	   			<?php echo '<img src="'.$servidor.'vistas/img/productos/camisas/buso.png" class="img-responsive" width="100%"; height="100%">'
	       	   			?>
	       	   		</a>

	       	   	</figure>
				<!--=======================================================-->
				<h3>
					
					<small>
						
						<a href="#" class="pixalProducto">
							
						  BUSO 
						  <br>
						  <br>

						</a>

					</small>
				</h3>
	       	      <!--=======================================================-->

	       	    <div class="col-xs-6 precio">
	       	    	
	       	    	<h2><small>GRATIS</small></h2>

	       	    </div>
	       	        <!--=======================================================-->
	       	   	 <div class="col-xs-6 enlaces">
	       	    		<div class=" btn-group pull-right">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</button>
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    		</div>
	       	    
	       	     </div>
	       	   <br>
	       	   <br>
	    	     <br>
	       	     <br>
	       	   </li>
	       	   	       	   <!-- producto 2-->

	       	   <li class="col-md-3 col-sm-6 col-xs-12">
	       	   	<!--=======================================================-->

	       	   	<figure>
	       	   		
	       	   		<a href="#" class="pixelProductos">
	       	   			<?php echo '<img src="'.$servidor.'vistas/img/productos/camisas/saco.png" class="img-responsive" width="100%"; height="100%">'
	       	   			?>
	       	   		</a>

	       	   	</figure>
				<!--=======================================================-->
				<h3>
					
					<small>
						
						<a href="#" class="pixalProducto">
							
						  SACO  
						  <br>
						<span class="label label-warning fontSize">Nuevo</span>

						</a>

					</small>
				</h3>
	       	      <!--=======================================================-->

	       	    <div class="col-xs-6 precio">
	       	    	
	       	    	<h2><small>GRATIS</small></h2>

	       	    </div>
	       	        <!--=======================================================-->
	       	   	 <div class="col-xs-6 enlaces">
	       	    		<div class=" btn-group pull-right">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</button>
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    		</div>
	       	    
	       	     </div>
	       	     <br>
	       	     <br>
	       	     <br>
	       	     <br>
	       	   
	       	   </li>
	       	    	       	   <!-- producto 3-->

	       	   <li class="col-md-3 col-sm-6 col-xs-12">
	       	   	<!--=======================================================-->

	       	   	<figure>
	       	   		
	       	   		<a href="#" class="pixelProductos">
	       	   			<?php echo '<img src="'.$servidor.'vistas/img/productos/pocillo/pocilloBlanco.png" class="img-responsive" width="100%"; height="100%">'
	       	   			?>
	       	   		</a>

	       	   	</figure>
				<!--=======================================================-->
				<h3>
					
					<small>
						
						<a href="#" class="pixalProducto">
							
						  POCILLO
						  <br>
						  <br>

						</a>

					</small>
				</h3>
	       	      <!--=======================================================-->

	       	    <div class="col-xs-6 precio">
	       	    	
	       	    	<h2><small>GRATIS</small></h2>

	       	    </div>
	       	        <!--=======================================================-->
	       	   	 <div class="col-xs-6 enlaces">
	       	    		<div class=" btn-group pull-right">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</button>
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    		</div>
	       	    
	       	     </div>
	       	     <br>
	       	     <br>
	       	     <br>
	       	     <br>
	       	   </li>
	       	         	    	       	   <!-- producto 4-->

	       	   <li class="col-md-3 col-sm-6 col-xs-12">
	       	   	<!--=======================================================-->

	       	   	<figure>
	       	   		
	       	   		<a href="#" class="pixelProductos">
	       	   			<?php echo '<img src="'.$servidor.'vistas/img/productos/bolso/bolsoBlanco.png" class="img-responsive" width="100%"; height="100%">'
	       	   			?>
	       	   		</a>

	       	   	</figure>
				<!--=======================================================-->
				<h3>
					
					<small>
						
						<a href="#" class="pixalProducto">
							
						  	BOLSO  
						  	<br>
						  	<span class="label label-warning fontSize">Nuevo</span>

						</a>

					</small>
				</h3>
	       	      <!--=======================================================-->

	       	    <div class="col-xs-6 precio">
	       	    	
	       	    	<h2><small>GRATIS</small></h2>

	       	    </div>
	       	        <!--=======================================================-->
	       	   	 <div class="col-xs-6 enlaces">
	       	    		<div class=" btn-group pull-right">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</button>
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    	</div>
	       	    
	       	     </div>
	       	   
	       	   </li>


	        </ul>
	        
	        <!--=====================================
	        		VITRINA  DE PRODUCTOS EN LISTA
	        ======================================-->
	        
	        <ul class="list0">

	        	<!-- producto 1 -->
				
				<li class="col-xs-12">
					
					<!-- ============================================== -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12" >
						

						<figure>
						
							<a href="#" class="pixelProducto">
								<?php echo '<img src="'.$servidor.'vistas/img/productos/camisas/buso.png" class="img-responsive" width="100%"; height="100%">'
	       	   			    	 ?>
							</a>	

						</figure>
					
					</div>

					<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
						
						
						<h1 class="prodLista">
							
							<small>
								
								<a href="buso-blanco" class="pixelProducto" >BUSO BLANCO</a>

							</small>


						</h1>

						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tenetur eveniet rem laborum, nostrum officia deleniti mollitia, similique, explicabo commodi eius quo pariatur qui quam, beatae dignissimos. Quod, accusantium, quia!</p>


				    	<h2 class="prodListas"><small >GRATIS</small></h2> 	
						
						<div class=" btn-group pull-left">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</btutton>
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    	</div>

					</div>
					<!-- ==================================================== -->
					<div class="col-xs-12">

						<hr>

					</div>

					
				</li>

	        	<!-- producto 2 -->
				
				<li class="col-xs-12">
					
					<!-- ============================================== -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12" >
						

						<figure>
						
							<a href="#" class="pixelProducto">
								<?php echo '<img src="'.$servidor.'vistas/img/productos/camisas/saco.png" class="img-responsive" width="100%"; height="100%">'
	       	   			    	 ?>
							</a>	

						</figure>
					
					</div>

					<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
						
						
						<h1 class="prodLista">
							
							<small>
								
								<a href="buso-blanco" class="pixelProducto" >BUSO BLANCO</a>

							</small>


						</h1>

						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tenetur eveniet rem laborum, nostrum officia deleniti mollitia, similique, explicabo commodi eius quo pariatur qui quam, beatae dignissimos. Quod, accusantium, quia!</p>


				    	<h2 class="prodListas"><small >GRATIS</small></h2> 	
						
						<div class=" btn-group pull-left">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</btutton>
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    	</div>

					</div>
					<!-- ==================================================== -->
					<div class="col-xs-12">

						<hr>

					</div>

					
				</li>

	        	<!-- producto 3 -->
				
				<li class="col-xs-12">
					
					<!-- ============================================== -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12" >
						

						<figure>
						
							<a href="#" class="pixelProducto">
								<?php echo '<img src="'.$servidor.'vistas/img/productos/pocillo/pocilloBlanco.png" class="img-responsive" width="100%"; height="100%">'
	       	   			    	 ?>
							</a>	

						</figure>
					
					</div>

					<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
						
						
						<h1 class="prodLista">
							
							<small>
								
								<a href="buso-blanco" class="pixelProducto" >POCILLO BLANCO</a>

							</small>


						</h1>

						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tenetur eveniet rem laborum, nostrum officia deleniti mollitia, similique, explicabo commodi eius quo pariatur qui quam, beatae dignissimos. Quod, accusantium, quia!</p>


				    	<h2 class="prodListas"><small >GRATIS</small></h2> 	
						
						<div class=" btn-group pull-left">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</btutton>
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    	</div>

					</div>
					<!-- ==================================================== -->
					<div class="col-xs-12">

						<hr>

					</div>

					
				</li>				

	        	<!-- producto 4 -->
				
				<li class="col-xs-12">
					
					<!-- ============================================== -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12" >
						

						<figure>
						
							<a href="#" class="pixelProducto">
								<?php echo '<img src="'.$servidor.'vistas/img/productos/bolso/bolsoBlanco.png" class="img-responsive" width="100%"; height="100%">'
	       	   			    	 ?>
							</a>	

						</figure>
					
					</div>

					<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
						
						
						<h1 class="prodLista">
							
							<small>
								
								<a href="buso-blanco" class="pixelProducto" >BOLSO BLANCO</a>

							</small>


						</h1>

						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tenetur eveniet rem laborum, nostrum officia deleniti mollitia, similique, explicabo commodi eius quo pariatur qui quam, beatae dignissimos. Quod, accusantium, quia!</p>


				    	<h2 class="prodListas"><small >GRATIS</small></h2> 	
						
						<div class=" btn-group pull-left">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</btutton>
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    	</div>

					</div>
					<!-- ==================================================== -->
					<div class="col-xs-12">

						<hr>

					</div>

					
				</li>
	        </ul>	
	

	</div>


</div> 
<br> 
<br>


<!--=====================================
	BARRA  PRODUCTOS  MAS VISTOS 
======================================-->

<div class="container-fluid   well  well-sm  barraProductos">
	<div class="container">
		
		<div class="row">
			
			<div class="col-xs-12 organizarProductos">
				
				<div class="btn-group pull-right">
					
					<button type="button" class="btn btn-default btnGrid" id="btnGrid1" data-toggle="tooltip" title="en cuadricula">
						
						<i class="fa fa-th" aria-hidden="true"></i>
						
						<span class="col-xs-0 pull-right">GRID</span>

					</button>

					<button type="button" class="btn btn-default btnList" id="btnList1" data-toggle="tooltip" title="en listado">
						
						<i class="fa fa-list" aria-hidden="true"></i>
						
						<span class="col-xs-0 pull-right">LST</span>

					</button>

				</div>

			</div>

		</div>


	</div>

</div>
<!--=====================================
	VITRINA DE PRODUCTOS MAS VENDIDOS	
======================================-->
<div class="container-fluid   productos">
	
	<div class="container">
		
		<div class="row">

		<!--=====================================
				BARRA TITULO
		======================================-->

			<div class="col-xs-12 tituloDestacado" >
			
			   <!--=======================================================-->
			   <div class="col-sm-6 col-xs-12">
			   	
					<h1><small>LO MAS VENDIDOS</small></h1>

			   </div>
			   <!--=======================================================-->
			   <div class="col-sm-6 col-xs-12">
			   		<a href="lo-mas-vendido">
			   			<button class="btn btn-default backColor pull-right" data-toggle="tooltip" title="ver mas productos">
			   		
			   				VER MAS <span class="fa fa-chevron-right"></span>

			   			</button>
					</a>
			   </div>
       		   <!--=======================================================-->			  
			</div>
			<div class="clearfix"></div>
			<hr>

		</div>
	       <!--=====================================
	       	   VITRINA DE PRODUCTOS EN CUADRICULA
	       ======================================-->
	       <ul class="grid1" style="display: none;">
	       	   
	       	   <!-- producto 1-->

	       	   <li class="col-md-3 col-sm-6 col-xs-12">
	       	   	<!--=======================================================-->

	       	   	<figure>
	       	   		
	       	   		<a href="#" class="pixelProductos">
	       	   			<?php echo '<img src="'.$servidor.'vistas/img/productos/tarjetaLocas/tablero.png" class="img-responsive" width="100%"; height="100%">'
	       	   			?>
	       	   		</a>

	       	   	</figure>
				<!--=======================================================-->
				<h3>
					
					<small>
						
						<a href="#" class="pixalProducto">
							
						  TARJETAS LOCAS  <br>
				
								
						    <span class="label label-warning fontSize">40% off</span>
						    <span class="label label-warning fontSize">Nuevo</span>
						</a>

					</small>
				</h3>
	       	      <!--=======================================================-->

	       	    <div class="col-xs-6 precio">
	       	    	
	       	    	<h2>
	       	    		<small>
	       	    			
	       	    			<span class="oferta">COP $29.000</span>
							
	       	    		</small>

	       	    	</h2>

					<small class="desOferta"> $19.999</small>

	       	    </div>
	       	        <!--=======================================================-->
	       	   	 <div class="col-xs-6 enlaces">
	       	    		<div class=" btn-group pull-right">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						
						</button>
						
						<button type="button" class="btn btn-default btn-xs agregarCarrito" idPorducto="010" imagen="http://localhost:8080/vista/vistas/productos/tarjetaLocas/tablero.png" titulo="Tarjetas Locas" precio="19.999"
						tipo="fisico" peso="2" data-toggle="tooltip" title="agregar al carrito" >
							
							<i class="fa fa-shopping-cart" aria-hidden="true"></i
								>
						</button>
						
						
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    		</div>
	       	    
	       	     </div>

	       	     <br>
	       	     <br>
	       	     <br>
	       	     <br>
	       
	       	   
	       	   </li>
	       	   	       	   <!-- producto 2-->

	       	   <li class="col-md-3 col-sm-6 col-xs-12">
	       	   	<!--=======================================================-->

	       	   	<figure>
	       	   		
	       	   		<a href="#" class="pixelProductos">
	       	   			<?php echo '<img src="'.$servidor.'vistas/img/productos/cultiboHidroponico/cultivo.png" class="img-responsive" width="100%"; height="100%">'
	       	   			?>
	       	   		</a>

	       	   	</figure>
				<!--=======================================================-->
				<h3>
					
					<small>
						
						<a href="#" class="pixalProducto">
							
						  CULTIVO HIDROPONICO
						  <br>
						  <span class="label label-warning fontSize">Nuevo</span>

						</a>

					</small>
				</h3>
	       	      <!--=======================================================-->

	       	    <div class="col-xs-6 precio">
	       	    	
	       	    	<h2>
	       	    		<small> COP $49.999 </small>

	       	    	</h2>

	       	    </div>
	       	        <!--=======================================================-->
	       	   	 <div class="col-xs-6 enlaces">
	       	    		<div class=" btn-group pull-right">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="00"1  data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>

						</button>
						
						<button type="button" class="btn btn-default btn-xs agregarCarrito" idPorducto="020" imagen="http://localhost:8080/vista/vistas/productos/cultiboHidroponico/cultivo.png" titulo="Cultivo Hidroponico" precio="49.999"
						tipo="fisico" peso="2" data-toggle="tooltip" title="agregar al carrito" >
							
							<i class="fa fa-shopping-cart"></i
								>
						</button>
						
						<a href="#" class="pixalProducto">

							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    		</div>
	       	    
	       	     </div>
	       	     <br>
	       	     <br>
	       	     <br>
	       	     <br>
	       	   
	       	   </li>
	

	        </ul>
	         <!--=====================================
	        		VITRINA  DE PRODUCTOS EN LISTA
	        ======================================-->
	        
	        <ul class="list1">

	        	<!-- producto 1 -->
				
				<li class="col-xs-12">
					
					<!-- ============================================== -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12" >
						

						<figure>
						
							<a href="#" class="pixelProducto">
								<?php echo '<img src="'.$servidor.'vistas/img/productos/tarjetaLocas/tablero.png" class="img-responsive" width="100%"; height="100%">'
	       	   			    	 ?>
							</a>	

						</figure>
					
					</div>

					<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
						
						
						<h1 class="prodLista">
							
							<small>
								
								<a href="#" class="pixelProducto" >
								TARJETAS LOCAS

								<span class="label label-warning">Nuevo</span>
								<span class="label label-warning">40% off</span>


								</a>

							</small>


						</h1>

						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tenetur eveniet rem laborum, nostrum officia deleniti mollitia, similique, explicabo commodi eius quo pariatur qui quam, beatae dignissimos. Quod, accusantium, quia!</p>


				    	<h2 class="prodListas">
				    		<small >
				    		
				    		<strong class="oferta">COP 29.000</strong>
				    		

				    		</small>

				    		<small>19.999</small>

				    	</h2> 	
						
						<div class=" btn-group pull-left">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</btutton>
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    	</div>

					</div>
					<!-- ==================================================== -->
					<div class="col-xs-12">

						<hr>

					</div>

					
				</li>

	        	<!-- producto 2 -->
				
				<li class="col-xs-12">
					
					<!-- ============================================== -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12" >
						

						<figure>
						
							<a href="#" class="pixelProducto">
								<?php echo '<img src="'.$servidor.'vistas/img/productos/cultiboHidroponico/cultivo.png" class="img-responsive" width="100%"; height="100%">'
	       	   			    	 ?>
							</a>	

						</figure>
					
					</div>

					<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
						
						
						<h1 class="prodLista">
							
							<small>
								
								<a href="#" class="pixelProducto" >
								CULTIVO HIDROPONICO

								<span class="label label-warning">Nuevo</span>
								


								</a>

							</small>


						</h1>

						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tenetur eveniet rem laborum, nostrum officia deleniti mollitia, similique, explicabo commodi eius quo pariatur qui quam, beatae dignissimos. Quod, accusantium, quia!</p>


				    	<h2 class="prodListas">
				    		<small >
				    		
				    		<strong >COP 49.999</strong>
				    		

				    		</small>

				    		

				    	</h2> 	
						
						<div class=" btn-group pull-left">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</btutton>
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    	</div>

					</div>
					<!-- ==================================================== -->
					<div class="col-xs-12">

						<hr>

					</div>

					
				</li>

			</ul>
	</div>

</div>
<br> 
<br>


<!--=====================================
	BARRA  PRODUCTOS  MAS VENDIDOS  
======================================-->

<div class="container-fluid   well  well-sm  barraProductos">
	<div class="container">
		
		<div class="row">
			
			<div class="col-xs-12 organizarProductos">
				
				<div class="btn-group pull-right">
					
					<button type="button" class="btn btn-default btnGrid" id="btnGrid2" data-toggle="tooltip" title="en cuadricula">
						
						<i class="fa fa-th" aria-hidden="true"></i>
						
						<span class="col-xs-0 pull-right">GRID</span>

					</button>

					<button type="button" class="btn btn-default btnList" id="btnList2" data-toggle="tooltip" title="en listado">
						
						<i class="fa fa-list" aria-hidden="true"></i>
						
						<span class="col-xs-0 pull-right">LST</span>

					</button>

				</div>

			</div>

		</div>


	</div>

</div>
<!--=====================================
	VITRINA DE PRODUCTOS MAS VENDIDOS	
======================================-->
<div class="container-fluid   productos">
	
	<div class="container">
		
		<div class="row">

		<!--=====================================
				BARRA TITULO
		======================================-->

			<div class="col-xs-12 tituloDestacado" >
			
			   <!--=======================================================-->
			   <div class="col-sm-6 col-xs-12">
			   	
					<h1><small>LO MAS VISTO</small></h1>

			   </div>
			   <!--=======================================================-->
			   <div class="col-sm-6 col-xs-12">
			   		<a href="lo-mas-vendido">
			   			<button class="btn btn-default backColor pull-right" data-toggle="tooltip" title="ver mas productos">
			   		
			   				VER MAS <span class="fa fa-chevron-right"></span>

			   			</button>
					</a>
			   </div>
       		   <!--=======================================================-->			  
			</div>
			<div class="clearfix"></div>
			<hr>

		</div>
	       <!--=====================================
	       	   VITRINA DE PRODUCTOS EN CUADRICULA
	       ======================================-->
	       <ul class="grid2" style="display: none;">
	       	   
	       	   <!-- producto 1-->

	       	   <li class="col-md-3 col-sm-6 col-xs-12">
	       	   	<!--=======================================================-->

	       	   	<figure>
	       	   		
	       	   		<a href="#" class="pixelProductos">
	       	   			<?php echo '<img src="'.$servidor.'vistas/img/productos/tarjetaLocas/tablero.png" class="img-responsive" width="100%"; height="100%">'
	       	   			?>
	       	   		</a>

	       	   	</figure>
				<!--=======================================================-->
				<h3>
					
					<small>
						
						<a href="#" class="pixalProducto">
							
						  TARJETAS LOCAS  <br>
				
								
						    <span class="label label-warning fontSize">40% off</span>
						</a>

					</small>
				</h3>
	       	      <!--=======================================================-->

	       	    <div class="col-xs-6 precio">
	       	    	
	       	    	<h2>
	       	    		<small>
	       	    			
	       	    			<span class="oferta">COP $29.000</span>
							
	       	    		</small>

	       	    	</h2>

					<small class="desOferta"> $19.999</small>

	       	    </div>
	       	        <!--=======================================================-->
	       	   	 <div class="col-xs-6 enlaces">
	       	    		<div class=" btn-group pull-right">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						
						</button>
						
						<button type="button" class="btn btn-default btn-xs agregarCarrito" idPorducto="030" imagen="http://localhost:8080/vista/vistas/productos/tarjetaLocas/tablero.png" titulo="Tarjetas Locas" precio="19.999"
						tipo="fisico" peso="2" data-toggle="tooltip" title="agregar al carrito" >
							
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						</button>
						
						
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    		</div>
	       	    
	       	     </div>

	       	     <br>
	       	     <br>
	       	     <br>
	       	     <br>
	       
	       	   
	       	   </li>
	       	   	       	   <!-- producto 2-->

	       	   <li class="col-md-3 col-sm-6 col-xs-12">
	       	   	<!--=======================================================-->

	       	   	<figure>
	       	   		
	       	   		<a href="#" class="pixelProductos">
	       	   			<?php echo '<img src="'.$servidor.'vistas/img/productos/cultiboHidroponico/cultivo.png" class="img-responsive" width="100%"; height="100%">'
	       	   			?>
	       	   		</a>

	       	   	</figure>
				<!--=======================================================-->
				<h3>
					
					<small>
						
						<a href="#" class="pixalProducto">
							
						  CULTIVO HIDROPONICO
						  <br>
						  <span class="label label-warning fontSize">Nuevo</span>

						</a>

					</small>
				</h3>
	       	      <!--=======================================================-->

	       	    <div class="col-xs-6 precio">
	       	    	
	       	    	<h2>
	       	    		<small> COP $49.999 </small>

	       	    	</h2>

	       	    </div>
	       	        <!--=======================================================-->
	       	   	 <div class="col-xs-6 enlaces">
	       	    		<div class=" btn-group pull-right">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="00"1  data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>

						</button>
						
						<button type="button" class="btn btn-default btn-xs agregarCarrito" idPorducto="040" imagen="http://localhost:8080/vista/vistas/productos/cultiboHidroponico/cultivo.png" titulo="Cultivo Hidroponico" precio="49.999"tipo="fisico" peso="2" data-toggle="tooltip" title="agregar al carrito" >
							
							<i class="fa fa-shopping-cart"></i
								>
						</button>
						
						<a href="#" class="pixalProducto">

							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    		</div> 

	       	    
	       	     </div>
	       	     <br>
	       	     <br>
	       	     <br>
	       	     <br>
	       	   
	       	   </li>
	

	        </ul>

	         <!--=====================================
	        		VITRINA  DE PRODUCTOS EN LISTA
	        ======================================-->
	        
	        <ul class="list2">

	        	<!-- producto 1 -->
				
				<li class="col-xs-12">
					
					<!-- ============================================== -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12" >
						

						<figure>
						
							<a href="#" class="pixelProducto">
								<?php echo '<img src="'.$servidor.'vistas/img/productos/tarjetaLocas/tablero.png" class="img-responsive" width="100%"; height="100%">'
	       	   			    	 ?>
							</a>	

						</figure>
					
					</div>

					<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
						
						
						<h1 class="prodLista">
							
							<small>
								
								<a href="#" class="pixelProducto" >
								TARJETAS LOCAS

								<span class="label label-warning">Nuevo</span>
								<span class="label label-warning">40% off</span>


								</a>

							</small>


						</h1>

						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tenetur eveniet rem laborum, nostrum officia deleniti mollitia, similique, explicabo commodi eius quo pariatur qui quam, beatae dignissimos. Quod, accusantium, quia!</p>


				    	<h2 class="prodListas">
				    		<small >
				    		
				    		<strong class="oferta">COP 29.000</strong>
				    		

				    		</small>

				    		<small>19.999</small>

				    	</h2> 	
						
						<div class=" btn-group pull-left">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</btutton>
						
						<button type="button" class="btn btn-default btn-xs agregarCarrito" idPorducto="030" imagen="http://localhost:8080/vista/vistas/productos/tarjetaLocas/tablero.png" titulo="Tarjetas Locas" precio="19.999"
						tipo="fisico" peso="2" data-toggle="tooltip" title="agregar al carrito" >
							
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						</button>

						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    	</div>

					</div>
					<!-- ==================================================== -->
					<div class="col-xs-12">

						<hr>

					</div>

					
				</li>

	        	<!-- producto 2 -->
				
				<li class="col-xs-12">
					
					<!-- ============================================== -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12" >
						

						<figure>
						
							<a href="#" class="pixelProducto">
								<?php echo '<img src="'.$servidor.'vistas/img/productos/cultiboHidroponico/cultivo.png" class="img-responsive" width="100%"; height="100%">'
	       	   			    	 ?>
							</a>	

						</figure>
					
					</div>

					<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
						
						
						<h1 class="prodLista">
							
							<small>
								
								<a href="#" class="pixelProducto" >
								CULTIVO HIDROPONICO

								<span class="label label-warning">Nuevo</span>
								


								</a>

							</small>


						</h1>

						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tenetur eveniet rem laborum, nostrum officia deleniti mollitia, similique, explicabo commodi eius quo pariatur qui quam, beatae dignissimos. Quod, accusantium, quia!</p>


				    	<h2 class="prodListas">
				    		<small >
				    		
				    		<strong >COP 49.999</strong>
				    		

				    		</small>

				    		

				    	</h2> 	
						
						<div class=" btn-group pull-left">
	       	    		
						<button type="button" class="btn btn-default btn-xs deseos" idPorducto="001" data-toggle="tooltip" title="agregar a mi lista de deseos">
							

							<i class="fa fa-heart" aria-hidden="true"></i>
						</btutton>
						
						<button type="button" class="btn btn-default btn-xs agregarCarrito" idPorducto="040" imagen="http://localhost:8080/vista/vistas/productos/cultiboHidroponico/cultivo.png" titulo="Cultivo Hidroponico" precio="49.999"tipo="fisico" peso="2" data-toggle="tooltip" title="agregar al carrito" >
							
							<i class="fa fa-shopping-cart"></i
								>
						</button>
						<a href="#" class="pixalProducto">
							<button type="button" class="btn btn-default btn-xs " data-toggle="tooltip" title="ver producto">
								
								<i class="fa fa-eye" aria-hidden="true"></i>

							</button>

						</a>

	       	    	</div>

					</div>
					<!-- ==================================================== -->
					<div class="col-xs-12">

						<hr>

					</div>

					
				</li>

			</ul>
	</div>

</div>						