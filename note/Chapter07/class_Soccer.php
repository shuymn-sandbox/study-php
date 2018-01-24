<pre>
    <?php
    require_once("Soccer.php");

    $player1 = new Soccer('Shinji');
    $player1->who(); // 親クラスのメソッド
    $player1->play(); // 子クラスのメソッド

    $player2 = new Soccer('Tsubasa');
    echo "{$player2}"; // インスタンスをStringにキャスト
    ?>
</pre>
