<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>kadai_016</title>
</head>

<body>
   <P>
      <?php
      //クラスの定義
      class Food
      {
         //プロパティの定義
         private $name;
         private $price;
         //メゾットの定義
         public function show_price()
         {
            echo $this->price . '<br>';
         }
         //コンストラクタの定義
         public function __construct(string $name, int $price)
         {
            $this->name = $name;
            $this->price = $price;
         }
      }

      //インスタンス化
      $food = new Food('potato', 250);

      //値を出力する
      print_r($food);

      //クラスの定義
      class Animal
      {
         //プロパティの定義
         private $name;
         private $height;
         private $weight;
         //メゾットの定義
         public function show_height()
         {
            echo $this->height;
         }
         //コンストラクタの定義
         public function __construct(string $name, int $height, int $weight)
         {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
         }
      }
      //インスタンス化
      $animal = new Animal('dog', 60, 5000);

      //値を出力する
      echo '<br>';
      print_r($animal);
      echo '<br>';

      //price250とheight60を出力
      $food->show_price();

      $animal->show_height();

      ?>
   </P>
</body>

</html>