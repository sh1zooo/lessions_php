<?php

// Number 1
echo "<br><br>Number 1<br><br>";


class car{
    public $color;
    public $year;
    public $model;
    
    public function __construct($color, $year, $model){
        $this->color = $color;
        $this->year = $year;
        $this->model = $model;
    }

    public function paint($colorNew){
        $this->color = $colorNew;
        
        echo "model: $this->model;  new color: $this->color; year: $this->year <br>" ;
        
    }

    public function getAll(){
        echo "model: $this->model; color: $this->color; year: $this->year <br>";
    }
}
$car = new car('white', 1998, 'bmv');
$car->getAll();
$car->paint('black');




// Number 2

echo "<br><br>Number 2<br><br>";

class calc{
    public $a;
    public $b;

    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function add($a, $b){
        return $this->a + $this->b;
    }

    public function substr($a, $b){
        return $this->a - $this->b;
    }

    public function mult($a, $b){
        return $this->a * $this->b;
    }

    public function divi($a, $b){
        return $this->a / $this->b;
    }
}

$operation = new calc(12, 4);
echo $operation->add($a, $b)."<br>"; // 16
echo $operation->substr($a, $b)."<br>"; // 8
echo $operation->mult($a, $b)."<br>"; // 48
echo $operation->divi($a, $b)."<br>"; // 3



// Number 3

// Я решил, что раз про банк на уроке писали, то скучно будет. Придумал жизненную ситуацию с мегафоном

echo "<br><br>Number 3<br><br>";

class MegaFon_Acc{
    public $name;
    public $bal;

    public function __construct($name, $bal){
        $this->name = $name;
        $this->bal = $bal;
    }

    public function delBal($sum_del){
        $del_bal = $this->bal -= $sum_del;
        if ($del_bal < 0){
            echo "Привет, $this->name, баланс: $del_bal. Продавай почку чепушила мы все списали за 2 минуты роуминга. С любовью, Ваш MegaFon. <br>";
        }else{
            echo "Привет, $this->name, сейчас баланс: $del_bal, но через пару минут мы спишем еще 52387.67 рублей за какие-нибудь платные услуги. С любовью, Ваш MegaFon. <br>";
        }

    }

    public function addBal($sum_add){
        $add_bal = $this->bal += $sum_add;
        echo "Привет, $this->name, баланс: $add_bal. Но не переживай, деньги испарятся - не успеешь моргуть. С любовью, Ваш MegaFon. <br>";
    }
    
}
$MegaFonUser = new MegaFon_Acc("Андрей Чикатило", 125.43);
$MegaFonUser->addBal(11.32);
$MegaFonUser->delBal(89.33);
$MegaFonUser->delBal(52387.67);



// Number 4

echo "<br><br>Number 4<br><br>";

class book{
    public $title;
    public $autor;
    public $price;

    public function __construct($title, $autor, $price){
        $this->title = $title;
        $this->autor = $autor;
        $this->price = $price;
    }

    public function setPrice($newPrice){
        $this->price = $newPrice;
        echo "knigga: $this->title, aftor: $this->autor,  new price: $this->price <br>";
    }

    public function getInfo(){
        echo "knigga: $this->title, aftor: $this->autor, price: $this->price <br>";
    }
    
}

$book = new book('povelitel mux', 'Y Golding', 199);
$book->getInfo();
$book->setPrice(489);



// Number 5

echo "<br><br>Number 5<br><br>";

class circ{
    public $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function getArea(){
        echo "s kruga: ".pi()*pow($this->radius, 2)."<br>";
    }

    public function getDlina(){
        echo "dlina kruga: ".pi()*2*$this->radius."<br>";
    }
}
$circ = new circ(4);
$circ->getArea();
$circ->getDlina();
