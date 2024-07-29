 <!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP16章課題</title>
 </head>
 
 <body>
     <p>
     <?php
     class Food { 
         // プロパティを定義する
         private $name;
         private $price;

         // コンストラクタを定義する
         public function __construct($name, $price) {
            $this->name = $name;
            $this->price = $price;
         }

         public function show_price() {
            echo $this->price . '<br>';
        }

    }
     // インスタンス化する
     $food = new Food('potato', 250);
 
     // インスタンス$foodの各プロパティの値を出力する
     print_r($food);

     $food->show_price();
     ?>
     </p>

     
     <p>
     <?php
     class Animal { 
         // プロパティを定義する
         private $name;
         private $height;
         private $weight;

         // コンストラクタを定義する
         public function __construct($name, $height,$weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
         }

         public function show_height() {
            echo $this->height . '<br>';
        }
    }
     // インスタンス化する
     $animal = new Animal('dog',60,5000);
 
     // インスタンス$animalの各プロパティの値を出力する
     print_r($animal);

     $animal->show_height();l
     ?>
     </p>

 </body>
</html>
