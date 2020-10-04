let ws = new WebSocket('ws://localhost:9999/');

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

// ボタン１ イベントリスナー
let btn = document.getElementById("item-btn1");
// mouse down
btn.addEventListener('mousedown', () => {
  btn.style.backgroundColor='pink';
  ws.send('mouse down')

}, false);

// mouse up
btn.addEventListener('mouseup', () => {
  btn.style.backgroundColor='green';
  ws.send('mouse up')

}, false);
