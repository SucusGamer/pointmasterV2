<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" style="" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="/" ><img src="images/logomaster.PNG" width="80%"  "></a>
        {{-- src="{{ public_path('images/Logoinadware0001.png') }}" --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item {{ (request()->is('tienda')) ? 'active' : '' }}"><a class="nav-link " href="tienda">Tienda</a></li>
                {{-- <li class="nav-item {{ (request()->is('servicios')) ? 'active' : '' }}"><a class="nav-link " href="servicios">Servicios</a></li> --}}
                <li class="nav-item {{ (request()->is('contacto')) ? 'active' : '' }}"><a class="nav-link " href="contacto">Contacto</a></li>
                <li class="nav-item {{ (request()->is('acercade')) ? 'active' : '' }}"><a class="nav-link " href="acercade">Nosotros</a></li>

                {{-- <li><a class="nav-link" href="blog.html">Blog</a></li> --}}

            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                @if (Auth::check())
                    <li>
                        <div class="dropdown">
                            <a class="nav-link" href="#" style="color: black;">{{ Auth::user()->name }}</a>
                            <!-- Authentication -->
                            <div class="dropdown-options">
                                <!-- Solo administradores pueden ver -->
                                @can('admin.inicio')
                                <a href="/Inicio">Administración</a>
                                @endcan
                                <!-- -------------------------------- -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>
                                </form>
                            </div>
                        </div>
                    </li>
                @else
                    <li><a class="nav-link" href="login"><img src="images/user.svg"></a></li>
                @endif

                @if (Cart::content()->count())
                    <li>
                        <a class="nav-link position-relative" href="/cart">

                            <img src="images/cart.svg">
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{Cart::content()->count()}}
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>

</nav>

<style>
    .dropdown {
      display: inline-block;
      position: relative;
    }

    button:hover{
      background-color:#ddd;
    }

    .dropdown-options {
      display: none;
      position: absolute;
      overflow: auto;
      background-color:#fff;
      border-radius:5px;
      box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
    }

    .dropdown:hover .dropdown-options {
      display: block;
    }

    .dropdown-options a {
      display: block;
      color: #000000;
      padding: 5px;
      text-decoration: none;
      padding:10px 20px;
    }

    .dropdown-options a:hover {
      color: #0a0a23;
      background-color: #ddd;
      border-radius:5px;
    }
    </style>
