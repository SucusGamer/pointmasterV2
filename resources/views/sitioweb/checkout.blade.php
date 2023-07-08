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
  <link rel="shortcut icon" href="/images/mastericon.ico">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
		<title>Checkout</title>
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
								<h1>Verificación</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

			<form action="{{route('procesarcarrito')}}" method="post">
				@csrf
				<div class="container">
				<div class="row">
					<div class="col-md-6 mb-5 mb-md-0">
					<h2 class="h3 mb-3 text-black">Detalles Nota <i class="fa fa-newspaper" aria-hidden="true"></i></h2>
					<div class="p-3 p-lg-5 border bg-white">
							<div class="form-group row">
							<div class="col-md-6">
								<label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_fname" name="c_fname" required>
							</div>
							<div class="col-md-6">
								<label for="c_lname" class="text-black">Apellido <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_lname" name="c_lname" required>
							</div>
							</div>

							<div class="form-group row">
							<div class="col-md-12">
								<label for="c_companyname" class="text-black">Nombre de la Compañia (opcional) </label>
								<input type="text" class="form-control" id="c_companyname" name="c_companyname">
							</div>
							</div>

							<div class="form-group row">
							<div class="col-md-12">
								<label for="c_address" class="text-black">Direccion <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_address" name="c_address" placeholder="Calles" required>
							</div>
							</div>

							<div class="form-group row">
							<div class="col-md-6">
								<label for="c_state_country" class="text-black">Estado / País <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_state_country" name="c_state_country" required>
							</div>
							<div class="col-md-6">
								<label for="c_postal_zip" class="text-black">Codigo Postal <span class="text-danger">*</span></label>
								<input type="text" class="form-control" maxlength="5" minlength="5" id="c_postal_zip" name="c_postal_zip" required>
							</div>
							</div>

							<div class="form-group row mb-5">
							<div class="col-md-6">
								<label for="c_email_address" class="text-black">Correo <span class="text-danger">*</span></label>
								<input type="email" class="form-control" id="c_email_address" name="c_email_address" required>
							</div>
							<div class="col-md-6">
								<label for="c_phone" class="text-black">Celular <span class="text-danger">*</span></label>
								<input type="number" class="form-control" id="c_phone" name="c_phone" placeholder="Ej. 9999999999" required>
							</div>
							</div> 

							<div class="form-group">
							<label for="c_order_notes" class="text-black">Notas o comentarios (opcional)</label>
							<textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Escribe tus notas aquí..."></textarea>
							</div>

					</div>
					</div>
					<div class="col-md-6">

					

					<div class="row mb-5">
						@if (count(Cart::content()))
						<div class="col-md-12">
						<h2 class="h3 mb-3 text-black">Su compra <i class="fa fa-shopping-bag" aria-hidden="true"></i>
						</h2>
						<div class="p-3 p-lg-5 border bg-white">
							<table class="table site-block-order-table mb-5">
							<thead>
								<th>Producto</th>
								<th>Total</th>
							</thead>
							<tbody>
								@foreach (Cart::content() as $item)
									<tr>
										<td>{{$item->name}} <strong class="mx-2">x</strong> {{$item->qty}}</td>
										<td>$ {{number_format($item->qty * $item->price,2)}}</td>
									</tr>
								@endforeach
								
							
								<tr>
								<td class="text-black font-weight-bold"><strong>Subtotal:</strong></td>
								<td class="text-black">$ {{Cart::subtotal()}}</td>
								</tr>
								<tr>
								<td class="text-black font-weight-bold"><strong>Total de Compra:</strong></td>
								<td class="text-black font-weight-bold"><strong>$ {{Cart::total()}}</strong></td>
								</tr>
							</tbody>
							</table>

							<div class="border p-3 mb-3">
							<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Método de Pago</a></h3>

							<div class="collapse" id="collapsebank">
								<div class="py-2">
								<p class="mb-0">El pago es en <i class="fa fa-money" aria-hidden="true">EFECTIVO</i>
									y se realiza al momento de ir a recoger su compra en establecimiento.</p>
								</div>
							</div>
							</div>

							<div class="form-group">
							<button class="btn btn-black btn-lg py-3 btn-block" type="submit">Realizar Pedido</button>
							</div>

						</div>
						</div>
					</div>
					@endif
					

					</div>
				</div>
				<!-- </form> -->
				</div>
			</form>


		  @include('sitioweb.footer.foot')


		<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('js/tiny-slider.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
	</body>

</html>
