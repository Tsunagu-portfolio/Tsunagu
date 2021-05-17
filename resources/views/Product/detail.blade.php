@extends('layouts.app')

@section('content')
  <main>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
        <li class="breadcrumb-item active" aria-current="page">商品詳細</li>
      </ol>
    </nav>
    <div class="card">
      <div class="container">
        <div class="row">
          <div class="leftside col-4">            
            <div class="likePosition">
              <img src="/images/{{ $product->product_image_url }}" class="img-thumbnail mt-3" alt="商品画像">
              <div class="likeIcon">
                <i class="fa fa-heart"></i>
              </div>
            </div>
          </div>
          <div class="rightside col-sm">            
            <h3 class="my-5 ml-4">商品名: {{ $product->product_name }}</h3>
            <h4 class="mb-3 ml-4">価格 : {{ $product->price }} 円</h4>
            {{-- <h4 class="mb-5 ml-4"> 出品者名: {{ $product->Seller->seller_name }}</h4> --}}
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
      <hr class="ml-4" style="width: 75rem;">
      <div class="row">
        <div class="leftside">
          <h5 class="ml-4 mb-3">内容</h5>
        </div>
        <div class="rightside">
          <h5 class="ml-4">{{ $product->sales_unit }}</h5>
        </div>
      </div>
      <hr class="ml-4" style="width: 75rem;">
      <div class="row">
        <div class="leftside">
          <h5 class="ml-4 mb-1">発送:</h5>
        </div>
        <div class="rightside">
          
          <h5 class="ml-4 mb-1" style="text-align: left; line-height:30px;">{!! nl2br(e($product->shipping_information)) !!}</h5>
          <h5 class="mb-2"></h5>
        </div>        
      </div>
      <hr class="ml-4" style="width: 75rem;">      
        <div class="row">
          <div class="leftside">
            
            
            <h5 class="ml-4 mb-1">商品説明:{{ $product->description }}</h5>
          </div>
          <div class="rightside">
            <h5 class="ml-4 mb-1"></h5>
          </div>
        
      </div>
      <hr class="ml-4" style="width: 75rem;">
        <div class="row justify-content-center">
          <div class="card mb-4" style="width: 85%; ">
            <div class="card-body">
              {{-- {{ $product->$seller->seller_message }} --}}
            </div>
          </div>
        </div>
    </div>
  </main>
  <script src="{{ asset('･js/tsunagu.js') }}"></script>
@endsection
