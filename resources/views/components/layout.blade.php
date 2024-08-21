<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Academia' }}</title>
    <style>
        html, body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            justify-content: center;
            align-items: center;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            min-width: 100%;
        }
        .wrapper{
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 40px;
            min-height: 70px;
            border-bottom: #77a 3px solid;
            min-width: 100%;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        .header-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .nav-link {
            color: #fff;
            text-decoration: none;
            padding: 0 20px;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .container {
            width: 100%;
            margin: auto;
            padding: 0 20px;
            overflow: hidden;
            box-sizing: border-box;
        }
        .news, .about {
            margin: 20px 0;
            flex: 1;
        }
        .main-content {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
            box-sizing: border-box;
        }
        .footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            width: 100%
        }
        .login-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        .login-container button {
            background: #333;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
        .login-container a {
            display: block;
            margin-top: 10px;
            color: #333;
            text-decoration: none;
        }
        .signup-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
        }
        .signup-container h2 {
            margin-bottom: 20px;
        }
        .signup-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        .signup-container button {
            background: #333;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            @auth
                <nav class="header-nav">
                    <a href="{{ route('main.index') }}">Página Inicial</a>
                    <a href="{{ route('users.profile') }}"><strong>{{Auth::user()->name}}</strong></a>
                    <a href="{{ route('users.logout') }}">Logout</a>
                </nav>
            @else
                <nav class= "header-nav">
                    <a href="{{ route('main.index') }}">Página Inicial</a>
                    <a href="{{ route('users.login') }}">Login</a>
                </nav>
            @endauth
        </div>
    </header>

    <div class="container">
        {{ $slot }}
    </div>

    <footer class="footer">
        <p>Academia &copy; 2024</p>
    </footer>
</body>
</html>