@extends('layouts.auth_app')

@section('title', 'ログイン')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="card mt-3">
                            <div class="card-header">
                                <div class="d-inline-block order_date">
                                    <div class="font-weight-lighter">
                                        注文日
                                    </div>
                                    <div class="font-weight-lighter">
                                        2020/2/1
                                    </div>
                                </div>
                                <div class="d-inline-block order_date ml-5">
                                    <div class="font-weight-lighter">
                                        合計
                                    </div>
                                    <div class="font-weight-lighter">
                                        ¥980
                                    </div>
                                </div>
                                <div class="d-inline-block order_date float-right">
                                    <div class="font-weight-lighter">
                                        注文番号 
                                    </div>
                                    <div class="font-weight-lighter">
                                        12212121212122
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-row">
                                <div class="order_product_image img-container--flex-box">
                                    <img src="{{ asset('images/no_image.jpg') }}" width="150" height="auto" />
                                </div>
                                <div class="font-weight-lighter">
                                    栃木県産のあま~いいちご　1箱 約300g(5〜15粒)×2パック 計約600g
                                </div>
                                <div class="font-weight-lighter">
                                    <button type="button" class="btn btn-light">詳しくみる</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection