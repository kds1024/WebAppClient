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
{
  let btn = document.getElementById("item-btn1");
  // mouse down
  btn.addEventListener('mousedown', () => {
    btn.style.backgroundColor='blue';
    ws.send('mouse down')
  }, false);

  // mouse up
  btn.addEventListener('mouseup', () => {
    btn.style.backgroundColor='green';
    btn.style.opacity='0.7';
    ws.send('mouse up')

  }, false);
}

// 映像選択ボタン イベントリスナー
{
  let btn = document.getElementById("item-video-select-btn");
  // mouse click
  btn.addEventListener('click', () => {
    let micDetailPopup = document.getElementById("mic-details-popup");
    let environmentsPopup = document.getElementById("environments-popup");
    micDetailPopup.style.display = 'none';
    environmentsPopup.style.display = 'none';
  }, false);
}

// 音量詳細ボタン イベントリスナー
{
  let btn = document.getElementById("item-audio-details-btn");
  // mouse click
  btn.addEventListener('click', () => {
    let micDetailPopup = document.getElementById("mic-details-popup");
    let environmentsPopup = document.getElementById("environments-popup");
    micDetailPopup.style.display = 'block';
    environmentsPopup.style.display = 'none';
  }, false);
}

// 環境操作ボタン イベントリスナー
{
  let btn = document.getElementById("item-envronments-btn");
  // mouse click
  btn.addEventListener('click', () => {
    let micDetailPopup = document.getElementById("mic-details-popup");
    let environmentsPopup = document.getElementById("environments-popup");
    micDetailPopup.style.display = 'none';
    environmentsPopup.style.display = 'block';
  })
}








