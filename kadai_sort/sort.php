<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>kadai_sort</title>
</head>

<body>
   <p>
      <?php
      //ソート配列を宣言
      $nums = [15, 4, 18, 23, 10];
      //$array：ソート対象の配列 $order：ソート方向（TRUE：昇順／FALSE：降順）  
      function sort_2way($array, $order)
      {
         if ($order) {
            echo '昇順にソートします。<br>';
            sort($array);
         } else {
            echo '降順にソートします。<br>';
            rsort($array);
         }
         foreach ($array as $number) {
            echo $number . '<br>';
         }
      }
      sort_2way($nums, TRUE);
      sort_2way($nums, FALSE);
      ?>
   </p>
</body>

</html>