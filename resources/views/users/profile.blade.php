<!-- resources/views/profile.blade.php -->

<x-layout title="User Profile">
    <div class="tabs">
    <a href="{{ route('users.profile') }}" class="tab active" data-tab="personal-info">Informações Pessoais</a>
    <a href="{{ route('users.training') }}" class="tab" data-tab="training-history">Histórico de Treinos</a>
    </div>
    <div class="tab-content">
        <div class="content active" data-tab="personal-info">
            <h2>Informações Pessoais</h2>
            <p>Nome: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>CPF: {{ $user->cpf }}</p>
        </div>

</x-layout>
