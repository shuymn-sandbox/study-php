<?php

// cookie : アクセスしてきたユーザのブラウザにデータをセットすることができる

// setcookie("username", "shuymn"); // 初回のアクセスでクーキーがセットされる
// setcookie("username", "shuymn", time()+60+60); // 第三引数で保持時間を設定できる，この場合は1時間(デフォはブラウザを閉じるまで)
// setcookie("username", "shuymn", time()-60+60); // 有効期限を過去にすると削除される

echo $_COOKIE['username']; // shuymn と表示されれはOK
