@extends('layouts.app')
@section('title')
tsunagu
@endsection
@section('content')
<main>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <a href="{{ route('detail', $product->id) }}" class="col-lg-4 col-md-6">
                <div class="card my-3">
                    <img src="/images/{{ $product->product_image_url }}" class="card-img" alt="商品画像">
                    <div class="card-body">
                        <p class="card-title">{{ $product->product_name }}</p>
                        <p class="card-text">¥{{ number_format($product->price) }} </p>
                    </div>
                </div>
            </a>
            @endforeach
             <div class="text-center" style="width: 200px;margin: 20px auto;">
                {{  $products->links()}} 
             </div>
        </div>
    </div>
</main>
@endsection
