<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="/images/mastericon.ico">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
		<title>Tienda</title>
</head>

	<body>

		<!-- Start Header/Navigation -->
		@include('sitioweb.header.navbar')
		<!-- End Header/Navigation -->
		<style>
			.input-container {
			width: auto;
			position: relative;
			}

			.icon {
			position: absolute;
			right: 25%;
			top: calc(50% + 5px);
			transform: translateY(calc(-50% - 5px));
			}

			.input {
			width: 500px;
			height: 40px;
			padding: 10px;
			transition: .2s linear;
			border: 2.5px solid black;
			font-size: 14px;
			text-transform: uppercase;
			letter-spacing: 2px;
			}

			.input:focus {
			outline: none;
			border: 0.5px solid black;
			box-shadow: -5px -5px 0px black;
			}

			.input-container:hover > .icon {
			animation: anim 1s linear infinite;
			}

			@keyframes anim {
			0%,
			100% {
				transform: translateY(calc(-50% - 5px)) scale(1);
			}

			50% {
				transform: translateY(calc(-50% - 5px)) scale(1.1);
			}
			}
		</style>
		<div class="col-12">
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-2">
							<div class="intro-excerpt" >
								<h1>Tienda</h1>
							</div>
						</div>
						<div class="col-lg-10">
							<h3 class="text-center" style="margin-bottom: 2%"> Búsqueda de Productos </h3>
							<form action="{{route ('llantaweb')}}" class="row g-3" method="get">
								<center>
								<div class="input-container col-lg-10">
									<input type="text" class="input" name="buscarnombre" placeholder="Busque su producto....">
									<span class="icon"> 
									<svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
									</span>
								</div>
							</center>
							</form>
						</div>
					</div>
				</div>
					
			</div>
		<!-- End Hero Section -->

			<div class="col-12">
				<div class="row">
					<div class="col-3">
						<div class="accordion row"  id="accordionExample">
							<div class="col-12" style="margin-left: 10%; margin-bottom: 5%">
								<div class="accordion-item col-10" style="border-color: #2f2f2f">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<div class="col-10">
												<strong> Categoría </strong>
											</div>
											<div class="col-2 text-rigth">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-alt" viewBox="0 0 16 16">
													<path d="M7 2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zm4.225 4.053a.5.5 0 0 0-.577.093l-3.71 4.71-2.66-2.772a.5.5 0 0 0-.63.062L.002 13v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4.5l-4.777-3.947z"/>
												</svg>
											</div>

										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<form action="{{route ('llantaweb')}}" class="row g-3" method="get">
												<select class="col-auto form-select" name="marca" aria-label="Default select example">
													<option selected>Seleccione una Categoría</option>
													@foreach ($marcas as $marca)
														<option value="{{$marca->id}}">{{$marca->nombremarca}}</option>
													@endforeach
												</select>
												<button type="submit" class="btn btn-default">
													<li class="fa fa-search"></li>
												</button>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div id="accordionTipoVehiculo" class="col-12" style="margin-left: 10%; margin-bottom: 5%">
								<div class="accordion-item col-10" style="border-color: #2f2f2f">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<div class="col-10">
												<strong> Familia </strong>
											</div>
											<div class="col-2 text-rigth">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
													<path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
													<path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
												</svg>
											</div>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
                                            <form action="{{route ('llantaweb')}}" class="row g-3" method="get">
                                               {{--  @csrf --}}
												<select class="col-auto form-select" id="tipovehiculo" name="tipovehiculo" aria-label="Default select example" onchange="this.form.submit()">
													<option selected>Seleccione una Familia</option>
													@foreach ($tipo as $tipos)
														<option value="{{$tipos->id}}" data-idvehiculo="{{$tipos->id}}">{{$tipos->vehiculo}}</option>
													@endforeach
												</select>

                                                <button id="btnTipoVehiculo" type="submit" class="btn btn-default" hidden>
													<li class="fa fa-search"></li>
												</button>
                                            </form>
										</div>
									</div>
								</div>
							</div>
							<div id="accordionNumeroRin" class="col-12" style="margin-left: 10%; margin-bottom: 5%">
								<div class="accordion-item col-10" style="border-color: #2f2f2f">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<div class="col-10">
												<strong> Grupo </strong>
											</div>
											<div class="col-2 text-rigth">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-123" viewBox="0 0 16 16">
													<path d="M2.873 11.297V4.142H1.699L0 5.379v1.137l1.64-1.18h.06v5.961h1.174Zm3.213-5.09v-.063c0-.618.44-1.169 1.196-1.169.676 0 1.174.44 1.174 1.106 0 .624-.42 1.101-.807 1.526L4.99 10.553v.744h4.78v-.99H6.643v-.069L8.41 8.252c.65-.724 1.237-1.332 1.237-2.27C9.646 4.849 8.723 4 7.308 4c-1.573 0-2.36 1.064-2.36 2.15v.057h1.138Zm6.559 1.883h.786c.823 0 1.374.481 1.379 1.179.01.707-.55 1.216-1.421 1.21-.77-.005-1.326-.419-1.379-.953h-1.095c.042 1.053.938 1.918 2.464 1.918 1.478 0 2.642-.839 2.62-2.144-.02-1.143-.922-1.651-1.551-1.714v-.063c.535-.09 1.347-.66 1.326-1.678-.026-1.053-.933-1.855-2.359-1.845-1.5.005-2.317.88-2.348 1.898h1.116c.032-.498.498-.944 1.206-.944.703 0 1.206.435 1.206 1.07.005.64-.504 1.106-1.2 1.106h-.75v.96Z"/>
												</svg>
											</div>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
                                            <form action="{{route ('llantaweb')}}" class="row g-3" method="get">
                                                @csrf
												<select class="col-auto form-select" id="rin" name="rin" aria-label="Default select example" onchange="this.form.submit()">
													<option selected>Seleccione un Grupo</option>
                                                    @foreach ($rines as $rin)
														<option value="{{$rin->id}}">{{$rin->numrin}}</option>
													@endforeach
												</select>
												<button type="submit" class="btn btn-default" hidden>
													<li class="fa fa-search"></li>
												</button>
                                            </form>
										</div>
									</div>
								</div>
							</div>
                            <div id="accordionDimensionesRin" class="col-12" style="margin-left: 10%; margin-bottom: 5%">
								<div class="accordion-item col-10" style="border-color: #2f2f2f">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<div class="col-10">
												<strong> Precio </strong>
											</div>
											<div class="col-2 text-rigth">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-123" viewBox="0 0 16 16">
													<path d="M2.873 11.297V4.142H1.699L0 5.379v1.137l1.64-1.18h.06v5.961h1.174Zm3.213-5.09v-.063c0-.618.44-1.169 1.196-1.169.676 0 1.174.44 1.174 1.106 0 .624-.42 1.101-.807 1.526L4.99 10.553v.744h4.78v-.99H6.643v-.069L8.41 8.252c.65-.724 1.237-1.332 1.237-2.27C9.646 4.849 8.723 4 7.308 4c-1.573 0-2.36 1.064-2.36 2.15v.057h1.138Zm6.559 1.883h.786c.823 0 1.374.481 1.379 1.179.01.707-.55 1.216-1.421 1.21-.77-.005-1.326-.419-1.379-.953h-1.095c.042 1.053.938 1.918 2.464 1.918 1.478 0 2.642-.839 2.62-2.144-.02-1.143-.922-1.651-1.551-1.714v-.063c.535-.09 1.347-.66 1.326-1.678-.026-1.053-.933-1.855-2.359-1.845-1.5.005-2.317.88-2.348 1.898h1.116c.032-.498.498-.944 1.206-.944.703 0 1.206.435 1.206 1.07.005.64-.504 1.106-1.2 1.106h-.75v.96Z"/>
												</svg>
											</div>
										</button>
									</h2>
									<style>
										.card-conteiner {
										cursor: default;
										--color-primary: #275efe;
										--color-headline: #3f4656;
										--color-text: #99a3ba;
										}

										.card-content {
										width: 100%;
										max-width: 312px;
										padding: 36px 32px;
										background: #fff;
										border-radius: 10px;
										box-shadow: 0 1px 4px rgba(18, 22, 33, .12);
										}

										.card-content .card-title {
										font-family: inherit;
										font-size: 32px;
										font-weight: 700;
										margin: 0 0 10px 0;
										color: var(--color-headline);
										}

										.card-content .card-title span {
										font-weight: 500;
										}

										.card-content .values div, .card-content .current-range div {
										display: inline-block;
										vertical-align: top;
										}

										.card-content .values {
										margin: 0;
										font-weight: 500;
										color: var(--color-primary);
										}

										.card-content .values > div:first-child {
										margin-right: 2px;
										}

										.card-content .values > div:last-child {
										margin-left: 2px;
										}

										.card-content .current-range {
										display: block;
										color: var(--color-text);
										margin-top: 8px;
										font-size: 14px;
										}

										.card-content .slider {
										display: flex;
										justify-content: space-between;
										margin-top: 20px;
										font-size: .6em;
										color: var(--color-text);
										}

										/* Range Slider */
										.input-ranges[type='range'] {
										width: 210px;
										height: 30px;
										overflow: hidden;
										outline: none;
										}

										.input-ranges[type='range'],
										.input-ranges[type='range']::-webkit-slider-runnable-track,
										.input-ranges[type='range']::-webkit-slider-thumb {
										-webkit-appearance: none;
										background: none;
										}

										.input-ranges[type='range']::-webkit-slider-runnable-track {
										width: 200px;
										height: 1px;
										background: var(--color-headline);
										}

										.input-ranges[type='range']:nth-child(2)::-webkit-slider-runnable-track {
										background: none;
										}

										.input-ranges[type='range']::-webkit-slider-thumb {
										position: relative;
										height: 15px;
										width: 15px;
										margin-top: -7px;
										background: #fff;
										border: 1px solid var(--color-headline);
										border-radius: 25px;
										cursor: pointer;
										z-index: 1;
										transition: .5s;
										-webkit-transition: .5s;
										-moz-transition: .5s;
										-ms-transition: .5s;
										-o-transition: .5s;
										}

										.input-ranges[type='range']::-webkit-slider-thumb:hover {
										background: #eaefff;
										border: 1px solid var(--color-primary);
										outline: .5px solid var(--color-primary);
										}

										.input-ranges[type='range']::-webkit-slider-thumb:active {
										cursor: grabbing;
										}

										.input-ranges[type='range']:nth-child(1)::-webkit-slider-thumb {
										z-index: 2;
										}

										.rangeslider {
										font-family: sans-serif;
										font-size: 14px;
										position: relative;
										height: 20px;
										width: 210px;
										display: inline-block;
										margin-top: -5px;
										}

										.rangeslider input {
										position: absolute;
										}

										.rangeslider span {
										position: absolute;
										margin-top: 20px;
										left: 0;
										}

										.rangeslider .right {
										position: relative;
										float: right;
										margin-right: -5px;
										}
									</style>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample"> <!-----Cambiar ID al div--------------->
										<div class="accordion-body">
                                            <div class="card-conteiner">
												<div class="card-content">
												  <div class="card-title">Price <span>Range</span></div>
												  <div class="values">
													<div>$<span id="first">735</span></div> -
													<div>$<span id="second">6 465</span></div>
												  </div>
												  <small class="current-range">
													Current Range:
													<div>$<span id="third">7 200</span></div>
												  </small>
												  <div data-range="#third" data-value-1="#second" data-value-0="#first" class="slider">
													<label class="label-min-value">1</label>
													<label class="label-max-value">10 000</label>
												  </div>
												  <div class="rangeslider">
													<input class="min input-ranges" name="range_1" type="range" min="1" max="10000" value="735">
													<input class="max input-ranges" name="range_1" type="range" min="1" max="10000" value="6465">
												  </div>
												</div>
											  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<style>
						/* before adding the img to the div with the 
						"card-img" class, remove css styles 
						.card-img .img::before and .card-img .img::after,
						then set the desired styles for .card-img. */
						.cards {
						--font-color: #323232;
						--font-color-sub: #666;
						--bg-color: #fff;
						--main-color: #323232;
						--main-focus: #00c292;
						width: 230px;
						height: 400px;
						background: var(--bg-color);
						border: 2px solid var(--main-color);
						box-shadow: 4px 4px var(--main-color);
						border-radius: 5px;
						display: flex;
						flex-direction: column;
						justify-content: flex-start;
						padding: 20px;
						gap: 10px;
						font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
						}

						.cards:last-child {
						justify-content: flex-end;
						}

						.cards-img {
							/* clear and add new css */
						transition: all 0.5s;
						display: flex;
						justify-content: center;
						}

						.cards-img .img {
						/* delete */
						transform: scale(1);
						position: relative;
						box-sizing: border-box;
						width: 100px;
						height: 100px;
						border: 2px solid black;
						background-image: linear-gradient(to top,transparent 10px,rgba(0,0,0,0.3) 10px,rgba(0,0,0,0.3) 13px,transparent 13px);
						}

						.cards-img .img::before {
						/* delete */
						content: '';
						position: absolute;
						width: 65px;
						height: 110px;
						margin-left: -32.5px;
						left: 50%;
						bottom: -4px;
						background-repeat: no-repeat;
						background-image: radial-gradient(ellipse at center,rgba(0,0,0,0.7) 30%,transparent 30%),linear-gradient(to top,transparent 17px,rgba(0,0,0,0.3) 17px,rgba(0,0,0,0.3) 20px,transparent 20px),linear-gradient(to right,black 2px,transparent 2px),linear-gradient(to left,black 2px,transparent 2px),linear-gradient(to top,black 2px,#228b22 2px);
						background-size: 60% 10%,100% 100%,100% 65%,100% 65%,100% 50%;
						background-position: center 3px,center bottom,center bottom,center bottom,center bottom;
						border-radius: 0 0 4px 4px;
						z-index: 2;
						}

						.cards-img .img::after {
						/* delete */
						content: '';
						position: absolute;
						box-sizing: border-box;
						width: 28px;
						height: 28px;
						margin-left: -14px;
						left: 50%;
						top: -13px;
						background-repeat: no-repeat;
						background-image: linear-gradient(80deg,#ffc0cb 45%,transparent 45%),linear-gradient(-175deg,#ffc0cb 45%,transparent 45%),linear-gradient(80deg,rgba(0,0,0,0.2) 51%,rgba(0,0,0,0) 51%),linear-gradient(-175deg,rgba(0,0,0,0.2) 51%,rgba(0,0,0,0) 51%),radial-gradient(circle at center,#ffa6b6 45%,rgba(0,0,0,0.2) 45%,rgba(0,0,0,0.2) 52%,rgba(0,0,0,0) 52%),linear-gradient(45deg,rgba(0,0,0,0) 48%,rgba(0,0,0,0.2) 48%,rgba(0,0,0,0.2) 52%,rgba(0,0,0,0) 52%),linear-gradient(65deg,rgba(0,0,0,0) 48%,rgba(0,0,0,0.2) 48%,rgba(0,0,0,0.2) 52%,rgba(0,0,0,0) 52%),linear-gradient(22deg,rgba(0,0,0,0) 48%,rgba(0,0,0,0.2) 48%,rgba(0,0,0,0.2) 54%,rgba(0,0,0,0) 54%);
						background-size: 100% 100%,100% 100%,100% 100%,100% 100%,100% 100%,100% 75%,100% 95%,100% 60%;
						background-position: center center;
						border-top-left-radius: 120px;
						border-top-right-radius: 10px;
						border-bottom-left-radius: 10px;
						border-bottom-right-radius: 70px;
						border-top: 2px solid black;
						border-left: 2px solid black;
						transform: rotate(45deg);
						z-index: 1;
						}

						.cards-title {
						font-size: 20px;
						font-weight: 500;
						text-align: center;
						color: var(--font-color);
						}

						.cards-subtitle {
						font-size: 14px;
						font-weight: 400;
						color: var(--font-color-sub);
						}

						.cards-divider {
						width: 100%;
						border: 1px solid var(--main-color);
						border-radius: 50px;
						}

						.cards-footer {
						display: flex;
						flex-direction: row;
						justify-content: space-between;
						align-items: center;
						}

						.cards-price {
						font-size: 20px;
						font-weight: 500;
						color: var(--font-color);
						}

						.cards-price span {
						font-size: 20px;
						font-weight: 500;
						color: var(--font-color-sub);
						}

						.cards-btn {
						height: 35px;
						background: var(--bg-color);
						border: 2px solid var(--main-color);
						border-radius: 5px;
						padding: 0 15px;
						transition: all 0.3s;
						}

						.cards-btn svg {
						width: 100%;
						height: 100%;
						fill: var(--main-color);
						transition: all 0.3s;
						}

						.cards-img:hover {
						transform: translateY(-3px);
						}

						.cards-btn:hover {
						border: 2px solid var(--main-focus);
						}

						.cards-btn:hover svg {
						fill: var(--main-focus);
						}

						.cards-btn:active {
						transform: translateY(3px);
						}

			
					</style>
								<div class="col-9">
									<div class="untree_co-section product-section before-footer-section" style="margin-top: -15%">
										<div class="container">
											<div class="row">
												

												
												<!-- Start Column 1 -->
												@foreach ($llantas as $llanta)
													<div class="col-12 col-md-3 col-lg-3 mb-3 llanta{{$llanta->id}}" >
														<div class="cards">
															<div class="cards-img"><img class="img" src="{{ ('img/llantas/')."/".$llanta->imagen }}"></div>
															<div class="cards-title">{{$llanta->nombrellanta}}</div>
															<div class="cards-subtitle">{{$llanta->descripcion}}</div>
															<hr class="cards-divider">
															<div class="cards-footer">
																<div class="cards-price"><span>$</span> {{$llanta->precio}}</div>
																<form action="{{route('agregaritem')}}" method="post">
																	@csrf
																	<input type="hidden" name="precio_id" value="{{$llanta->id}}">
																	<input type="hidden" name="producto_id" value="{{$llanta->id}}">
							
																	{{-- <button  style="background-color: transparent; border-color: transparent">
																	<svg class="svg-icon" viewBox="0 0 20 20">
																		<path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
																		<path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
																		<path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
																	</svg> --}}
																	<button type="submit" class="cards-btn" style="background-color: transparent;">
																		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
																	  </button>
																	</button>	
																</form>
																
															</div>
														</div>
														{{-- <div class="card">
															<div class="card-img"> <center> <img src="{{ ('img/llantas/')."/".$llanta->imagen }}" style="width: 80%!important"> </center></div>
															<div class="card-info">
																<center> <img src="{{ ('img/marcas/')."/".$llanta->marcallanta->imagen }}" style="margin-bottom: 10px; width: 80%; height: 40px!important; " class="img-fluid"></center>
															<p class="text-title">{{$llanta->nombrellanta}} </p>
															<p class="text-body">{{$llanta->descripcion}}</p>
															</div>
															<div class="card-footer">
															<span class="text-title">${{$llanta->precio}}</span>
															<div class="card-button">
																<form action="{{route('agregaritem')}}" method="post">
																	@csrf
																	<input type="hidden" name="precio_id" value="{{$llanta->id}}">
																	<input type="hidden" name="producto_id" value="{{$llanta->id}}">
							
																	<button type="submit" style="background-color: transparent; border-color: transparent">
																	<svg class="svg-icon" viewBox="0 0 20 20">
																		<path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
																		<path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
																		<path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
																	</svg>
																	</button>	
																</form>
																	
															</div>
														</div>
														</div> --}}
													</div> 
												@endforeach
												<!-- End Column 1 -->
											</div>
										</div>
									</div>
								</div>
			
							</div>
						</div>
					</div>

		@include('sitioweb.footer.foot')
		<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('js/tienda.js')}}"></script>

		<script src="{{asset('js/tiny-slider.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
	</body>
</html>


<script>
    /* function mostrarRines()
    {

    } */

    function mostrarDimensiones()
    {
        document.getElementById('accordionDimensionesRin').style.display = 'block';
    }
</script>

{{-- <script type="text/javascript">
	$(document).ready(function(){
		console.log(111);

		CargarCategoria();
		CargarFamilia();
		CargarGrupo();
	});
	function CargarCategoria() {
		var tablaDatos=$("#txtCategoria");
		var routeurl='listar_areas';
		$("#txtCategoria").empty();
		$.get(routeurl, function (res) {
			$(res).each(function (key, value) {
				tablaDatos.append('<option value='+value.id+'>'+value.vehiculo+'</option>')
			})
		})
	}
	function CargarFamilia() {
		var routeurl='cargarfamilias';
		var txtCategoriaInicial= null;
		txtCategoria = document.getElementsByName("txtCategoriaInicial")[0].value;
		var token=$("#token").val();
		$.ajax({
			type:'POST',
			url:routeurl,
			headers: {'X-CSRF-TOKEN':token},
			dataType:'json',
			data:{txtCategoria:txtCategoria},
			{{--success:function(res) {
					var tablaDatos=$("#txtFamilia");
					$("#txtFamilia").empty();
					var response = res;
					$(response).each(function (key, value) {
						tablaDatos.append('<option value='+value.id+'>'+value.familia+'</option>')
					})
				}--}}
		{{-- }).done(function (respuesta) {
			console.log(respuesta)
			var response = respuesta;
			console.log(response.length)
			$("#txtFamilia").empty();
			$("#txtGrupo").empty();
			for(var i = 0;i < response.length; i++){
				console.log(response[i]);
				$('#txtFamilia').append('<option value='+ response[i].id +'>'+ response[i].familia +'</option>')
			}
			CargarGrupo();
		}).fail(function () {
			console.log("error");
		})
		;
	}
	function CargarGrupo() {
		var routeurl='cargargrupos';
		var txtFamilia= null;
		txtFamilia = document.getElementsByName("txtFamilia")[0].value;
		var token=$("#token").val();
		$.ajax({
			type:'POST',
			url:routeurl,
			headers: {'X-CSRF-TOKEN':token},
			dataType:'json',
			data:{txtFamilia:txtFamilia},
		}).done(function (respuesta) {
			console.log(respuesta)
			var response = respuesta;
			console.log(response.length)
			$("#txtGrupo").empty();
			for(var i = 0;i < response.length; i++){
				$('#txtGrupo').append('<option value='+ response[i].id +'>'+ response[i].grupo +'</option>')
			}
		}).fail(function () {
			console.log("error");
		})
		;
	}
	$('#txtCategoria').change(function (e) {
		var routeurl='cargarfamilias';
		var txtCategoria= null;
		txtCategoria = document.getElementsByName("txtCategoria")[0].value;
		e.preventDefault();
		var token=$("#token").val();
		$.ajax({
			type:'POST',
			url:routeurl,
			headers: {'X-CSRF-TOKEN':token},
			dataType:'json',
			data:{txtCategoria:txtCategoria}, --}}
			{{--success:function(res) {
					var tablaDatos=$("#txtFamilia");
					$("#txtFamilia").empty();
					var response = res;
					$(response).each(function (key, value) {
						tablaDatos.append('<option value='+value.id+'>'+value.familia+'</option>')
					})
				}--}}
		{{-- }).done(function (respuesta) {
			console.log(respuesta)
			var response = respuesta;
			console.log(response.length)
			$("#txtFamilia").empty();
			$("#txtGrupo").empty();
			for(var i = 0;i < response.length; i++){
				$('#txtFamilia').append('<option value='+ response[i].id +'>'+ response[i].familia +'</option>')
			}
			CargarGrupo();
		}).fail(function () {
			console.log("error");
		})
		;
	});
	$('#txtFamilia').change(function (e) {
		var routeurl='cargargrupos';
		var txtFamilia= null;
		txtFamilia = document.getElementsByName("txtFamilia")[0].value;
		e.preventDefault();
		var token=$("#token").val();
		$.ajax({
			type:'POST',
			url:routeurl,
			headers: {'X-CSRF-TOKEN':token},
			dataType:'json',
			data:{txtFamilia:txtFamilia},
			{{--success:function(res) {
					var tablaDatos=$("#txtFamilia");
					$("#txtFamilia").empty();
					var response = res;
					$(response).each(function (key, value) {
						tablaDatos.append('<option value='+value.id+'>'+value.familia+'</option>')
					})
				}--}}
		{{-- }).done(function (respuesta) {
			console.log(respuesta)
			var response = respuesta;
			console.log(response.length)
			$("#txtGrupo").empty();
			for(var i = 0;i < response.length; i++){
				$('#txtGrupo').append('<option value='+ response[i].id +'>'+ response[i].grupo +'</option>')
			}
		}).fail(function () {
			console.log("error");
		})
		;
	});
</script> --}}
