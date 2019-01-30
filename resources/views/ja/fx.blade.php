@extends('ja.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if(Auth::user()->auth <= 0)
      <p>
        <a class="btn btn-primary" href="{{route('admin')}}">
          管理者ページ
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
          @if($system->name == 'zeus')
          <p><font color="orange" face="HiraKakuPro-W6">月間収益率: 4-8%</font></p>
          @elseif($system->name == 'poseidon')
          <p><font color="yellow" face="HiraKakuPro-W6">月間収益率: 約43%</font></p>
          @elseif($system->name == 'athena')
          <p><font color="green" face="HiraKakuPro-W6">月間収益率: 3-5%</font></p>
          @elseif($system->name == 'apollon')
          <p><font color="yellow" face="HiraKakuPro-W6">月間収益率: ??%</font></p>
          @elseif($system->name == 'ares')
          <p><font color="yellow" face="HiraKakuPro-W6">ComingSoon</font></p>
          @elseif($system->name == 'hermes')
          <p><font color="yellow" face="HiraKakuPro-W6">ComingSoon</font></p>
          @endif
        </div>
      </a>
      @endforeach

    </div>
  </div>
</div>
</div>
@endsection