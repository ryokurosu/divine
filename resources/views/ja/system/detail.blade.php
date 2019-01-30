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
          @if($system->name == 'zeus')
          <div id="tab1" class="tab-pane active">
            <h3>概要</h3>
            <p>通貨ペア: EURJPY, EURUSD, AUDJPY, AUDCAD, AUDNZD,</p>
            <p>取引スタイル: スイング・ナンピン マーチン</p>
            <p>初期証拠金金額: 15万円</p>
            <p>最大ポジション数 : 20</p>
            <p>使用時間足: １分足</p>
            <p>最大ストップロス: 120pips</p>
            <p>最大ドローダウン: 21%</p>
            <p>両建て: あり</p>
            <p>取扱商品: MT4</p>
            <p>ファンダメンタル止め：有り</p>
            <p>注意点: 相場に合わせて、通貨ペアを選択していきます。</p>
            <p>閲覧用口座: サーバー->(GemForex-Live2), MT4ID->(8037), パスワード->(Test1234)</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>エビデンス</h3>
            <p>運用期間: 2016.1～2017.12</p>
            <p>証拠金: 150,000円</p>
            <p>収益: 115,200円</p>
            <p>口座残高: 265,200円</p>
            <p>総収益率: 76.8%</p>
            <p>年間収益率: 38.4%</p>
            <p>月間収益率: 7.93%</p>
          </div>
          @elseif($system->name == 'poseidon')
          <div id="tab1" class="tab-pane active">
            <h3>概要</h3>
            <p>通貨ペア : EUR/USD 他4通貨</p>
            <p>取引スタイル :ナンピン</p>
            <p>初期証拠金金額 : 10万円</p>
            <p>最大ポジション数  : 7</p>
            <p>使用時間足 : １分足</p>
            <p>最大ストップロス : 50pips</p>
            <p>最大ドローダウン : 33.3%</p>
            <p>両建て :なし</p>
            <p>取扱商品 : MT4</p>
            <p>ファンダメンタル止め：有り</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>エビデンス</h3>
            <p>運用期間 : 2018.6～2018.11</p>
            <p>証拠金 : 150,000円</p>
            <p>収益 : 746,956円</p>
            <p>口座残高 : 896.956円</p>
            <p>総収益率 : 436.72%</p>
            <p>年間収益率 : 約7,000%</p>
            <p>月間収益率 : 43%</p>
          </div>
          @elseif($system->name == 'athena')
          <div id="tab1" class="tab-pane active">
            <h3>概要</h3>
            <p>通貨ペア: EURJPY, EURUSD, AUDJPY, AUDCAD, AUDNZD,</p>
            <p>取引スタイル  : スイング・ナンピン マーチン</p>
            <p>初期証拠金金額 : 10万円</p>
            <p>最大ポジション数  : 20</p>
            <p>使用時間足 : １分足</p>
            <p>最大ストップロス  : 320pips</p>
            <p>最大ドローダウン: 20.52%</p>
            <p>両建て : あり</p>
            <p>取扱商品 : MT4</p>
            <p>ファンダメンタル止め：無し</p>
            <p>注意点: 相場に合わせて、通貨ペアを選択していきます。</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>エビデンス</h3>
            <p>運用期間 : 2008.1～2018.8.16</p>
            <p>証拠金 : 400,000円</p>
            <p>収益 : 975,683円</p>
            <p>口座残高 : 1,075,683円</p>
            <p>総収益率 : 975.7%</p>
            <p>年間収益率 : 81.3%</p>
            <p>月間収益率 : 6.78%</p>
          </div>
          @elseif($system->name == 'apollon')
          <div id="tab1" class="tab-pane active">
            <h3>概要</h3>
            <p>通貨ペア : USD/JPY, EUR/JPY, EUR/USD</p>
            <p>取引スタイル  : スキャル・ナンピン マーチン</p>
            <p>初期証拠金金額 : 20万円</p>
            <p>最大ポジション数  : 84</p>
            <p>使用時間足 : １分足</p>
            <p>最大ストップロス  : ??％</p>
            <p>最大ドローダウン : 8%</p>
            <p>両建て : あり</p>
            <p>取扱商品 : MT4</p>
            <p>注意点: 相場に合わせて、通貨ペアを選択していきます。</p>
            <p>閲覧用口座: サーバー->(#), MT4ID->(#), パスワード->(#)</p>
          </div>
          <div id="tab2" class="tab-pane">
            <p>運用証拠金 : ??円</p>
            <p>収益 : ??円</p>
            <p>口座残高 : ??円</p>
            <p>運用期間 : ??</p>
            <p>総収益率 : ??%</p>
            <p>年間収益率 : ??%</p>
            <p>月間収益率 : ??%</p>
          </div>
          @elseif($system->name == 'ares')

          @elseif($system->name == 'hermes')

          @else
          <div id="tab1" class="tab-pane active">
            <h3>概要</h3>
            <p>通貨ペア :</p>
            <p>取引スタイル  : </p>
            <p>初期証拠金金額 : </p>
            <p>最大ポジション数  : </p>
            <p>使用時間足 : </p>
            <p>最大ストップロス  :</p>
            <p>最大ドローダウン :</p>
            <p>両建て : </p>
            <p>取扱商品 : </p>
          </div>
          <div id="tab2" class="tab-pane">
            <p>運用証拠金 : </p>
            <p>収益 : </p>
            <p>口座残高 : </p>
            <p>運用期間 : </p>
            <p>総収益率 : </p>
            <p>年間収益率 :</p>
            <p>月間収益率 :</p>
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
