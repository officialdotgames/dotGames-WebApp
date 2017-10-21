@extends('layouts.front')
@section('title', 'Join')

@section('content')
<div class="container container-small">
    <form class="form-horizontal" method="POST" action="{{ url('/join') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
        <legend>Join a Party</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-5 control-label">Party Code</label>
            <div class="col-lg-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter your party code">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Join!</button>
                    </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div>
    </fieldset>
    </form>
</div>
@endsection

