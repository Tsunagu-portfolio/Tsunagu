<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


      <style>

        @charset "UTF-8";

        html {
          font-size: 62.5%;
        }

        body {
          color: #333;
          font-size: 1.2rem;
          font-family: "Hiragino kaku Gothic ProN", Meiryo, sans-serif;
        }

        *, *::before, *::after {
          box-sizing: border-box;
        }

        a:link, a:visited, a:hover, a:active {
          color: #d03c56;
          text-decoration: none;
        }

        .hidden {
          display: none;
        }

        .header {
          width: 100%;
        }

        .wrapper {
          width: 1250px;
          margin: 30px auto 40px;
        }

        .main {
          display: block;
          float: right;
          width: 930px;
        }

        .sidemenu {
          float: left;
          width: 280px;
        }

        .footer {
          width: 100%;
        }

        .clearfix::after {
          content: '';
          display: block;
          clear: both;
        }


        .header, .main, .sidemenu, .footer, .top-image {
          border: 1px solid #aaa;
          background-color: #ccc;
        }

        .header, .footer {
          height: 100px;
        }

        .main, .sidemenu {
          height: 1000px;
        }

        h1 {
            position: relative;
            padding: 0 65px;
            text-align: center;
            color: #d03c56;
            width: 70%;
            margin: auto;
            margin-top: 50px;
            margin-bottom: 50px;
        }

            h1:before {
            position: absolute;
            top: calc(50% - 1px);
            left: 0;
            width: 100%;
            height: 2px;
            content: '';
            background: #d03c56;
        }

            h1 span {
            position: relative;
            padding: 0 2em;
            background: #ccc;
        }

        .top-image {
          height: 200px;
          margin: 30px auto 40px;
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
            margin-top: 10px;
        }

        .card-link {
            margin-top: 60px;
        }

        .simple_square_btn8 {
            display: block;
            position: relative;
            width: 250px;
            padding: 0.8em;
            text-align: center;
            text-decoration: none;
            color: #1B1B1B;
            background: #fff;
                border-radius: 30px;
            border:1px solid #d03c56;
            -webkit-backface-visibility: hidden; 
            -moz-backface-visibility: hidden;
            backface-visibility: hidden;
            margin-top: 50px;
            margin: auto;
        }
        .simple_square_btn8:hover {
            cursor: pointer;
            text-decoration: none;
            -webkit-animation: simple_square_btn8 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            -moz-animation: simple_square_btn8 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                    animation: simple_square_btn8 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }
        @-webkit-keyframes simple_square_btn8{
        0% {
            -webkit-transform: translateY(0);
                    transform: translateY(0);
        }
        100% {
            -webkit-transform: translateY(-5px);
                    transform: translateY(-5px);
        }
        }
        @-moz-keyframes simple_square_btn8{
        0% {
            -webkit-transform: translateY(0);
                    transform: translateY(0);
        }
        100% {
            -webkit-transform: translateY(-5px);
                    transform: translateY(-5px);
        }
        }
        @keyframes simple_square_btn8 {
        0% {
            -webkit-transform: translateY(0);
                    transform: translateY(0);
        }
        100% {
            -webkit-transform: translateY(-5px);
                    transform: translateY(-5px);
        }
        }


      </style>

      <title>Document</title>
  </head>
  <body>
      <header class="header">
      </header>

      <div class="wrapper clearfix">
        <section class="top-image">

        </section>
          <main class="main">
          <h1><span>みんなの投稿</span></h1>
              <section class="multiple-item clearfix">
                    <div class="slide-card">
                      <a href="#">
                        <div class="card card-skin">
                          <div class="card__imgframe"></div>
                          <div class="card__textbox">
                            <div class="card__titletext">
                              タイトルがはいります。タイトルがはいります。
                            </div>
                            <div class="card__overviewtext">
                              概要がはいります。概要がはいります。概要がはいります。概要がはいります。　
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="slide-card">
                      <a href="#">
                        <div class="card card-skin">
                          <div class="card__imgframe"></div>
                          <div class="card__textbox">
                            <div class="card__titletext">
                              タイトルがはいります。タイトルがはいります。
                            </div>
                            <div class="card__overviewtext">
                              概要がはいります。概要がはいります。概要がはいります。概要がはいります。
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="slide-card">
                      <a href="#">
                        <div class="card card-skin">
                          <div class="card__imgframe"></div>
                          <div class="card__textbox">
                            <div class="card__titletext">
                              タイトルがはいります。タイトルがはいります。
                            </div>
                            <div class="card__overviewtext">
                              概要がはいります。概要がはいります。概要がはいります。概要がはいります。
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="slide-card">
                      <a href="#">
                        <div class="card card-skin">
                          <div class="card__imgframe"></div>
                          <div class="card__textbox">
                            <div class="card__titletext">
                              タイトルがはいります。タイトルがはいります。
                            </div>
                            <div class="card__overviewtext">
                              概要がはいります。概要がはいります。概要がはいります。概要がはいります。
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="slide-card">
                      <a href="#">
                        <div class="card card-skin">
                          <div class="card__imgframe"></div>
                          <div class="card__textbox">
                            <div class="card__titletext">
                              タイトルがはいります。タイトルがはいります。
                            </div>
                            <div class="card__overviewtext">
                              概要がはいります。概要がはいります。概要がはいります。概要がはいります。
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="slide-card">
                      <a href="#">
                        <div class="card card-skin">
                          <div class="card__imgframe"></div>
                          <div class="card__textbox">
                            <div class="card__titletext">
                              タイトルがはいります。タイトルがはいります。
                            </div>
                            <div class="card__overviewtext">
                              概要がはいります。概要がはいります。概要がはいります。概要がはいります。
                            </div>
                          </div>
                        </div>
                    </div>
              </section>
              <section class="card-link">
                <a href="#" class="simple_square_btn8">もっとみる</a>
              </section>
                    
              <section>

              </section>
              <section class="hot-item">
                <h2 class="hidden">HOT ITEM</h2>

              </section>
              <section class="new-item">
                <h2 class="hidden">NEW ITEM</h2>

              </section>
          </main>
          <div class="sidemenu">
              aaaaaaaaaaaa
          </div>
      </div>
      <footer class="footer">    
      </footer>
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