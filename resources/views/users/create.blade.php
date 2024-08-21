<!-- resources/views/register.blade.php -->
<x-layout title="Novo Usuário">
    <h2>Cadastro</h2>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Nome</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nome" required>
        </div>
        < class="form-group">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Senha</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
        <a href="{{ route('main.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>
</x-layout>