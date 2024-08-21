<!-- resources/views/register.blade.php -->
<x-layout title="Novo Usuário">
    <div class="signup-container">
        <h2>Cadastro</h2>    
        <form method="POST" action="{{ route('users.store') }}">
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
            
            <div class="form-group">
                <input type="text" id="name" name="name" class="form-control" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF" required>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
            </div>
            <div class="form-group">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirmar Senha" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            <a href="{{ route('main.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
    </div>
</x-layout>