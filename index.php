<?PHP

// 配列
// foreach : 配列の内容をループ処理で取り出す

// $sales = [
//   "taguchi" => 200,
//   "fkoji" => 800,
//   "dotinstall" => 600,
// ];
//
// foreach ($sales as $key => $value) {
//   echo " ($key) $value " ;
// }

$colors = ["red", "blue", "pink"];

// foreach ($colors as $key => $value) {
//   echo "$value";
// }

// foreach if while for で使える コロン構文

foreach ($colors as $value) :
  echo "$value ";
endforeach;

?>
<!-- 上記の結果をHTMLのli要素で列挙したいとき -->
<ul>
  <?php foreach ($colors as $value) : ?>
  <li><?php echo "$value "; ?></li>
<?php endforeach; ?>
</ul>
