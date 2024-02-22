<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $name }}</h5>
        <h6 class="card-title">{{ $title }}</h6>
        <img style="width: 200px;" src="{{ Storage::url($image) ?? '...' }}" alt="Immagine">
        <p class="card-text">{{ $description }}</p>
        <a href="{{ route('articles.show', ['article' => $id]) }}" class="card-link">Dettaglio</a>
        <a href="{{ route('articles.edit', ['article' => $id]) }}" class="card-link">Modifica</a>
        <form action="{{ route('articles.destroy', ['article' => $id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Elimina</button>
        </form>

    </div>
</div>
