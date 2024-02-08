<div class="row">
  @foreach($gamesPC as $gamePC)
    <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="{{ asset('images/pc/' . $gamePC->image) }}" class="card-img-top" alt="{{ $gamePC->title }}">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">{{ $gamePC->dev }}</h5>
              <p class="card-text" style="text-align: center; color: white;">{{ $gamePC->title }}</p>
              <a href="{{ url('/topup/game-pc/' . $gamePC->id) }}" class="btn btn-primary custom-button">Top up</a>
            </div>
        </div>
    </div>
  @endforeach
</div>

    {{-- <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/pc/Icon-Apex.jpg" class="card-img-top" alt="Metal Slug Awakening">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color:white; font-size:12px;">VNGGAMES</h5>
              <p class="card-text" style="text-align: center; color: white;">Metal Slug Awakening</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
          </div>
    </div>

    <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/pc/Icon-FORTNITE-.jpg" class="card-img-top" alt="Ragnarok Origin Online">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Gravity Game Hub</h5>
              <p class="card-text" style="text-align: center; color: white;">Ragnarok Origin Online</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
          </div>
    </div>

    <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/pc/Icon-LOL.webp" class="card-img-top" alt="Free Fire">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Garena</h5>
              <p class="card-text" style="text-align: center; color: white;">Free Fire</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
          </div>
    </div>

    <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/pc/Icon-nikke.jpg" class="card-img-top" alt="Free Fire">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Garena</h5>
              <p class="card-text" style="text-align: center; color: white;">Free Fire</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
          </div>
    </div>

    <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/pc/Icon-PB.jpg" class="card-img-top" alt="Free Fire">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Garena</h5>
              <p class="card-text" style="text-align: center; color: white;">Free Fire</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
          </div>
    </div>

    <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/pc/Icon-PUBG.jpg" class="card-img-top" alt="Free Fire">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Garena</h5>
              <p class="card-text" style="text-align: center; color: white;">Free Fire</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
          </div>
    </div>

    <div class="col">
        <div class="card justify-content-center align-items-center mt-5" style="width: 14rem;">
            <img src="images/pc/Icon-VALORANT.jpg" class="card-img-top" alt="Free Fire">
            <div class="card-body card-body d-flex flex-column align-items-center">
              <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">Garena</h5>
              <p class="card-text" style="text-align: center; color: white;">Free Fire</p>
              <a href="#" class="btn btn-primary custom-button">Top up</a>
            </div>
          </div>
    </div> --}}
