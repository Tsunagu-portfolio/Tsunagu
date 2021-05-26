@extends('layouts.app')

@section('content')

@foreach($product as $value1)
  @foreach($value1->seller->seller_favorite as $value2)
  @endforeach
@endforeach

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
              <img src="/images/{{ $value1->product_image_url }}" class="img-thumbnail mt-3" alt="商品画像">
              <div class="likeIcon">
                <i class="fa fa-heart"></i>
              </div>
            </div>
          </div>
          <div class="rightside col-sm">            
            <h3 class="mt-5 mb-3 ml-4">商品名:   {{ $value1->product_name }}</h3>
            <h3 class="mb-3 ml-4">商品カテゴリー:   {{ $value1->category->category_name }}</h3>
            <h4 class="mb-3 ml-4">価格 : {{ $value1->price }} 円</h4>
            
            <h4 class="mb-5 ml-4">生産者名: 【{{ $value1->seller->seller_name }}】 </h4>
            {{-- <h4 class="mb-5 ml-5">生産者名: 【{{ $value1->seller->seller_name }}】  <br><br>この生産者に【いいね】をつけているユーザーの名前は <br> {{ $value2->m_user->last_name }} The {{ $value2->m_user->first_name }}</h4> --}}
            <div class="rightside col-sm" style="text-align:end; ">
              <form action="/addCart" method="post" enctype="multipart/form-data">
                @csrf
                <div class="field mt-5">
                  注文個数
                  <button class="button" id="down">－</button>
                  <input type="number" value="1"  min="0" max="10" class="inputtext" id="textbox" name="product_quantity">
                  <input type="hidden" name="product_id" value="{{$value1->id }}">
                  <button class="button" id="up">＋</button>
                </div>
                <button class="mt-2 btn btn-primary mr-4"  type="submit" value="カートへ">カートに入れる</button>
              </form>       
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
          <h5 class="ml-4">{{ $value1->sales_unit }}</h5>
        </div>
      </div>
      <hr class="ml-4" style="width: 75rem;">
      <div class="row">
        <div class="leftside">
          <h5 class="ml-4 mb-1">発送:</h5>
        </div>
        <div class="rightside">
          
          <h5 class="ml-4 mb-1" style="text-align: left; line-height:30px;">{!! nl2br(e($value1->shipping_information)) !!}</h5>
          <h5 class="mb-2"></h5>
        </div>        
      </div>
      <hr class="ml-4" style="width: 75rem;">      
        <div class="row">
          <div class="leftside">
            
            
            <h5 class="ml-4 mb-1">商品説明:{{ $value1->description }}</h5>
          </div>
          <div class="rightside">
            <h5 class="ml-4 mb-1"></h5>
          </div>
        
      </div>
      <hr class="ml-4" style="width: 75rem;">
        <div class="row justify-content-center">
          <div class="card mb-4" style="width: 85%; ">
            <div class="card-body">
              生産者からのひとこと: {{ $value1->seller->seller_message }}
              
            </div>
          </div>
        </div>
    </div>
    
  </main>
  <script>
    (() => {
  //HTMLのid値を使って以下のDOM要素を取得
  const downbutton = document.getElementById('down');
  const upbutton = document.getElementById('up');
  const text = document.getElementById('textbox');
  const reset = document.getElementById('reset');

  //ボタンが押されたらカウント減
  downbutton.addEventListener('click', (event) => {
    //0以下にはならないようにする
    if (text.value >= 1) {
      text.value--;
    }
  });

  //ボタンが押されたらカウント増
  upbutton.addEventListener('click', (event) => {
    text.value++;
  })

  //ボタンが押されたら0に戻る
  reset.addEventListener('click', (event) => {
    text.value = 0;
  })

})();
  </script>
  {{-- <script src="{{ asset('public/js/tsunagu.js') }}"></script> --}}
@endsection
