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
    }
     // インスタンス化する
     $food = new Food('potato', 250);
 
     // インスタンス$foodの各プロパティの値を出力する
     print_r($food);
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
    }
     // インスタンス化する
     $animal = new Animal('dog',60,5000);
 
     // インスタンス$animalの各プロパティの値を出力する
     print_r($animal);
     ?>
     </p>


     <p>
     <?php
     class Food2 { 
     // プロパティを定義する
     private $name;
     public $price;

      // メソッドを定義する
     public function set_price(string $price) {
        $this->price = $price;
     }
     public function show_price() {
        echo $this->price . '<br>';
    }
     
     }

     // インスタンス化する
     $potato = new Food2();

     // メソッドにアクセスして実行する
      $potato->set_price('250');
      $potato->show_price();
    ?>
    </p>


     <p>
     <?php
     class Animal2 { 
     // プロパティを定義する
     private $name;
     public $height;
     private $weight;

      // メソッドを定義する
     public function set_height(string $height) {
        $this->height = $height;
     }
     public function show_height() {
        echo $this->height . '<br>';
    }
     
     }

     // インスタンス化する
     $dog = new Animal2();

     // メソッドにアクセスして実行する
      $dog->set_height('60');
      $dog->show_height();
  
     ?>
     </p>

      