<x-layout title="Criar Notificação">
    <div class="notifications-container">
        <h2>Criar Notificação</h2>
        <h2>Essa pagina so será visivel para Usuarios com a Flag Admin = 1 na build final</h2>
        <form method="POST" action="{{ route('notifications.store') }}">
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
            <input type="text" name="description" placeholder="Descrição" required>
            <input type="email" name="user_email" placeholder="Email" required>
            <button type="submit">Criar</button>
        </form>   
    </div>
</x-layout>
