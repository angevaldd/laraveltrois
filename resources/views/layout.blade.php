<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <title>post - @yield('title')</title>
    <style>
        @import url(https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;800;900&display=swap);

        *{
            margin: 0;
            padding: 0;
        }
        a:hover,
        a{
            text-decoration: none;
            color:white;
        }
        body {
          font-family: 'Poppins', sans-serif;
          font-size: 1rem;
          min-height: 100vh;
        }
        .logo{
            font-size: 2rem;
            font-weight: 800;
            text-transform: uppercase;
        }
        nav .logo span{
            color: rgb(1, 238, 206);
        }

    </style>
</head>
<body>
    <header class="bg-primary py-3">
        <nav class="d-flex container justify-content-between align-items-center">
            <a href="{{ route('posts.index') }}" class="logo">Post<span>APP</span> </a>
            <ul class="menu-list m-0">
                <li class="menu-item d-inline"><a href="{{ route('posts.index') }}">Accueil</a></li>
                @auth()
                <li class="menu-item d-inline ml-4"><a href="{{ route('posts.create') }}">creer</a></li>
                <li class="menu-item d-inline ml-4"><a href="{{ route('logout') }}">deconnexion</a></li>
                @else
                <li class="menu-item d-inline ml-4"><a href="{{ route('login') }}">Connexion</a></li>
                @endauth
            </ul>
        </nav>
    </header>

    @component('components.sesion') @endcomponent
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
