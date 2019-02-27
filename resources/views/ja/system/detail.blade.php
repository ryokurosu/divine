@extends('ja.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default shark">
       <div class="panel-heading" style="color:{{$system->colorcode}}">{{$system->name}}</div>
       <div class="panel-body">
         <ul class="nav nav-tabs">
           <li class="nav-item active">
            <a href="#tab1" class="nav-link active" data-toggle="tab">概要</a>
          </li>
          <li class="nav-item">
            <a href="#tab2" class="nav-link" data-toggle="tab">エビデンス</a>
          </li>
          <li class="nav-item">
            <a href="#tab3" class="nav-link" data-toggle="tab">バックテスト</a>
          </li>
        </ul>
        <div class="tab-content">
          @if($system->name == 'leaping')
          <div id="tab1" class="tab-pane active">
            <h3>概要</h3>
            <p>通貨ペア:USD/JPY , EURUSD</p>
            <p>取引スタイル:ナンピンマーチンゲール</p>
            <p>初期証拠金金額:100000</p>
            <p>最大ポジション数 :16</p>
            <p>(ドル円7 , ユロドル6ポジ)</p>
            <p>使用時間足:1分足</p>
            <p>最大ストップロス:なし</p>
            <p>最大ドローダウン:70%</p>
            <p>両建て:あり</p>
            <p>取扱商品:</p>
            <p>ファンダメンタル止め:1/28～2/1まで</p>
            <p>注意点:含み損が多くなるのでドローダウンは覚悟で。リスク低めの設定をしていただき、定期的に出金をかけていただくようお願いします。</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>エビデンス</h3>
            <p>運用証拠金：100000(10月以降は200000)</p>
            <p>収益：7月から12月まで合計30万ほどは回収</p>
            <p>運用期間2018/7～12</p>
            <p>総収益率：180%</p>
            <p>月間収益率5ヶ月間平均36%</p>
            <p>＋バックテスト資料</p>
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
