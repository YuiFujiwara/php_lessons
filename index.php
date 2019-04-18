<?PHP

// session
// cookieのようにブラウザ側ではなく、サーバ側にデータを保存できる仕組み
//sessionは大きいデータ保存できる、改ざんされない、中身が見られない
//cookieは気軽に使える。しかし、sessionのメリットとは逆のことがデメリットとして挙げられる

session_start();

// $_SESSION['username'] = "taguchi";

// echo $_SESSION['username'];

// unset($_SESSION['username']);

echo $_SESSION['username'];
