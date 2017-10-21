@extends('layouts.master')
@section('title', 'Game')

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
        <button type="submit" class="btn btn-primary">Enter Mad Lib!</button>
      </form>
    </div>
  </div>
</header>

@endsection
