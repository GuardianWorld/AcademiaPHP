<x-layout title="Notificações">
    <div class="main-content">
        <section class="news">
            <h2>Notificações</h2>
            <p>Últimas notificações e atualizações da nossa academia.</p>
            @if ($user->notifications->isEmpty())
                <p>Nenhuma notificação encontrada.</p>
            @else
                @foreach ($user->notifications as $notification)
                    <li style="display: flex; align-items: center; justify-content: space-between;">
                        <a>
                            <strong>{{ $notification->description }}</strong>
                            <small>{{ $notification->created_at->diffForHumans() }}</small>
                        </a>
                        <form method="POST" action="{{ route('notifications.read', $notification->id) }}">
                            @csrf

                            <button type="submit" class="btn btn-success">Marcar como lida</button>
                        </form>
                    </li>
            @endforeach
            @endif
        </ul>
        </section>
        <a href="{{ route('notifications.create') }}">Criar Notificação [Debug]</a>   
    </div>
</x-layout>