@extends('layouts.master')
@section('title', 'Finished')

@section('content')
<header class="bg-primary text-white">
  <div class="container text-center">
    <h3>Finished</h3>
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        @include('layouts.messages')
      </div>
    </div>

  </div>
</header>
@endsection
