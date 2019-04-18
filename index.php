<?PHP

// require : エラー出たとき、fatal error (が発生してその場で処理終了)
// require_once (onceがつくとphpが自動的にそのファイルが読み込まれてるかを自動的にチェックして読み込まれてたらそれをスキップしてくれる)

// require "User.class.php";

// include : warning (を発生させて処理を続行)
// include_once

// autoload : クラスにしか使えない(クラスが未定義だった場合に自動的に実行される)

spl_autoload_register(function($class) {
	require $class . ".class.php";
});

$bob = new User("Bob");
$bob->sayHi();
