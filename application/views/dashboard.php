<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Desaku | POS - Admin Sistem</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content>
	<meta name="author" content>

	<link href="<?=base_url()?>/assets/assets/css/vendor.min.css" rel="stylesheet">
	<link href="<?=base_url()?>/assets/assets/css/app.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="pace-top">

	<div id="app" class="app app-content-full-height app-without-sidebar app-without-header">

		<div id="content" class="app-content p-0">

			<div class="pos pos-with-menu pos-with-sidebar" id="pos">
				<div class="pos-container">

					<div class="pos-menu">

						<div class="logo">
							<a href="index.html">
								<div class="logo-img"><i class="fa fa-tree"></i></div>
								<div class="logo-text">Desaku</div>
							</a>
						</div>


						<div class="nav-container">
							<div class="h-100" data-scrollbar="true" data-skip-mobile="true">
								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a class="nav-link active" href="#" data-filter="dashboard">
											<i class="fa fa-fw fa-gauge"></i> Dashboard
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="#" data-filter="administrasi">
											<i class="fa fa-fw fa-laptop-file"></i> Administrasi
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#" data-filter="layanan">
											<i class="fa fa-fw fa-bell-concierge"></i> Pelayanan
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#" data-filter="burger">
											<i class="fa fa-fw fa-handshake-angle"></i> Bansos
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#" data-filter="pizza">
											<i class="fa fa-fw fa-newspaper"></i> Berita
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#" data-filter="drinks">
											<i class="fa fa-fw fa-user"></i> Profile
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#" data-filter="desserts">
											<i class="fa fa-fw fa-gear"></i> Settings
										</a>
									</li>
									<!-- <li class="nav-item">
										<a class="nav-link" href="#" data-filter="snacks">
											<i class="fa fa-fw fa-cookie-bite"></i> Snacks
										</a>
									</li> -->
								</ul>
							</div>
						</div>

					</div>


					<div class="pos-content">
						<div class="pos-content-container h-100">
							<div class="row gx-4">
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="meat">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-1.jpg)">
										</div>
										<div class="info">
											<div class="title">Grill Chicken Chop&reg;</div>
											<div class="desc">chicken, egg, mushroom, salad</div>
											<div class="price">$10.90</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="meat">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-2.jpg)">
										</div>
										<div class="info">
											<div class="title">Grill Pork Chop&reg;</div>
											<div class="desc">pork, egg, mushroom, salad</div>
											<div class="price">$12.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="meat">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-3.jpg)">
										</div>
										<div class="info">
											<div class="title">Capellini Tomato Sauce&reg;</div>
											<div class="desc">spaghetti, tomato, mushroom </div>
											<div class="price">$11.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="meat">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-4.jpg)">
										</div>
										<div class="info">
											<div class="title">Vegan Salad Bowl&reg;</div>
											<div class="desc">apple, carrot, tomato </div>
											<div class="price">$6.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="pizza">
									<div class="pos-product not-available">
										<div class="img" style="background-image: url(assets/img/pos/product-5.jpg)">
										</div>
										<div class="info">
											<div class="title">Hawaiian Pizza&reg;</div>
											<div class="desc">pizza, crab meat, pineapple </div>
											<div class="price">$20.99</div>
										</div>
										<div class="not-available-text">
											<div>Not Available</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="burger">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-17.jpg)">
										</div>
										<div class="info">
											<div class="title">Perfect Burger</div>
											<div class="desc">Dill pickle, cheddar cheese, tomato, red onion, ground
												chuck beef</div>
											<div class="price">$8.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="burger">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-6.jpg)">
										</div>
										<div class="info">
											<div class="title">Avocado Shake</div>
											<div class="desc">avocado, milk, vanilla</div>
											<div class="price">$3.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="burger">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-7.jpg)">
										</div>
										<div class="info">
											<div class="title">Coffee Latte</div>
											<div class="desc">espresso, milk</div>
											<div class="price">$2.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="burger">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-8.jpg)">
										</div>
										<div class="info">
											<div class="title">Vita C Detox Juice</div>
											<div class="desc">apricot, apple, carrot and ginger juice</div>
											<div class="price">$2.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="snacks">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-9.jpg)">
										</div>
										<div class="info">
											<div class="title">Pancake</div>
											<div class="desc">Non dairy, egg, baking soda, sugar, all purpose flour
											</div>
											<div class="price">$5.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="snacks">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-10.jpg)">
										</div>
										<div class="info">
											<div class="title">Mushroom soup</div>
											<div class="desc">Evaporated milk, marsala wine, beef cubes, chicken broth,
												butter</div>
											<div class="price">$3.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="snacks">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-11.jpg)">
										</div>
										<div class="info">
											<div class="title">Baked chicken wing</div>
											<div class="desc">Chicken wings, a1 steak sauce, honey, cayenne pepper</div>
											<div class="price">$6.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="meat">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-12.jpg)">
										</div>
										<div class="info">
											<div class="title">Veggie Spaghetti</div>
											<div class="desc">Yellow squash, pasta, roasted red peppers, zucchini</div>
											<div class="price">$12.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="desserts">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-13.jpg)">
										</div>
										<div class="info">
											<div class="title">Vanilla Ice Cream</div>
											<div class="desc">Heavy whipping cream, white sugar, vanilla extract</div>
											<div class="price">$3.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="desserts">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-15.jpg)">
										</div>
										<div class="info">
											<div class="title">Perfect Yeast Doughnuts</div>
											<div class="desc">Chocolate hazelnut spread, bread flour, doughnuts, quick
												rise yeast, butter</div>
											<div class="price">$2.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="desserts">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-14.jpg)">
										</div>
										<div class="info">
											<div class="title">Macarons</div>
											<div class="desc">Almond flour, egg whites, heavy cream, food coloring,
												powdered sugar</div>
											<div class="price">$4.99</div>
										</div>
									</a>
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="desserts">
									<a href="#" class="pos-product" data-bs-toggle="modal"
										data-bs-target="#modalPosItem">
										<div class="img" style="background-image: url(assets/img/pos/product-16.jpg)">
										</div>
										<div class="info">
											<div class="title">Perfect Vanilla Cupcake</div>
											<div class="desc">Baking powder, all purpose flour, plain kefir, vanilla
												extract</div>
											<div class="price">$2.99</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>


				

				</div>
			</div>


			<a href="#" class="pos-mobile-sidebar-toggler" data-toggle-class="pos-mobile-sidebar-toggled"
				data-toggle-target="#pos">
				<i class="fa fa-shopping-bag"></i>
				<span class="badge">5</span>
			</a>

		</div>


		<div class="theme-panel">
			<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i
					class="fa fa-cog"></i></a>
			<div class="theme-panel-content">
				<ul class="theme-list clearfix">
					<li><a href="javascript:;" class="bg-red" data-theme="theme-red" data-click="theme-selector"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
							data-bs-title="Red" data-original-title title>&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-pink" data-theme="theme-pink" data-click="theme-selector"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
							data-bs-title="Pink" data-original-title title>&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-orange" data-theme="theme-orange" data-click="theme-selector"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
							data-bs-title="Orange" data-original-title title>&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-yellow" data-theme="theme-yellow" data-click="theme-selector"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
							data-bs-title="Yellow" data-original-title title>&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-lime" data-theme="theme-lime" data-click="theme-selector"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
							data-bs-title="Lime" data-original-title title>&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-green" data-theme="theme-green" data-click="theme-selector"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
							data-bs-title="Green" data-original-title title>&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-teal" data-theme="theme-teal" data-click="theme-selector"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
							data-bs-title="Teal" data-original-title title>&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-cyan" data-theme="theme-cyan" data-click="theme-selector"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
							data-bs-title="Aqua" data-original-title title>&nbsp;</a></li>
					<li class="active"><a href="javascript:;" class="bg-blue" data-theme data-click="theme-selector"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
							data-bs-title="Default" data-original-title title>&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-purple" data-theme="theme-purple" data-click="theme-selector"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
							data-bs-title="Purple" data-original-title title>&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-indigo" data-theme="theme-indigo" data-click="theme-selector"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
							data-bs-title="Indigo" data-original-title title>&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-gray-600" data-theme="theme-gray-600"
							data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
							data-bs-container="body" data-bs-title="Gray" data-original-title title>&nbsp;</a></li>
				</ul>
				<hr class="mb-0">
				<div class="row mt-10px pt-3px">
					<div class="col-9 control-label text-body-emphasis fw-bold">
						<div>Dark Mode <span
								class="badge bg-theme text-theme-color ms-1 position-relative py-4px px-6px"
								style="top: -1px">NEW</span></div>
						<div class="lh-sm fs-13px fw-semibold">
							<small class="text-body-emphasis opacity-50">
								Adjust the appearance to reduce glare and give your eyes a break.
							</small>
						</div>
					</div>
					<div class="col-3 d-flex">
						<div class="form-check form-switch ms-auto mb-0 mt-2px">
							<input type="checkbox" class="form-check-input" name="app-theme-dark-mode"
								id="appThemeDarkMode" value="1">
							<label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
						</div>
					</div>
				</div>
			</div>
		</div>


		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

	</div>


	<div class="modal modal-pos fade" id="modalPosItem">
		<div class="modal-dialog modal-lg">
			<div class="modal-content border-0">
				<a href="#" data-bs-dismiss="modal" class="btn-close position-absolute top-0 end-0 m-4"></a>
				<div class="modal-pos-product">
					<div class="modal-pos-product-img">
						<div class="img" style="background-image: url(assets/img/pos/product-1.jpg)"></div>
					</div>
					<div class="modal-pos-product-info">
						<div class="fs-4 fw-semibold">Grill Chicken Chop</div>
						<div class="text-body text-opacity-50 mb-2">
							chicken, egg, mushroom, salad
						</div>
						<div class="fs-3 fw-bold mb-3">$10.99</div>
						<div class="d-flex mb-3">
							<a href="#" class="btn btn-secondary"><i class="fa fa-minus"></i></a>
							<input type="text" class="form-control w-50px fw-bold mx-2 text-center" name="qty"
								value="1">
							<a href="#" class="btn btn-secondary"><i class="fa fa-plus"></i></a>
						</div>
						<hr class="opacity-1">
						<div class="mb-2">
							<div class="fw-bold">Size:</div>
							<div class="option-list">
								<div class="option">
									<input type="radio" id="size3" name="size" class="option-input" checked>
									<label class="option-label" for="size3">
										<span class="option-text">Small</span>
										<span class="option-price">+0.00</span>
									</label>
								</div>
								<div class="option">
									<input type="radio" id="size1" name="size" class="option-input">
									<label class="option-label" for="size1">
										<span class="option-text">Large</span>
										<span class="option-price">+3.00</span>
									</label>
								</div>
								<div class="option">
									<input type="radio" id="size2" name="size" class="option-input">
									<label class="option-label" for="size2">
										<span class="option-text">Medium</span>
										<span class="option-price">+1.50</span>
									</label>
								</div>
							</div>
						</div>
						<div class="mb-2">
							<div class="fw-bold">Add On:</div>
							<div class="option-list">
								<div class="option">
									<input type="checkbox" name="addon[sos]" value="true" class="option-input"
										id="addon1">
									<label class="option-label" for="addon1">
										<span class="option-text">More BBQ sos</span>
										<span class="option-price">+0.00</span>
									</label>
								</div>
								<div class="option">
									<input type="checkbox" name="addon[ff]" value="true" class="option-input"
										id="addon2">
									<label class="option-label" for="addon2">
										<span class="option-text">Extra french fries</span>
										<span class="option-price">+1.00</span>
									</label>
								</div>
								<div class="option">
									<input type="checkbox" name="addon[ms]" value="true" class="option-input"
										id="addon3">
									<label class="option-label" for="addon3">
										<span class="option-text">Mushroom soup</span>
										<span class="option-price">+3.50</span>
									</label>
								</div>
								<div class="option">
									<input type="checkbox" name="addon[ms]" value="true" class="option-input"
										id="addon4">
									<label class="option-label" for="addon4">
										<span class="option-text">Lemon Juice (set)</span>
										<span class="option-price">+2.50</span>
									</label>
								</div>
							</div>
						</div>
						<hr class="opacity-1">
						<div class="row">
							<div class="col-4">
								<a href="#" class="btn btn-default fw-semibold mb-0 d-block py-3"
									data-bs-dismiss="modal">Cancel</a>
							</div>
							<div class="col-8">
								<a href="#"
									class="btn btn-theme fw-semibold d-flex justify-content-center align-items-center py-3 m-0">Add
									to cart <i class="fa fa-plus ms-2 my-n3"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="<?=base_url()?>/assets/assets/js/vendor.min.js"></script>
	<script src="<?=base_url()?>/assets/assets/js/app.min.js" ></script>


	<script src="<?=base_url()?>/assets/assets/js/demo/pos-customer-order.demo.js"></script>


	
	
	
</body>

</html>
