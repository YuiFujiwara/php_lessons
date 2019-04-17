<?PHP

// if 条件分岐
/* 比較演算子 > < >= <= ==(←値の比較) ===(←値と型の比較)
               !=(値,等しくない) !==(値と型,等しくない) */
// 論理演算子 and か && , or か || , !←（否定,not）

$score = 40;

if ($score > 80) {
  echo "great!";
} elseif ($score > 60) {
  echo "good!";
}else {
  echo "so so ...";
}
