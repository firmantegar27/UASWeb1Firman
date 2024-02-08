<h2>Top-up History</h2>

@foreach(auth()->user()->topupHistories as $history)
    <p>Game: {{ $history->game->title }}, Amount: {{ $history->amount }}</p>
@endforeach