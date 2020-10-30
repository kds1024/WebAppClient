let ws = new WebSocket('ws://localhost:58000/');

//サーバー接続 イベント処理
ws.onopen = function(e) {
  console.log("ws connect");
};

//エラー発生 イベント処理
ws.onerror = function(error) {
  console.log(error);
};

//メッセージ受信 イベント処理
ws.onmessage = function(e) {
  console.log(e.data);
}

//通信切断 イベント処理
ws.onclose = function(e) {
  console.log("ws close");
}


/*
  サーバーサイド
    Webサーバー apache2.4
    操作webページ&javascriptを保持

    wsサーバー
    操作webページに内蔵されているjavascriptからwsサーバープログラムに
    接続。クリックなどのアクションをwsサーバーに送信、wsサーバーは
    そのアクションから操作webページを更新するためのデータを送信。

  クライアントサイド
    webブラウザ
    ブラウザはこのページにアクセスしてデータを読み込み操作画面を表示
*/

// システムスタートボタン イベントリスナー
{
  let btn = document.getElementById("start-btn-state0");
  // mouse down
  btn.addEventListener('mousedown', () => {
    ws.send('mouse down')
  }, false);
}









