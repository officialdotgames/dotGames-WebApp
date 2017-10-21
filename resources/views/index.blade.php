@extends('layouts.master')
@section('title', 'Home')

@section('content')
<header class="bg-primary text-white">
  <div class="container text-center">
    <h1><a href="{{url('/')}}">dotGAMES</a></h1>
    <div class="row justify-content-md-center">
      <div id="error-messages" class="col-md-4">
        @include('layouts.messages')
      </div>
    </div>
    <div class="row justify-content-md-center">
      <form id="form-join-party" class="lead col-md-4">
        <!--<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>-->
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
        <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
        <ul>
          <li>Clickable nav links that smooth scroll to page sections</li>
          <li>Responsive behavior when clicking nav links perfect for a one page website</li>
          <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
          <li>Minimal custom CSS so you are free to explore your own unique design options</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="services" class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>Available Games</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>Meet Us</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
      </div>
    </div>
  </div>
</section>
@endsection
