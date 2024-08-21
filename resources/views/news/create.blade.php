<x-layout title="Criar Notificação">
    <div class="notifications-container">
        <h2>Criar Noticia</h2>
        <h2>Essa pagina so será visivel para Usuarios com a Flag Admin = 1 na build final</h2>
        <form method="POST" action="{{ route('news.store') }}">
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
            <input type="text" name="title" placeholder="Título" required>
            <input type="text" name="content" placeholder="Conteudo" required>
            <button type="submit">Criar</button>
        </form>   
    </div>
</x-layout>
