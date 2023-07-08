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
		<title>Carrito</title>
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
								<h1>Carrito</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

    <style>
      .master-container {
        display: grid;
        grid-template-columns: auto;
        gap: 5px;
      }

      .card {
        width: auto;
        background: #FFFFFF;
        box-shadow: 0px 187px 75px rgba(0, 0, 0, 0.01), 0px 105px 63px rgba(0, 0, 0, 0.05), 0px 47px 47px rgba(0, 0, 0, 0.09), 0px 12px 26px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
      }

      .title {
        width: 100%;
        height: 40px;
        position: relative;
        display: flex;
        align-items: center;
        padding-left: 20px;
        border-bottom: 1px solid #efeff3;
        font-weight: 700;
        font-size: 11px;
        color: #63656b;
      }

      /* cart */
      .cart {
        border-radius: 19px 19px 7px 7px;
      }

      .cart .products {
        display: flex;
        flex-direction: column;
        padding: 10px;
      }

      .cart .products .product {
        display: grid;
        grid-template-columns: 60px 1fr 80px 1fr;
        gap: 10px;
      }

      .cart .products .product span {
        font-size: 13px;
        font-weight: 600;
        color: #47484b;
        margin-bottom: 8px;
        display: block;
      }

      .cart .products .product p {
        font-size: 11px;
        font-weight: 600;
        color: #7a7c81;
      }

      .cart .quantity {
        height: 30px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        margin: auto;
        background-color: #ffffff;
        border: 1px solid #e5e5e5;
        border-radius: 7px;
        filter: drop-shadow(0px 1px 0px #efefef)
          drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
      }

      .cart .quantity label {
        width: 20px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-bottom: 2px;
        font-size: 15px;
        font-weight: 700;
        color: #47484b;
      }

      .cart .quantity button {
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 0;
        outline: none;
        background-color: transparent;
        padding-bottom: 2px;
      }

      .card .small {
        font-size: 15px;
        margin: 0 0 auto auto;
      }

      .card .small sup {
        font-size: px;
      }

      /* coupons */
      .coupons {
        border-radius: 7px;
      }

      .coupons form {
        display: grid;
        grid-template-columns: 1fr 80px;
        gap: 10px;
        padding: 10px;
      }

      .input_field {
        width: auto;
        height: 36px;
        padding: 0 0 0 12px;
        border-radius: 5px;
        outline: none;
        border: 1px solid #e5e5e5;
        filter: drop-shadow(0px 1px 0px #efefef)
          drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
        transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
      }

      .input_field:focus {
        border: 1px solid transparent;
        box-shadow: 0px 0px 0px 2px #242424;
        background-color: transparent;
      }

      .coupons form button {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 10px 18px;
        gap: 10px;
        width: 100%;
        height: 36px;
        background: linear-gradient(180deg, #4480FF 0%, #115DFC 50%, #0550ED 100%);
        box-shadow: 0px 0.5px 0.5px #EFEFEF, 0px 1px 0.5px rgba(239, 239, 239, 0.5);
        border-radius: 5px;
        border: 0;
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 15px;
        color: #ffffff;
      }

      /* Checkout */
      .checkout {
        border-radius: 9px 9px 19px 19px;
      }

      .checkout .details {
        display: grid;
        grid-template-columns: 3fr 1fr;
        padding: 10px;
        gap: 5px;
      }

      .checkout .details span {
        font-size: 13px;
        font-weight: 600;
      }

      .checkout .details span:nth-child(odd) {
        font-size: 11px;
        font-weight: 700;
        color: #707175;
        margin: auto auto auto 0;
      }

      .checkout .details span:nth-child(even) {
        font-size: 13px;
        font-weight: 600;
        color: #47484b;
        margin: auto 0 auto auto;
      }

      .checkout .checkout--footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 10px 10px 20px;
        background-color: #efeff3;
      }

      .price {
        position: relative;
        font-size: 22px;
        color: #2B2B2F;
        font-weight: 900;
      }

      .price sup {
        font-size: 13px;
      }

      .price sub {
        width: fit-content;
        position: absolute;
        font-size: 11px;
        color: #5F5D6B;
        bottom: 5px;
        display: inline-block;
      }

      .checkout .checkout-btn {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        width: 150px;
        height: 36px;
        background: linear-gradient(180deg, #4480FF 0%, #115DFC 50%, #0550ED 100%);
        box-shadow: 0px 0.5px 0.5px #EFEFEF, 0px 1px 0.5px rgba(239, 239, 239, 0.5);
        border-radius: 7px;
        border: 0;
        outline: none;
        color: #ffffff;
        font-size: 13px;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
      }
    </style>

  <div class="master-container" style="margin-top: -5%">
    @include("sitioweb.partials.mensaje")
    <form class="col-md-12" method="post">
    @if (Cart::content()->count())
    <div class="col-12">
    <center>
      <div class="col-6">
      <div class="card cart" style="margin-bottom: 2%">
        <label class="title">Tú Carrito</label>
        <div class="products">
          @foreach (Cart::content() as $item)
            <div class="product" style="margin-bottom: 1%">
              <img src="img/llantas/{{$item->options->urlfoto}}" height="60" width="60" alt="Image" class="img-fluid">                <div>
                <span>{{$item->name}}</span>
                <p>$ {{$item->price,2}}</p>
                <p>Quitar Producto <a href="/removeritem/{{$item->rowId}}" >X</a>
                </p>
              </div>
              <div class="quantity">
                <a href="/decrementar/{{$item->rowId}}">
                  <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M20 12L4 12"></path>
                  </svg>
                </a>
                <label>{{$item->qty}}</label>
                <a href="/incrementar/{{$item->rowId}}">
                  <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M12 4V20M20 12H4"></path>
                  </svg>
                </a>
              </div>
              <label class="price small">${{number_format($item->qty * $item->price,2)}}</label>
            </div>
          @endforeach
        </div>
      </div>
    </form>
    <div class="row" style="margin-top: 5%; margin-bottom: 5%">
      <center>
      <div class="col-6">
        <div class="row">
          <div class="col-6">
            <a class="btn btn-outline-danger"   href="{{route('eliminarcarrito')}}">Eliminar Carrito</a>
          </div>
          <div class="col-6">
            <a class="btn btn-outline-success btn-sm btn-block" href="/tienda">Continuar Comprando</a>
  
          </div>
        </div>
      </div>
    </center>
    </div>
      <div class="card checkout">
        <label class="title">Resumen</label>
        <div class="details">
          <span>Subtotal de tu compra:</span>
          <span>$ {{Cart::subtotal()}}</span>
        </div>
        <div class="checkout--footer">
          <span>Total:</span>
          <label class="price"><sup>$</sup>{{Cart::total()}}</label>
          <a class="checkout-btn" href="checkout">Pedir Ahora</a>
        </div>
      </div>
    </div>
      @else
      <h2 class="text-center"> Carrito Vacío <i class="fa fa-coffee" aria-hidden="true"></i></h2>  
    @endif
    
  </center>
  
  </div>
 

		@include('sitioweb.footer.foot')	


		<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('js/tiny-slider.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
	</body>

</html>
