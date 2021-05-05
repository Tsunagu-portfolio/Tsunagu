<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <style>
      .navbar {
        background-color: #DDDDDD;
      }
    
      ​.nav-item {
        font-size: 10px;
        margin-left: 40px;
        text-align: center;
      }
    
      ​.logo {
        background-color: #DDDDDD;
        border: 2px solid #800000;
        border-radius: 100px;
      }
    
      .search-box {
        width: 500px;
        height: 50px;
        background-image: url(kensaku.png);
        background-repeat: no-repeat;
        background-position: 8px center;
        background-size: auto 60%;
        background-color: #DDDDDD;
        margin: 14px 0 14px 0;
        padding-left: 40px;
        border: 2px solid #fff;
        border-radius: 40px;
        letter-spacing: 0.1em;
        outline: 0;
      }
    
      ​span {
        font-weight: bold;
        font-size: 10px;
        color: #000;
      }

      .btn {
        width: 150px;
      }

      .img {
        width: 100px;
        height: auto;
      }

      .breadcrumb {
        background-color: #F5F1EB;
      }

      body {
        background-color:#F4F4F4;
        display: flex;
        flex-flow: column;
        min-height: 100%;
      }

      main{
        background-color:#ffff;
        margin: 0 auto;
        width: 80rem;
        height: auto;
        padding: 10px;
        box-shadow: 0 0 8px gray;
        min-height: 100vh;
        flex: 1;
      }

      footer {
        width: 100%;
        background-color: #DDDDDD;
        height: 100px;
        box-shadow: 0px -8px 8px -5px #333;
        margin-top: auto;
      }

      h5 {
        font-size: 21px;
        padding: 10px 5px 5px 20px;
        text-align: center;
      }
      .copyright{
        text-align: center;
      }
      .footerFixed{
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }

      .headline {
          display: block;
          position: relative;
          padding-top: 30px;
          margin: auto;
        }
      .headline:before {
          content: '';
          position: absolute;
          left: 50%;
          bottom: -30px; /*下線の上下位置調整*/
          display: inline-block;
          width: 70rem; /*下線の幅*/
          height: 4px; /*下線の太さ*/
          -moz-transform: translateX(-50%);
          -webkit-transform: translateX(-50%);
          -ms-transform: translateX(-50%);
          transform: translate(-50%); /*位置調整*/
          background-color: #f5f5f5; /*下線の色*/
        }

        .clearfix::after {
          content: '';
          display: block;
          clear: both;
        }

        .card{
          width: 220px;
          height: auto;
        }

        .card__imgframe{
          width: 100%;
          height: auto;
          padding-top: 56.25%;
          background: url(https://placehold.jp/640x360.png) no-repeat center;
          background-size: cover;
          box-sizing: border-box;
        }

        .card__textbox{
          width: 100%;
          height: auto;
          padding: 20px 18px;
          background: #ffffff;
          box-sizing: border-box;
        }

        .card__textbox > * + *{
          margin-top: 10px;
        }

        .card__titletext{
          font-size: 20px;
          font-weight: bold;
          line-height: 125%;
        }

        .card__overviewtext{
          font-size: 12px;
          line-height: 150%;
        }

        .card-skin{
          overflow: hidden;
          border-radius: 8px;
          box-shadow: 0 4px 15px rgba(0,0,0,.2);
        }

        .slick-prev:before,
        .slick-next:before {
          color: #000 !important;
        }

        .multiple-item {
            width: 900px;
            margin: auto;
        }

    </style>
  <title>Tsunagu</title>
</head>

<body>
  <div class="footerFixed">

    <header>
      <nav class="navbar navbar-expand-lg navbar-light py-1">
        <div class="row bg-light justify-content-end" style="padding-right: 250px;">
          <div class="col-sm-8" style="display: flex;">
            <img src="logomarket.png" class="logo mt-3" width="50" height="50" alt="TSUNAGU">
          <a href="#" class="p-2 mt-4 text-dark">TSUNAGU</a>
          <div class="ml-3">
            <input type="search" name="" id="search" class="search-box" placeholder="商品/生産者を探す">
          </div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="nav-bar">
        <div>
          <ul class="navbar-nav flex-row" style="text-align:center;">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('') }}"><img src="mypage.png" width="40" height="40" alt="マイページ">
                <br><span>マイページ</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('') }}"><img src="good.png" width="40" height="40" alt="お気に入り">
                <br><span>お気に入り</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('') }}"><img src="rireki.png" width="40" height="40" alt="購入履歴">
                <br><span>購入履歴</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('') }}"><img src="alarm.png" width="40" height="40" alt="通知">
                <br><span>通知</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('') }}"><img src="cart.png" width="40" height="40" alt="カート">
                <br><span>カート</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
        <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
      </ol>
    </nav>
  </header>
  <main>
    <h1 style="text-align:center;" class="headline clearfix">(それぞれのページに合ったタイトルを入れる)</h1>
  </main>
  <footer>
    <h5>Tsunagu</h5>
    <p class="copyright">© 2020 TsunaguProductionTeam, All rights reserved.</p>
  </footer>
</div>
<script src="https : //code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $(function() {
$('.multiple-item').slick({
    infinite: true,
    dots:true,
    slidesToShow: 6,
    slidesToScroll: 6,
    centerMode: true, //要素を中央寄せ
    centerPadding:'100px', //両サイドの見えている部分のサイズ
    autoplay: true,
    responsive: [{
         breakpoint: 768,
              settings: {
                   slidesToShow: 4,
                   slidesToScroll: 4,
         }
    },{
         breakpoint: 480,
              settings: {
                   slidesToShow: 2,
                   slidesToScroll: 2,
              }
         }
    ]
});
});
</script>
</body>

</html>