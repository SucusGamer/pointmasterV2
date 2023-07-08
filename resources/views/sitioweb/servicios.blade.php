<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="/images/llantera_icono.ico">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
		<title>Servicios</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		@include('sitioweb.header.navbar')
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
		<div class="hero">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<div class="intro-excerpt">
							<h1>Servicios</h1>
							<p class="mb-4">Contamos con servicio de rescate con camioneta equipada para poder hacer las reparaciones en el sitio</p>
							<p><a href="/tienda" class="btn btn-secondary me-2" style="color: white">Comprar ahora</a><a href="/acercade" class="btn btn-white-outline">Explorar</a></p>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="hero-img-wrap">
							<img src="images/llantera_logo.PNG" class="img-fluid" width="500">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Hero Section -->

		


		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				
				{{--<div class="row my-5">
					@foreach ($servicios as $services)
					<div class="col-6 col-md-6 col-lg-3 mb-4">

						<div class="feature">
							<div class="icon">
								<img src="{{ ('img/servicios/')."/".$services->imagen }}" alt="Image" style="max-width: 300px" class="imf-fluid">
							</div>
							<h3>{{  $services->nombreservicio }}</h3>
							<p>{{$services->descripcionservicio }}</p>
						</div>
					</div>
					@endforeach

				</div>--}}
				<style>
					.card {
					width: 500px;
					height: 480px;
					overflow: visible;
					cursor: pointer;
					}

					.card::before, .content {
					border-radius: 5px;
					box-shadow: 0px 0px 5px 1px #00000022;
					transition: transform 300ms, box-shadow 200ms;
					}

					.card::before {
					position: absolute;
					content: ' ';
					display: block;
					width: 100%;
					height: 100%;
					background-color: #ee9933;
					transform: rotateZ(5deg);
					}

					.description {
					width: 100%;
					text-align: center;
					margin-top: 20px;
					}

					.info {
					color: #00000066;
					}

					.price::before {
					content: 'Última fecha de modificación:';
					}

					.price {
					font-weight: bold;
					color: #ee9933;
					}

					.description p {
					margin-bottom: 10px;
					}

					.card .content {
					position: absolute;
					width: 100%;
					height: 100%;
					background-color: white;
					padding: 20px;
					display: flex;
					flex-direction: column;
					align-items: center;
					transform: rotateZ(-5deg);
					}

					.content .img {
					width: 150px;
					height: fit-content;
					}

					.card:hover::before, .card:hover .content {
					transform: rotateZ(0deg);
					}

					.card:active::before, .card:active .content {
					box-shadow: none;
					}
				</style>

				
				<div class="col-12">

					<div class="row">
					@foreach ($servicios as $services)
						<div class="col-6" style="margin-bottom: 9%">
							<div class="card">
								<div class="content">
									<img src="{{ ('img/servicios/')."/".$services->imagen }}" alt="" width="300px">

									<div class="description">
										<p class="title" style="font-size: 28px">
										<strong>{{  $services->nombreservicio }}</strong>
										</p>
										<p class="info" style="font-size: 20px">
											{{$services->descripcionservicio }}
										</p>
										<p class="price">
											{{$services->updated_at}}
										</p>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>

				{{--<div class="row row-cols-1 row-cols-md-2 g-4">
					@foreach ($servicios as $services)
						
					<div class="col">
						<div class="card">
							<img src="{{ ('img/servicios/')."/".$services->imagen }}" alt="Image" style="max-width: 300px" class="imf-fluid">
							<div class="card-body">
								<h5 class="card-title">{{  $services->nombreservicio }}</h5>
								<p class="card-text">{{$services->descripcionservicio }}</p>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>--}}
			</div>
			
		</div>
		<!-- End Why Choose Us Section -->



		

		@include('sitioweb.footer.foot')


		<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('js/tiny-slider.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
	</body>

</html>
