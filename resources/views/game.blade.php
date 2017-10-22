@extends('layouts.master')
@section('title', 'Game')

@section('content')
<header class="bg-primary text-white">
  <div class="container text-center">
    <h1>Enter a {{ $prompt }}</h1>
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        @include('layouts.messages')
      </div>
    </div>
    <div class="row justify-content-md-center">
      <form method="POST" action="{{ url('/madlib') }}" class="lead col-md-4">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
        <input type="hidden" name="prompt_index" value="{{ $prompt_index }}"></input>
        <input type="hidden" name="party_id" value="{{ $party_id }}"></input>
        <div class="form-group">
          <input type="text" class="form-control" name="madLib" placeholder="Mad Lib" autofocus required>
        </div>
        <button type="submit" class="btn btn-primary">Enter Mad Lib!</button>
      </form>
    </div>
  </div>
</header>
@endsection
