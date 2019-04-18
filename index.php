<?PHP

// 関数 (このコードではfunction)

$lang = "ruby";

//その関数内で定義した変数はその関数内でのみ有効
function sayHi($name) {
  $lang = "php";
  echo "hi! $name from $lang";
}

sayHi("Tom");
var_dump($lang); // ruby
