<h1>Games</h1>

@foreach($games as $game)
    <div>
        <h2>{{ $game->name }}</h2>
        <p>{{ $game->description }}</p>
    </div>
@endforeach
