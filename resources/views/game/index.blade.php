<h1>Games</h1>

@foreach($games as $game)
    <div>
        <h2>{{ $game->name }}</h2>
        <p>{{ $game->description }}</p>
        @if($game->tags->isNotEmpty())
            <ul>
                @foreach($game->tags as $tag)
                    <li>{{ $tag->name }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endforeach
