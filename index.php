<?PHP

// クラスの継承

//親クラス
class User {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  final public function sayHi() {
    echo "hi, i am $this->name!";
  }
}

//子クラス
class AdminUser extends User {
  public function sayHello() {
  echo "hello from Admin!";
  }
 // override （子クラスで親クラスを上書き、親クラスの上書きしたくない部分にfinalで上書き禁止にできる。final消せばまた上書き可能になる。）
 public function sayHi() {
   echo "[admin] hi, i am $this->name!";
 }
}

$tom = new User("Tom");
$steve = new AdminUser("Steve");
// echo $steve->name;
$tom->sayHi();
$steve->sayHi();
// $steve->sayHello();
