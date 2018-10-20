@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default elephant">
       <div class="panel-heading">Elephant</div>
       <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a href="#tab1" class="nav-link active" data-toggle="tab">Overview</a>
          </li>
          <li class="nav-item">
            <a href="#tab2" class="nav-link" data-toggle="tab">Evidence</a>
          </li>
          <li class="nav-item">
            <a href="#tab3" class="nav-link" data-toggle="tab">Platform</a>
          </li>
        </ul>
        <div class="tab-content">
          <div id="tab1" class="tab-pane active">
            <h3>Overview</h3>
            <p>Currency pair : AUDCAD</p>
            <p>Trading Style : Swing Nan Ping Martin</p>
            <p>Initial margin amount : 150,000 yen</p>
            <p>Maximum number of positions : 20</p>
            <p>Use time Foot : 1 minute</p>
            <p>Maximum stop loss : 120 pips</p>
            <p>Maximum drawdown : 73.3%</p>
            <p>Both houses</p>
            <p>Product line : MT4</p>
            <p>Fundamental stop: Yes</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>Evidence</h3>
            <p>Operation period : 2016.1 - 2017.12</p>
            <p>Margin : 150,000 yen</p>
            <p>Revenue : 408,660 yen</p>
            <p>Account balance : 508,660 yen</p>
            <p>Total return rate : 272.88%</p>
            <p>Annual rate of return : 136.44%</p>
            <p>Monthly rate of return : 11.37%</p>
          </div>
          <div id="tab3" class="tab-pane">
            <embed src="{{url('/backtest/elephant.pdf')}}" width="100%" height="375">
            </div>
          </div>
          <div class="open-account-container">
            <a class="btn btn-primary big" href="{{route('elephant.open')}}">Open an account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
