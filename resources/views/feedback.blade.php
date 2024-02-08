@extends('layouts.search-main')

@section('feedback')
<div class="container" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <form action="/" method="get">
        <textarea style="margin-top: 20px; text-align: center;" name="feedback" id="feedback" cols="70" rows="15"></textarea>
        <button class="btn btn-outline-light" type="submit" style="display: block; margin-top: 10px;">Submit</button>
    </form>
</div>
@endsection

@section('subcription')
   @include('partials.subcription')
@endsection

@section('footer')
    @include('partials.footer')
@endsection

