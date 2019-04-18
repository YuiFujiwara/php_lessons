<?PHP

// User

class User {
  // property （変数）
  public $name;

  // constructor （定数）
  public function __construct($name) {
    $this->name = $name;
  }

  // method （定数）
  public function sayHi() {
    echo "hi, i am $this->name!";
  }
}

$tom = new User("Tom");
$bob = new User("Bob");

echo $tom->name; //Tom
$bob->sayHi(); // hi, i am Bob!
