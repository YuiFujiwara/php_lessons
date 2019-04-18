<?PHP

// 配列
// key value

$sales = array (
  "tagjchi" => 200,
  "fkoji" => 800,
  "dotinstall" => 600,
);

// PHP5.4 以降 では上記のコードを簡略化可能
$sales = [
  "tagjchi" => 200,
  "fkoji" => 800,
  "dotinstall" => 600,
];

var_dump($sales["fkoji"]); //800
$sales["fkoji"] = 900;
var_dump($sales["fkoji"]); //900

$colors = ["red", "blue", "pink"];
var_dump($colors[1]); // blue
