<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <style>
      /* 自動で付く余白をリセット */
      *{
        /*
        padding: 0;
        margin: auto;
        */
      }

      body {
        background-image: url(img/2974142736-kabekin2511-PNw-1920x1080-MM-100.jpg);
      }

      /* ページ */
      .page1 {
        visibility: visible;
        visibility: hidden;
      }
      .page2 {
        visibility: hidden;
        visibility: visible;
      }
      .page3 {
        visibility: visible;
        visibility: hidden;
      }

      /* ポップアップページ */
      .popup1 {
        visibility: visible;
        visibility: hidden;
      }
      .popup2 {
        visibility: visible;
        visibility: hidden;
      }
      .popup3 {
        visibility: visible;
        visibility: hidden;
      }

      /*
      * グリッドレイアウト css
      */
      #container {
        display: grid;
        grid-template-columns: 1fr 4fr 1fr;
        grid-template-rows: 1fr auto 1fr;
        column-gap: 5px;
        grid-row-gap: 5px;
      }

      /*
      * ヘッダーエリア css
      */
      header {
        grid-column: 1/5;
        grid-row: 1/2;
        background-color: rgb(65, 105, 225, 0.6);
        text-align: center;
        color: white;
      }

      /*
      * 左ナビエリア css
      */
      nav {
        grid-column: 1/2;
        grid-row: 2/3;
        background-color: rgb(65, 105, 225, 0.6);
        text-align: center;
        color: white;
      }

      /*
      * メインエリア css
      */
      main {
        grid-column: 2/3;
        grid-row: 2/3;
        background-color: rgb(65, 105, 225, 0.6);
        text-align: center;
        color: white;
      }

      /*
      * 右サイドエリア css
      */
      aside {
        grid-column: 3/5;
        grid-row: 2/3;
        background-color: rgb(65, 105, 225, 0.6);
        text-align: center;
        color: white;
      }

      /*
      * フッター エリアcss
      */
      footer {
        grid-column: 1/5;
        grid-row: 3/4;
        background-color: rgb(65, 105, 225, 0.6);
        color: white;
      }

      .box29 {
        margin: 2em 1em;
        background: #dcefff;
      }
      .box29 .box-title {
        font-size: 1.2em;
        background: #5fb3f5;
        padding: 4px;
        text-align: center;
        color: #FFF;
        font-weight: bold;
        letter-spacing: 0.05em;
      }
      .box29 p {
        padding: 15px 20px;
        margin: 0;
      }

      main button {
        border-radius: 5px;
        background-color: rgba(0, 128, 0, 0.7);
        padding: 10px;
        margin: 10px;
        text-align: center;
        color: white;
        cursor: pointer;
        border-style: none;
        outline: none;
        width: 15%;
      }

      #item-btn1 {
        background-color: rgba(0, 128, 0, 0.7);
      }
      #item-btn2 {
        background-color: rgba(0, 128, 0, 0.7);
      }
      #item-btn3 {
        background-color: rgba(0, 128, 0, 0.7);
      }
      #item-btn4 {
        background-color: rgba(0, 128, 0, 0.7);
      }
      #item-btn-main-off {
        background-color: rgba(0, 128, 0, 0.7);
      }

      #item-btn6 {
        background-color: rgba(0, 128, 0, 0.7);
      }
      #item-btn7 {
        background-color: rgba(0, 128, 0, 0.7);
      }
      #item-btn8 {
        background-color: rgba(0, 128, 0, 0.7);
      }
      #item-btn9 {
        background-color: rgba(0, 128, 0, 0.7);
      }
      #item-btn-monitor-off {
        background-color: rgba(0, 128, 0, 0.7);
      }

    </style>

  </head>
  <body>
    <!-- ページ１ -->
    <dev class="page1">
      <button type="button" id="start-btn">
        システムスタート
      </button>

    </dev>

    <!-- ページ２ -->
    <dev class="page2" id="container">
      <!-- ヘッダー -->
      <header>
        <p>ヘッダー</p>
      </header>

      <!-- ナビゲーション -->
      <nav>
        <p>ナビゲーション</p>
      </nav>

      <!-- メイン -->
      <main>
        <div class="box29">
          <div class="box-title">ここにタイトル</div>
          <button type="button" id="item-btn1">
            webソケット<br>送信
          </button>

          <button type="button" id="item-btn2">
            ボタン<br>２
          </button>

          <button type="button" id="item-btn3">
            ボタン<br>３
          </button>

          <button type="button" id="item-btn4">
            ボタン<br>４
          </button>

          <button type="button" id="item-btn-main-off">
            ボタン<br>ＯＦＦ
          </button>
        </div>
        <div class="box29">
          <div class="box-title">ここにタイトル</div>
          <button type="button" id="item-btn5">
            ボタン<br>５
          </button>

          <button type="button" id="item-btn6">
            ボタン<br>６
          </button>

          <button type="button" id="item-btn7">
            ボタン<br>７
          </button>

          <button type="button" id="item-btn7">
            ボタン<br>９
          </button>

          <button type="button" id="item-btn-main-off">
            ボタン<br>ＯＦＦ
          </button>
        </div>
        <div class="box29">
          <div class="box-title">ここにタイトル</div>
          <button type="button" id="item-btn5">
            ボタン<br>６
          </button>
          <button type="button" id="item-btn5">
            ボタン<br>７
          </button>
          <button type="button" id="item-btn5">
            ボタン<br>８
          </button>
          <button type="button" id="item-btn5">
            ボタン<br>９
          </button>
          <button type="button" id="item-btn5">
            ボタン<br>１０
          </button>
        </div>

      </main>

      <!-- サイド -->
      <aside>
        <p>サイド</p>
      </aside>

      <!-- フッター -->
      <footer>
        <p>フッター</p>
      </footer>
    </dev>

    <!-- ページ３ -->
    <dev class="page3">


    </dev>



    <!-- Javascript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
      // jabascript

    </script>
  </body>
</html>
