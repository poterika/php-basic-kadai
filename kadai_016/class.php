<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food{
        // プロパティを定義する
      private $name;
      private $price;
       //コンストラクタを定義
       public function __construct(string $name, int $price){
         $this->name=$name;
         $this->price=$price;
       }
       // メソッドを定義する
      public function set_price(int $price){
        $this->price=$price;
       }
      public function show_price(){
        echo $this->price.'<br>';
       }
      }
      //インスタンス化
      $food=new Food('potato',250);
      
      print_r($food);
      echo '<br>';
      ?>
   </p>   
   <p>
      <?php   
       // クラスを定義する
       class Animal{
        // プロパティを定義する
      private $name;
      private $height;
      private $weight;
      //コンストラクタを定義
      public function __construct(string $name, int $height, int $weight){
         $this->name=$name;
         $this->height=$height;
         $this->weight=$weight;
      }
        // メソッドを定義する
      public function set_height(int $height){
          $this->height=$height;
        }
      public function show_height(){
          echo $this->height.'<br>';
        }
       }
       //インスタンス化
       $animal=new Animal('dog',60,5000);

       print_r($animal);
       echo '<br>';


       $food->show_price();
       $animal->show_height();
       ?>
    </p>
</body>

</html>