<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
    <?php
    class Food{
      private $name;
      private $price;
      public function __construct(string $name, int $price) {
        $this->name=$name;
        $this->price=$price;
    }
  }
    $food=new Food('potato',250);
    print_r($food);

    class Animal{
      private $name;
      private $height;
      private $weight;
      public function __construct(string $name, int $height,string $weight) {
        $this->name=$name;
        $this->height=$height;
        $this->weight=$weight;
    }
  }
    $animal=new Animal('dog',60,5000);
    print_r($animal);

    $food->show_price='250';
    echo $food->show_price.'<br>';

    $animal->show_height='60';
    echo $animal->show_height;
    ?>
    </p>
</body>
</html>
