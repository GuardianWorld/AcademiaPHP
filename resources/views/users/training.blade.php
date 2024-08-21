<!-- resources/views/profile.blade.php -->

<x-layout title="User Profile">
    <a class="tabs">
        <a href="{{ route('users.profile') }}" class="tab" data-tab="personal-info">Informações Pessoais</a>
        <a href="{{ route('users.training') }}" class="tab active" data-tab="training-history">Histórico de Treinos</a>
    </div>
        <div class="content" data-tab="training-history">
            <h2>Histórico de Treinos</h2>
            <ul>
                @if ($user->trainings->isEmpty())
                    <p>Nenhum treino encontrado.</p>
                @else
                    @foreach ($user->trainings as $training)
                        <li>
                            <strong>{{ $training->name }}</strong>
                            <p>Data: {{ $training->date }}</p>
                        </li>
                @endforeach
                @endif
            </ul>
    </div>
</x-layout>
