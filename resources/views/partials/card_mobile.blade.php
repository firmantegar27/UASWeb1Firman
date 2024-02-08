
{{-- @php
    $game1 = \App\Models\Game::find(1); // Ganti 1 dengan ID yang sesuai
    $game2 = \App\Models\Game::find(2); // Ganti 2 dengan ID yang sesuai
@endphp --}}


<div class="row">
  @foreach($gamesMobile as $gameMobile)
      <div class="col">
          <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
              <img src="{{ asset('images/mobile/' . $gameMobile->image) }}" class="card-img-top" alt="{{ $gameMobile->title }}">
              <div class="card-body card-body d-flex flex-column align-items-center">
                <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">{{ $gameMobile->dev }}</h5>
                <p class="card-text" style="text-align: center; color: white;">{{ $gameMobile->title }}</p>
                <a href="{{ url('/topup/game-mobile/' . $gameMobile->id) }}" class="btn btn-primary custom-button">Top up</a>
              </div>
          </div>
      </div>
      @endforeach

      {{-- @foreach($games as $game)
      <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/mobile/Icon-Genshin.jpg" class="card-img-top" alt="{{ $game->title }}">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">{{ $game->dev }}</h5>
              <p class="card-text" style="text-align: center; color: white;">{{ $game->title }}</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
        </div>
    </div>
    @endforeach

    @foreach($games as $game)
    <div class="col">
      <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
          <img src="images/mobile/Icon-Genshin.jpg" class="card-img-top" alt="{{ $game->title }}">
          <div class="card-body card-body d-flex flex-column align-items-center">
            <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">{{ $game->dev }}</h5>
            <p class="card-text" style="text-align: center; color: white;">{{ $game->title }}</p>
            <a href="#" class="btn btn-primary custom-button">Top up</a>
          </div>
      </div>
  </div>
  @endforeach

  @foreach($games as $game)
  <div class="col">
    <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
        <img src="images/mobile/Icon-Genshin.jpg" class="card-img-top" alt="{{ $game->title }}">
        <div class="card-body card-body d-flex flex-column align-items-center">
          <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">{{ $game->dev }}</h5>
          <p class="card-text" style="text-align: center; color: white;">{{ $game->title }}</p>
          <a href="#" class="btn btn-primary custom-button">Top up</a>
        </div>
    </div>
</div>

 @endforeach --}}

      {{-- @php
        // $game = \App\Models\Game::find(2);
      @endphp --}}

      {{-- <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/mobile/Icon-MSA.jpg" class="card-img-top" alt="{{ $game2->title }}">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">{{ $game2->dev }}</h5>
              <p class="card-text" style="text-align: center; color: white;">{{ $game2->title }}</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
        </div>
    </div> --}}
    

    {{-- <div class="row">
      @foreach($games as $game)
        <div class="col">
            <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
                <img src="images/mobile/Icon-Genshin.jpg" class="card-img-top" alt="{{ $game->title }}">
                <div class="card-body card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">{{ $game->dev }}</h5>
                  <p class="card-text" style="text-align: center; color: white;">{{ $game->title }}</p>
                  <a href="#" class="btn btn-primary custom-button">Top up</a>
                </div>
            </div>
        </div>
      @endforeach --}}

    <!-- partials/game-card.blade.php -->
  {{-- <div class="col">
  <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
      <img src="{{ asset($game->image_path) }}" class="card-img-top" alt="{{ $game->name }}">
      <div class="card-body card-body d-flex flex-column align-items-center">
          <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">{{ $game->developer }}</h5>
          <p class="card-text" style="text-align: center; color: white;">{{ $game->name }}</p>
          <a href="{{ route('topup', ['id' => $game->id]) }}" class="btn btn-primary custom-button">Top up</a>
      </div>
  </div>
  </div> --}}


    {{-- <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/mobile/Icon-MSA.jpg" class="card-img-top" alt="Metal Slug Awakening">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color:white; font-size:12px;">VNGGAMES</h5>
              <p class="card-text" style="text-align: center; color: white;">Metal Slug Awakening</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
          </div>
    </div> --}}

    {{-- <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/mobile/Icon-ROO.jpg" class="card-img-top" alt="Ragnarok Origin Online">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Gravity Game Hub</h5>
              <p class="card-text" style="text-align: center; color: white;">Ragnarok Origin Online</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
          </div>
    </div>

    <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/mobile/Icon-ff.jpg" class="card-img-top" alt="Free Fire">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Garena</h5>
              <p class="card-text" style="text-align: center; color: white;">Free Fire</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
        </div>
    </div>

    <div class="col">
      <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
          <img src="images/mobile/icon-ToF.jpg" class="card-img-top" alt="Free Fire">
          <div class="card-body card-body d-flex flex-column align-items-center">
            <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Garena</h5>
            <p class="card-text" style="text-align: center; color: white;">Free Fire</p>
            <a href="#" class="btn btn-primary custom-button">Top up</a>
          </div>
      </div>
  </div>

  <div class="col">
    <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
        <img src="images/mobile/icon-AOV.jpg" class="card-img-top" alt="Free Fire">
        <div class="card-body card-body d-flex flex-column align-items-center">
          <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Garena</h5>
          <p class="card-text" style="text-align: center; color: white;">Free Fire</p>
          <a href="#" class="btn btn-primary custom-button">Top up</a>
        </div>
    </div>
  </div>

  <div class="col">
  <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
      <img src="images/mobile/icon-Brawl.jpg" class="card-img-top" alt="Free Fire">
      <div class="card-body card-body d-flex flex-column align-items-center">
        <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Garena</h5>
        <p class="card-text" style="text-align: center; color: white;">Free Fire</p>
        <a href="#" class="btn btn-primary custom-button">Top up</a>
      </div>
  </div>
  </div>

  <div class="col">
  <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
      <img src="images/mobile/icon-CODM.jpg" class="card-img-top" alt="Free Fire">
      <div class="card-body card-body d-flex flex-column align-items-center">
        <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Garena</h5>
        <p class="card-text" style="text-align: center; color: white;">Free Fire</p>
        <a href="#" class="btn btn-primary custom-button">Top up</a>
      </div>
  </div>
  </div> --}}
</div>