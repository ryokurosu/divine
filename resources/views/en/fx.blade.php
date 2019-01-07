@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if(Auth::user()->auth <= 0)
      <p>
        <a class="btn btn-primary" href="{{route('admin')}}">
          Admin page
        </a>
      </p>
      @endif
      <div class="panel panel-default">
       <div class="panel-heading">FX</div>

       @foreach($systems as $system)
       <a href="{{route('system.detail',$system->name)}}">
         <div id="{{$system->name}}" class="fx-card" style="border-color:{{$system->colorcode}}">
          <h2>{{$system->lname}}</h2>
          <div class="fx-icon" style="background-image:url(/image/{{$system->name}}.png);background-size: 75%;background-position: center center;background-repeat: no-repeat;"></div>
        </div>
      </a>
      @endforeach

    </div>
  </div>
</div>
</div>
@endsection
