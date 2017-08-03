<?php

// session : server側にデータを保持
// 改ざん防止，大きなデータを保持可能，中身が見られない
// cookieとの使い分けが重要

session_start(); // 必ず必要

// $_SESSION['username'] = "shuymn"; // 初回のアクセスでデータをセット
// unset($_SESSION['username']); // アクセスでデータを削除

echo $_SESSION['username'];

