<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
    <?php
    //クラスを定義する
    class Food{
      //プロパティを定義する
      private $name;
      private $price;
      //メソッドを定義する
      public function show_price(string $price){
        $this->price=$price;
      }
      //コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name=$name;
        $this->price=$price;
    }
  }
    $food=new Food('potato',250);
    print_r($food);
    echo'<br>';

    class Animal{
      private $name;
      private $height;
      private $weight;
      public function show_height(string $height){
        $this->height=$height;
      }
      public function __construct(string $name, int $height,string $weight) {
        $this->name=$name;
        $this->height=$height;
        $this->weight=$weight;
    }
  }
    $animal=new Animal('dog',60,5000);
    print_r($animal);
    
    echo'<br>';
    $food->show_price='250';
    echo $food->show_price.'<br>';

    $animal->show_height='60';
    echo $animal->show_height;
    ?>
    </p>
</body>
</html>
