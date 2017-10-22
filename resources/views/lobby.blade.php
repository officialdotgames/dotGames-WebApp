@extends('layouts.master')
@section('title', 'Game')

@section('content')
<header class="bg-primary text-white">
  <div class="container text-center">
    <h1>{{$party->game->name}} Lobby</h1>
    <p>Say "start game" when everyone has joined.</p>
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        @include('layouts.messages')
      </div>
    </div>
    <div class="row justify-content-md-center">
      <span id="players"></span>
    </div>
  </div>
</header>
@endsection

@section('footer')
<script>
poll();
function poll(){
  $.ajax({
    "url": "/api/party/{{ $party->id }}/poll",
    "method": "GET",
    "error": function (errormessage) {
      $('#players').html('');
      $.each(errormessage.responseJSON.players, function(key, value) {
        $('#players').append(value.name+'<br />');
      });
    }
  }).done(function (response) {

    window.location.href = "/game";
  });
}

var t=setInterval(poll, 1000);
</script>
@endsection
