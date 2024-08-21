
<x-layout title="Login">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Senha</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Login</button>
    </form>
    <a href="{{ route('users.register') }}" class="btn btn-secondary mt-3">Cadastro</a>
    <a href="{{ route('main.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
</x-layout>
