@extends('layouts.search-main')

@section('result')
<div class="container">
<div class="row">
    @foreach($games as $game)
      {{-- <div class="col"> --}}
          <div class="card justify-content-center align-items-center mt-5 custom-card" style="width: 14rem;">
              <img src="{{ asset('images/all/' . $game->image) }}" class="card-img-top" alt="{{ $game->title }}">
              <div class="card-body card-body d-flex flex-column align-items-center">
                <h5 class="card-title" style="text-align: center; color: white; font-size:12px;">{{ $game->dev }}</h5>
                <p class="card-text" style="text-align: center; color: white;">{{ $game->title }}</p>
                <a href="{{ url('/topup/game-all/' . $game->id) }}" class="btn btn-primary custom-button">Top up</a>
              </div>
          </div>
      {{-- </div> --}}
    @endforeach
  </div>
</div>
@endsection

@section('support')
    <div class="container mt-5 mb-5">
        <h6 style="color: orange">Dukungan Pelanggan</h6>
        <h1 style="color: white">Hubungi Kami</h1>
        @include('partials.card_support')
    </div>
@endsection

@section('subcription')
   @include('partials.subcription')
@endsection

@section('footer')
    @include('partials.footer')
@endsection