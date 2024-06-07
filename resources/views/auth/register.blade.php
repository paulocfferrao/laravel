<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro de Usuário</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <form id="registerForm" action="{{ url('/api/register') }}" method="POST">
                @csrf
                <div>
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}">
                    <div id="nameError" class="error-message"></div>
                </div>

                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}">
                    <div id="emailError" class="error-message"></div>
                </div>

                <div>
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password">
                    <div id="passwordError" class="error-message"></div>
                </div>

                <div>
                    <label for="password_confirmation">Confirmação de Senha:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation">
                </div>

                <button type="submit">Registrar</button>
            </form>


        </div>
    </div>
    <script src="{{ asset('js/register.js') }}"></script>

</body>

</html>