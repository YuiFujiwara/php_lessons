<?PHP

// switch 条件分岐

$signal = "green";

switch ($signal) {
  case "red" :
    echo "stop!";
    break;
  case "blue" :
  case "green": //条件増やしたいときは、caseをそのまま追加すれば良い
    echo "go!";
    break;
  case "yello" :
    echo "caution!";
    break;
  default:
    echo "wrong signal";
    break;
}
