<?PHP

// 文字列
// "" でできる展開 → 特殊文字(「\n」→改行, 「\t」→タブ) ,変数
// '' でできる展開 → 上記の展開ができない

// $name = "taguchi";
// $s1 = "hello $name!\nhello again!";
// $s1 = "hello {$name}!\nhello again!";
// $s1 = "hello ${name}!\nhello again!";
// $s2 = 'hello $name!\nhello again!';
// var_dump($s1);
// var_dump($s2);

// 連結 「.」使う
$s = "hello" . "world" ;
var_dump($s);
