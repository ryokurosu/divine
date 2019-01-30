@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default shark">
       <div class="panel-heading" style="color:{{$system->colorcode}}">{{$system->name}}</div>
       <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="nav-item active">
            <a href="#tab1" class="nav-link active" data-toggle="tab">Overview</a>
          </li>
          <li class="nav-item">
            <a href="#tab2" class="nav-link" data-toggle="tab">Evidence</a>
          </li>
          <li class="nav-item">
            <a href="#tab3" class="nav-link" data-toggle="tab">Backtest</a>
          </li>
        </ul>
        <div class="tab-content">
          @if($system->name == 'zeus')
          <div id="tab1" class="tab-pane active">
            <h3>Overview</h3>
            <p>Currency pair :  EURJPY, EURUSD, AUDJPY, AUDCAD, AUDNZD</p>
            <p>Trading Style : Swin・Nan Ping Martin</p>
            <p>Initial margin amount : 150,000 yen</p>
            <p>Maximum number of positions : 20</p>
            <p>Use time Foot : 1 minute</p>
            <p>Maximum stop loss : 120 pips</p>
            <p>Maximum drawdown :21%</p>
            <p>Both : houses</p>
            <p>Product line : MT4</p>
            <p>Fundamental stop: Yes</p>
            <p>Important Point: We will choose currency pairs according to the market...</p>
            <p>For viewing account: Server->(GemForex-Live2), MT4ID->(8037), Password->(Test1234)</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>Evidence</h3>
            <p>Operation period : 2016.1 to 2017.12</p>
            <p>Margin : 150,000 yen</p>
            <p>Revenue : 115,200 yen</p>
            <p>Account balance : 265,200 yen</p>
            <p>Total rate of return : 76.8%</p>
            <p>Annual rate of return : 38.4%</p>
            <p>Monthly rate of return : 7.93%</p>
          </div>
          @elseif($system->name == 'poseidon')
          <div id="tab1" class="tab-pane active">
            <h3>Overview</h3>
            <p>Currency pair : EUR/USD etc...4pear</p>
            <p>Trading Style : Nan Ping</p>
            <p>Initial margin amount : 100,000 yen</p>
            <p>Maximum number of positions : 7</p>
            <p>Use time Foot : 1 minute</p>
            <p>Maximum stop loss : 50 pips</p>
            <p>Maximum drawdown : 33.3%</p>
            <p>Both : no</p>
            <p>Product line : MT4</p>
            <p>Fundamental stop: Yes</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>Evidence</h3>
            <p>Operation period : 2018.6 - 2018.12</p>
            <p>Margin : 150,000 yen</p>
            <p>Revenue : 746,956 yen</p>
            <p>Account balance : 896.956 yen</p>
            <p>Total return rate : 436.72%</p>
            <p>Annual rate of return : 7,000%</p>
            <p>Monthly rate of return : 43%</p>
          </div>
          @elseif($system->name == 'athena')
           <div id="tab1" class="tab-pane active">
            <h3>Overview</h3>
            <p>Currency pair :  EURJPY, EURUSD, AUDJPY, AUDCAD, AUDNZD</p>
            <p>Transaction style: Swing · Nanping Martin</p>
            <p>Initial margin amount: 100,000 yen</p>
            <p>Maximum number of positions: 20</p>
            <p>Usage time Foot: 1 minute</p>
            <p>Maximum stop loss: 320 pips</p>
            <p>Maximum drawdown: 20.52%</p>
            <p>Both houses: yes</p>
            <p>Product line: MT4</p>
            <p>Fundamental stop: None</p>
            <p>Important Point: We will choose currency pairs according to the market...</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>Evidence</h3>
            <p>Operation period: 2008.1 to 2018.8.16</p>
            <p>Operating margin: 10,000 yen</p>
            <p>Revenue: 975,683 yen</p>
            <p>Account balance: 1,075,683 yen</p>
            <p>Total return: 975.7%</p>
            <p>Annual rate of return: 81.3%</p>
            <p>Monthly rate of return: 6.78%</p>
          </div>
          @elseif($system->name == 'apollon')
          <div id="tab1" class="tab-pane active">
            <h3>Overview</h3>
            <p>Currency pair: USD/JPY, EUR/JPY, EUR/USD</p>
            <p>Transaction style: Scalping Nanping Martin</p>
            <p>Initial margin amount: 200,000 yen</p>
            <p>Maximum number of positions: 84</p>
            <p>Usage time Foot: 1 minute</p>
            <p>Maximum stop loss: ?? pips</p>
            <p>Maximum drawdown: 8%</p>
            <p>Both houses: yes</p>
            <p>Product line: MT4</p>
            <p>Fundamental stop: yes</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>Evidence</h3>
            <p>Operating margin: ?? yen</p>
            <p>Revenue: ?? yen</p>
            <p>Account balance: ?? yen</p>
            <p>Operation period: ??</p>
            <p>Total return: ??%</p>
            <p>Annual rate of return: ??%</p>
            <p>Monthly rate of return: ??%</p>
          </div>
          @elseif($system->name == 'ares')

          @elseif($system->name == 'hermes')

          @else
          <div id="tab1" class="tab-pane active">
            <h3>Overview</h3>
            <p>Currency pair:</p>
            <p>Transaction style: </p>
            <p>Initial margin amount: </p>
            <p>Maximum number of positions: </p>
            <p>Usage time Foot: </p>
            <p>Maximum stop loss:</p>
            <p>Maximum drawdown: </p>
            <p>Both houses:</p>
            <p>Product line: </p>
            <p>Fundamental stop: </p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>Evidence</h3>
            <p>Operating margin:</p>
            <p>Revenue:</p>
            <p>Account balance:</p>
            <p>Operation period:</p>
            <p>Total return:</p>
            <p>Annual rate of return:</p>
            <p>Monthly rate of return:</p>
          </div>
          @endif
          <div id="tab3" class="tab-pane">
            <embed src="{{url('/backtest/'.$system->name.'.pdf')}}" width="100%" height="375">
              <a href="{{url('/backtest/'.$system->name.'.pdf')}}">Detail (PDF)</a>
            </div>
          </div>
          <div class="open-account-container">
            <a class="btn btn-primary big" href="{{route('system.open',$system->name)}}">Open an account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
