<?php
// 課題１
$name = "Yuki";

if ($name == "Yuki") {
    echo "わたしは" . $name . "です";
    echo "\n";
} else {
    echo "あなたの名前ではありません";
    echo "\n";
}


// 課題２
$total = 0;

for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}

echo $total;
echo "\n";


// 課題３
$fruits = array("りんご", "みかん", "スイカ", "いちご", "パイン");

foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}


// 課題４
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
?>