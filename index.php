<?PHP

// 関数

$x  = 5.6;
// echo ceil($x); //6 小数点以下を繰り上げる
// echo floor($x); //5 小数点以下を切り捨てる
// echo round($x); //6 四捨五入
// echo rand(1, 10); //1〜10の数字をランダムに引っ張る

$s1 = "hello";
$s2 = "ねこ";
// echo strlen($s1); //5 $1の文字数を数える
// echo mb_strlen($s2); //2 $2の文字数を取得
// printf("%s - %s -%.3f", $s1, $s2, $x); // %.3fは小数点3位まで表示させる

$colors = ["red", "blue", "pink"];
echo count($colors);
echo implode("@", $colors); // implode:配列の要素をある区切り文字を挟んで連結（この場合は@）
