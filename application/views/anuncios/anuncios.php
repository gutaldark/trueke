<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
          
					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="<?php echo base_url('/'); ?>assets/img/post-2.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo base_url('/'); ?>assets/img/post-3.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo base_url('/'); ?>assets/img/post-4.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo base_url('/'); ?>assets/img/post-5.jpg" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="<?php echo base_url('/'); ?>assets/img/post-2.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo base_url('/'); ?>assets/img/post-3.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo base_url('/'); ?>assets/img/post-4.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo base_url('/'); ?>assets/img/post-5.jpg" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product details -->
					<div class="col-md-5">
            <div class="product-details" style="padding: 2%; border: 1px solid #d7d7d7;">
              <ul class="product-btns">
                Lima
                <a href="#"><i class="far fa-star estrellita"></i></a>
              </ul>
							<h2 class="text-center">Anuncio desde empresa</h2>
						
							<div>
								<h3 class="product-price"><sup>S/</sup>980.00</h3>
              </div>
              <p class="text-center">Descripción</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

							<div class="product-options">
              <label>
                <a href="#" style="text-decoration: none;">Envio a convenir</a>
              </label>
							</div>

							<ul class="product-btns">
								<li>	Edy Edy <a href="#"><i class="far fa-user"></i></a></li>
								<li>+51957907517 <i class="fa fa-phone"></i></li>
							</ul>

							<ul class="product-links">
								<li>edwinchg@hotmail.com</li>
							</ul>
						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<div class="tab-nav">
								<li>Reseñas</li>
							</div>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">

								<!-- tab  -->
									<div class="row">
										<!-- Reviews -->
										<div class="col-md-9">
											<div id="reviews">
												<ul class="reviews">
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
												</ul>
												<ul class="reviews-pagination">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">
												<form class="review-form">
													<input class="input" type="text" placeholder="Tu Nombre">
													<input class="input" type="email" placeholder="Tu Correo">
													<textarea class="input" placeholder="Tu Comentario"></textarea>
													<div class="input-rating">
														<span>Tu Calificación: </span>
														<div class="stars">
                            <input id="radio1" class="ex" type="radio" name="estrellas" value="5">
                              <label class="label" for="radio1">★</label>
                              <input id="radio2" class="ex" type="radio" name="estrellas" value="4">
                              <label class="label" for="radio2">★</label>
                              <input  id="radio3" class="ex" type="radio" name="estrellas" value="3">
                              <label class="label" for="radio3">★</label>
                              <input id="radio4" class="ex" type="radio" name="estrellas" value="2">
                              <label class="label" for="radio4">★</label>
                              <input id="radio5" class="ex" type="radio" name="estrellas" value="1">
                              <label class="label" for="radio5">★</label>	
                            </div>
													</div>
													<button class="primary-btn">Guardar</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								<!-- /tab  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Anuncios Relacionados</h3>
						</div>
					</div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="<?php echo base_url('/'); ?>assets/img/post-3.jpg" alt="">
								<div class="product-label">
									<span class="sale">-30%</span>
								</div>
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">Nombre del anuncio</a></h3>
								<h4 class="product-price"><sup>S/</sup>980.00</h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
										<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver anuncio</span></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /product -->

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="<?php echo base_url('/'); ?>assets/img/post-2.jpg" alt="">
								<div class="product-label">
									<span class="new">NEW</span>
								</div>
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">Nombre del anuncio</a></h3>
								<h4 class="product-price"><sup>S/</sup>950.00</h4>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="product-btns">
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver anuncio</span></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /product -->

					<div class="clearfix visible-sm visible-xs"></div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="<?php echo base_url('/'); ?>assets/img/post-4.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">Nombre del anuncio</a></h3>
								<h4 class="product-price"><sup>S/</sup>900.00</h4>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<div class="product-btns">
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver anuncio</span></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /product -->

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="<?php echo base_url('/'); ?>assets/img/post-2.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#">Nombre del anuncio</a></h3>
								<h4 class="product-price"><sup>S/</sup>910.00</h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver anuncio</span></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /product -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->