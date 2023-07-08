<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="/images/mastericon.ico">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

  <title>Inicio</title>
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
						<h1>Bienvenido!</h1>
						<p class="mb-4">
							A Point Master, el sistema de tus sueños
						</p>
						<p><a href="/tienda" class="btn" style="background: #00c292; color: white; border-color:#00c292">Levantar pedido, YA!</a></p>
						{{-- <a href="/servicios" class="btn btn-white-outline">Explorar</a> --}}
					</div>
				</div>
				<div class="col-lg-7">
					<div class="hero-img-wrap">
						<img src="images/logopointmaster.png" class="img-fluid" width="500">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->

	<style>
		.card {
		width: 195px;
		height: 285px;
		background: #313131;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		color: white;
		transition: 0.2s ease-in-out;
		}

		.img {
		height: 50%;
		position: absolute;
		transition: 0.2s ease-in-out;
		z-index: 1;
		}

		.textBox {
		opacity: 0;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		gap: 15px;
		transition: 0.2s ease-in-out;
		z-index: 2;
		}

		.textBox > .text {
		font-weight: bold;
		}

		.textBox > .head {
		font-size: 20px;
		}

		.textBox > .price {
		font-size: 17px;
		}

		.textBox > span {
		font-size: 12px;
		color: lightgrey;
		}

		.card:hover > .textBox {
		opacity: 1;
		}

		.card:hover > .img {
		height: 65%;
		filter: blur(7px);
		animation: anim 3s infinite;
		}

		@keyframes anim {
		0% {
			transform: translateY(0);
		}

		50% {
			transform: translateY(-20px);
		}

		100% {
			transform: translateY(0);
		}
		}

		.card:hover {
		transform: scale(1.04) rotate(-1deg);
		}


	</style>
{{--
	<!-- Start Why Choose Us Section -->
	<div class="why-choose-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-6">
					<h2 class="section-title">¿Por que elegirnos?</h2>
					<p>Ofrecemos Servicio, Como los de acontinuación:</p>
					<div class="row my-5">
						@foreach ($servicio as $services)
						<div class="card" style="margin: 1%">
							<img src="{{ ('img/servicios/')."/".$services->imagen }}" image-rendering="optimizeQuality" text-rendering="geometricPrecision" shape-rendering="geometricPrecision" version="1.1" height="100%" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" class="img">

							<div class="textBox">
							  <p class="text head">{{  $services->nombreservicio }}</p>
							</div>
						  </div>
						@endforeach
					</div>
				</div>

				<div class="col-lg-5">
					<div class="img-wrap">
						<img src="images/OIP.jfif" alt="Image" class="img-fluid">
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Why Choose Us Section --> --}}

	@include('sitioweb.footer.foot')


	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('js/tiny-slider.js')}}"></script>
	<script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
