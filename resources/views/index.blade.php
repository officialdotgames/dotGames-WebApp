@extends('layouts.master')
@section('title', 'Home')

@section('content')
<header class="bg-primary text-white">
  <div class="container text-center">
    <h1><a href="{{url('/')}}">dotGAMES</a></h1>
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        @include('layouts.messages')
      </div>
    </div>
    <div class="row justify-content-md-center">
      <form method="POST" action="{{ url('/join') }}" class="lead col-md-4">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
        <div class="form-group">
          <input type="text" class="form-control" name="party_code" placeholder="Party Code" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="nickname" placeholder="Nickname" required>
        </div>
        <button type="submit" class="btn btn-primary">Join Your Party!</button>
      </form>
    </div>
  </div>
</header>

<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>About dotGAMES</h2>
        <p class="lead">dotGAMES Built by four K-State CS and CIS students during HackISU VIII in October 2017. The idea behind dotGAMES is to bring some of our favorite party games like MadLibs to Amazon Alexa. Join up with your friends to play some dotGAMES at your next party!</p>
      </div>
    </div>
  </div>
</section>

<section id="services" class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>Available Games</h2>
        <p class="lead">Madlibs</p>
        @if(!is_null($lib))
        <p>Recent Madlib:<br /> {!!$lib!!}</p>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection
