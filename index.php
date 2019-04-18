<?PHP

// interface : このクラスはこのメソッドを必ず実装してくださいよ、というルールを定義するための仕組み。抽象クラスと違って複数実装できる。

interface sayHi {
  public function sayHi();
}

interface sayHello {
  public function sayHello();
}

class User implements sayHi, sayHello {
 public function sayHi() {
   echo "hi!";
 }
 public function sayHello() {
   echo "hello!";
 }
}
