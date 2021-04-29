<header>
    <nav class="navbar navbar-expand-lg navbar-light py-1">
        <div class="row bg-light justify-content-end" style="padding-right: 250px;">
            <div class="col-sm-8" style="display: flex;">    
                <img src="{{ asset('images/logomarket.png') }}" class="logo mt-3" width="50" height="50" alt="TSUNAGU">
                <a href="#" class="p-2 mt-4 text-dark">Tsunagu</a>
                <div class="ml-3">
                    <input type="search" name="" id="search" class="search-box" placeholder="商品/生産者を探す">
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="nav-bar">
            <div>
                <ul class="navbar-nav flex-row" style="text-align:center;"> 
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('') }}"><img src="{{ asset('images/mypage.png') }}" width="40" height="40" alt="マイページ">
                            <br><span>マイページ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('') }}"><img src="{{ asset('images/good.png') }}" width="40" height="40" alt="お気に入り">
                            <br><span>お気に入り</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('') }}"><img src="{{ asset('images/rireki.png') }}" width="40" height="40" alt="購入履歴">
                            <br><span>購入履歴</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('') }}"><img src="{{ asset('images/alarm.png') }}" width="40" height="40" alt="通知">
                            <br><span>通知</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('') }}"><img src="/images/cart.png" width="40" height="40" alt="カート">
                            <br><span>カート</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>