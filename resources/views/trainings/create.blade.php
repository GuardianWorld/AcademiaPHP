<x-layout title="Perfil do Usuario">
    <div class="tabs">
        <a href="{{ route('users.profile') }}" class="tab" data-tab="personal-info">Informações Pessoais</a>
        <a href="{{ route('users.training') }}" class="tab" data-tab="training-history">Histórico de Treinos</a>
        <a href="{{ route('trainings.create') }}" class="tab active" data-tab="make-training">Criar Treino</a>
    </div>
    <div class="tab-content" data-tab="create-training">
        <h2>Adicionar Treino</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <ul>
            <form method="POST" action="{{ route('trainings.store') }}">
                @csrf
                <div class="form-group">
                    <input type="text" id="title" name="title" class="form-control" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <textarea id="description" name="description" class="form-control" placeholder="Descrição" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Salvar Treino</button>
            </form>
        </ul>
    </div>
</x-layout>