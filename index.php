<?PHP

// ループ処理（繰り返し）
// for
// break : ループを抜ける
// continue : それ以降の処理（には影響さ）せずにループに移る

// $i = 0;
// while ($i < 10) {
//   echo $i;
//   $i++;
// }

for ($i = 0; $i < 10; $i++) {
  if ($i === 5) {
    // break;
    continue;
  }
  echo $i;
}
