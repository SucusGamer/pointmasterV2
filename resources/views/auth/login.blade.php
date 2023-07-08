<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="images/logopointmaster.PNG" class="img-fluid" width="250">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <style>
            .singup {
            color: #00c292;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            font-weight: bold;
            font-size: x-large;
            margin-top: 1.5em;
            }

            .card {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: auto;
            width: auto;
            flex-direction: column;
            gap: 35px;
            border-radius: 15px;
            background: #e3e3e3;
            box-shadow: 16px 16px 32px #c8c8c8,
                    -16px -16px 32px #fefefe;
            border-radius: 8px;
            }

            .inputBox,
            .inputBox1 {
            position: relative;
            width: 250px;
            }

            .inputBox input,
            .inputBox1 input {
            width: 100%;
            padding: 10px;
            outline: none;
            border: none;
            color: #00c292;
            font-size: 1em;
            background: transparent;
            border-left: 2px solid #00c292;
            border-bottom: 2px solid #00c292;
            transition: 0.1s;
            border-bottom-left-radius: 8px;
            }

            .inputBox span,
            .inputBox1 span {
            margin-top: 5px;
            position: absolute;
            left: 0;
            transform: translateY(-4px);
            margin-left: 10px;
            padding: 10px;
            pointer-events: none;
            font-size: 12px;
            color: #00c292;
            text-transform: uppercase;
            transition: 0.5s;
            letter-spacing: 3px;
            border-radius: 8px;
            }

            .inputBox input:valid~span,
            .inputBox input:focus~span {
            transform: translateX(113px) translateY(-15px);
            font-size: 0.8em;
            padding: 5px 10px;
            background: #00c292;
            letter-spacing: 0.2em;
            color: #fff;
            border: 2px;
            }

            .inputBox1 input:valid~span,
            .inputBox1 input:focus~span {
            transform: translateX(156px) translateY(-15px);
            font-size: 0.8em;
            padding: 5px 10px;
            background: #00c292;
            letter-spacing: 0.2em;
            color: #fff;
            border: 2px;
            }

            .inputBox input:valid,
            .inputBox input:focus,
            .inputBox1 input:valid,
            .inputBox1 input:focus {
            border: 2px solid #00c292;
            border-radius: 8px;
            }

            .enter {
            height: 45px;
            width: 100px;
            border-radius: 5px;
            border: 2px solid #00c292;
            cursor: pointer;
            background-color: transparent;
            transition: 0.5s;
            text-transform: uppercase;
            font-size: 10px;
            letter-spacing: 2px;
            margin-bottom: 3em;
            }

            .enter:hover {
            background-color: #00c292;
            color: white;
            }
        </style>

        <div class="container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="card">
                <a class="login" style="margin-top: 5%">Inicio de Sesion</a>
                <div class="inputBox">
                    <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username" required="required">
                    <span class="user">Correo</span>
                </div>
        
                <div class="inputBox">
                    <input id="password" type="password" name="password" required autocomplete="current-password" >
                    <span>Contraseña</span>
                </div>
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __('¿No estas registrado?') }}
                </a>
                @endif
                <button class="enter">Iniciar Sesion</button>
                    
            </div>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>

