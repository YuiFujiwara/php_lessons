<?PHP

// 真偽値
/*
# falseになる場合に使える
文字列 : 空、"0"
数値 : 0、0.0
論理値 : false
配列 : 要素の数が0
null
*/

$x = 5;
if ($x) {
  // if ($x == true) {
  echo "great!";
}

// 三項演算子

$max = ($a > $b) ? $a : $b; // $a > $bが真なら$aを偽なら$bをmaxに代入しなさい

if ($a > $b) {
  $max = $a;
} else {
  $max = $b;
}
