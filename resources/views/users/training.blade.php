<!-- resources/views/profile.blade.php -->

<x-layout title="Perfil do Usuario">
    <div class="tabs">
        <a href="{{ route('users.profile') }}" class="tab" data-tab="personal-info">Informações Pessoais</a>
        <a href="{{ route('users.training') }}" class="tab active" data-tab="training-history">Histórico de Treinos</a>
        <a href="{{ route('trainings.create') }}" class="tab" data-tab="make-training">Criar Treino</a>
    </div>
    <div class="tab-content" data-tab="training-history">
        <h2>Histórico de Treinos</h2>
        <ul>
            @if ($user->trainings->isEmpty())
                <p>Nenhum treino encontrado.</p>
            @else
                @foreach ($user->trainings as $training)
                    <li>
                        <strong>{{ $training->title }}</strong>
                        <p>Data: {{ $training->date }}</p>
                    </li>
            @endforeach
            @endif
        </ul>
    </div>
</x-layout>
