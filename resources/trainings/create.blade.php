<x-layout title="Add Training">
    <div class="container">
        <h2>Adicionar Treino</h2>
        <form method="POST" action="{{ route('trainings.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" placeholder="Descrição" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Training</button>
        </form>
    </div>
</x-layout>