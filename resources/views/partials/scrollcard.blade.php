<div class="row flex-nowrap overflow-auto">
  @foreach($gamesAll as $gameAll)
    <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="{{ asset('images/all/' . $gameAll->image) }}" class="card-img-top" alt="{{ $gameAll->title }}">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">{{ $gameAll->dev }}</h5>
              <p class="card-text" style="text-align: center; color: white;">{{ $gameAll->title }}</p>
              <a href="{{ url('/topup/game-all/' . $gameAll->id) }}" class="btn btn-primary custom-button">Top up</a>
            </div>
        </div>
    </div>
  @endforeach
</div>

