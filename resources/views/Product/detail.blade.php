@extends('layouts.app')

@section('content')
  <main>
    <div class="card">
      <div class="container">
        <div class="row">
          <div class="leftside col-4">            
            <div class="likePosition">
              <img src="images/{{ $product->product_image_url }}" class="img-thumbnail" alt="...">
              <div class="likeIcon">
                <i class="fa fa-heart"></i>
              </div>
            </div>
          </div>
          <div class="rightside col-sm">            
            <h3 class="my-5 ml-5">{{ $product->product_name }}</h3>
            <h4 class="mb-3 ml-5">価格 : {{ $product->price }} 円</h4>
            <h4 class="mb-5 ml-5"> 出品者名</h4>
            <div class="rightside col-sm" style="text-align:end; ">
              <div class="field mt-5">
                注文個数
                <button class="button" id="down">－</button>
                <input type="text" value="0" class="inputtext" id="textbox">
                <button class="button" id="up">＋</button>
              </div>
              　<button class="mt-2 btn btn-primary mr-4">カートに入れる</button>
            </div>
          </div>
        </div>
      </div>
      <hr class="ml-5">
      <div class="row">
        <div class="leftside">
          <h5 class="ml-5 mb-3">内容</h5>
        </div>
        <div class="rightside">
          <h5 class="ml-5">{{ $product->sales_unit }}</h5>
        </div>
      </div>
      <hr class="ml-5">
      <div class="row">
        <div class="leftside">
          <h5 class="ml-5 mb-1">発送:</h5>
        </div>
        <div class="rightside">
          <h5 class="ml-5 mb-1">13時まで注文で当日発送</h5>
          <h5 class="mb-2">時間指定承ります</h5>
        </div>        
      </div>
      <div class="row">       
        <hr class="ml-5">
        <div class="row">
          <div class="leftside">
            <h5 class="ml-5 mb-1">商品説明:{{ $product->description }}</h5>
          </div>
          <div class="rightside">
            <h5 class="ml-4 mb-1"></h5>
          </div>
        </div>
        <hr class="ml-5">
      </div>
        <div class="row justify-content-center">
          <div class="card mb-4" style="width: 85%; ">
            <div class="card-body">
              {{-- {{ $m_sellers->seller_message }} --}}
            </div>
          </div>
        </div>
    </div>
  </main>
@endsection
