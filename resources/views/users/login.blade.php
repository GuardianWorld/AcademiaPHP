<x-layout title="Login">
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('users.register') }}">Cadastro</a>        
    </div>
</x-layout>
