@extends('layouts.app')

@section('content')
@foreach($product as $value)
  {{-- @foreach($value1->seller->seller_favorite as $value2)
  @endforeach --}}
@endforeach

      <main>
    <h1 style="text-align:center;" class="mt-5">ショッピングカート</h1>
    <p style="text-align:center;" class="mt-5">{{ $SessionProductQuantity }}の商品が入っています</p>
    @php dd( $SessionProductQuantity); @endphp
    <hr width="">
    <div class="container">
      <div class="row">
       
        <div class="card mb-3 ml-3" style="width:30rem;">
          <div class="card-body">
            {{-- 【{{ $value1->seller->seller_name }}】への注文 --}}
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="card mx-3 ml-2 col-sm" >
          <div class="row no-gutters">
            <div class="col-lg-6">
              {{-- <img src="/images/{{ $value1->product_image_url }}" class="card-img" alt="商品画像"> --}}
            </div>
            <div class="col-lg-6">
              <div class="card-body">
                <h4 class="card-title mb-3">商品名:  {{ $value->product_name }}</h4> 
                {{-- <p class="card-text mb-5">商品説明:{{ $value1->description }}</p> --}}
                {{-- <p class="card-text mt-5">価格 : {{ $value1->price }}円</p> --}} 
              </div>
            </div>
          </div>
        </div>
        <div class="rightside col-sm" style="text-align: center; ">
          <div class="field mt-5">
            <button class="button" id="down">－</button>
            <input type="text" value="0" class="inputtext" id="textbox">
            <button class="button" id="up">＋</button>
          </div>          
            <button class="mt-2 btn btn-warning mr-4" id="reset">RESET</button>
        </div>

      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row">
        <div class="leftside col-sm">
          <h4 class="ml-4">商品合計</h4>
          <h4 class="ml-4">送料</h4>
        </div>
        <div class="rightside col-sm mr-5" style="text-align: end; ">
          <p>10000</p>
          <p>500</p>
        </div>
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row">
        <div class="leftside col-sm">
          <h4 class="ml-4">注文合計</h4>
        </div>
        <div class="rightside col-sm">
          <p class="mr-5"  style="text-align: end; ">10500</p>
          <div class="mt-5" style="text-align: end;">
            <div class="btn btn-primary my-1" style="width:310px;">この注文を確定する</div>
            <div class="btn btn-danger my-1" style="width:310px;">この注文を取り消す</div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection