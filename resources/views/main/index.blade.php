<x-layout title="Página Inicial">
    <div class="main-content">
        <section class="news">
            <h2>Notícias</h2>
            <p>Últimas novidades e atualizações da nossa academia.</p>
            <ul>
                @forelse ($latestNews as $news)
                    <strong>{{ $news->title }}</strong>
                    <li style="display: flex; align-items: center; justify-content: space-between;">
                        <p>{{ $news->content }}</p>
                        <small>{{ $news->created_at->diffForHumans() }}</small>
                    </li>
                @empty
                    <p>Nenhuma notícia encontrada.</p>
                @endforelse
            </ul>
            <a href="{{ route('news.create') }}">Criar Noticia [Debug]</a>
        </section>
        <section class="about">
            <h2>Sobre a gente</h2>
            <p>Bem-vindo à nossa academia! Estamos comprometidos com a sua saúde e bem-estar.</p>
        </section>
    </div>
</x-layout>
