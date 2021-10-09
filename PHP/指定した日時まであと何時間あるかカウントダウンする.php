指定した日や時刻まで後どのくらい期間があるかを計算したい場合、DateTimeクラスのdiff()関数を使うと簡単に得る事ができる。
DateTimeクラスは日時計算や整形出力に関するクラスです。

<?php
date_default_timezone_set("Asia/Tokyo");

$datetime = new DateTime('2030/01/01 00:00:00');
$current = new DateTime('now');
$diff = $current->diff($datetime);

printf(
    '残り %d年%dヶ月%d日 %d時間%d分%d秒（%d日）',
    $diff->y,
    $diff->m,
    $diff->d,
    $diff->h,
    $diff->i,
    $diff->s,
    $diff->days
);

?>