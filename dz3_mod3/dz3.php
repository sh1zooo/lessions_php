<?php
// Number 1
echo "<br> Number 1 <br>";
echo "<br>";
class Calc{
    public static function PluZ($a, $b){
        return $a + $b;
    }

    public static function MinuS($a, $b){
        return $a - $b;
    }

    public static function UmnoJ($a, $b){
        return $a * $b;
    }

    public static function DeleN($a, $b){
        if ($b == 0){
            return "na nol delit nelzya ";
        }else{
            return $a / $b;
        }
    }

    public static function StepeN($a, $b){
        return $a ** $b;
    }

    public static function KoreN($a){
        return sqrt($a);
    }

}

echo Calc::PluZ(2,5)."<br>"; // 7
echo Calc::MinuS(2,5)."<br>"; // -3
echo Calc::UmnoJ(2,5)."<br>"; // 10
echo Calc::DeleN(2,5)."<br>"; // 0.4
echo Calc::DeleN(2,0)."<br>"; // na nol delit nelzya 
echo Calc::StepeN(2,5)."<br>"; // 32
echo Calc::KoreN(25)."<br>"; // 5


// Number 2
echo "<br> Number 2 <br>";
echo "<br>";

class bankAcc{
    public static float $ProcRate = 0;
    

    public function setRate($ProcRate){
        self::$ProcRate = $ProcRate;
    }

    public function getRate(){
        echo "Ставка по счету: ".self::$ProcRate."%";
    }
}

$acc = new bankAcc();
$acc->setRate(15);
$acc->getRate();//15


// Number 3
echo "<br><br> Number 3 <br>";
echo "<br>";

class Book{
    public static int $count = 0;
    public string $title;
    public string $avtor;

    public static function getCount(){
        echo "Всего книг: ".self::$count;
    }

    public function __construct($title, $avtor){
        $this->title = $title;
        $this->avtor = $avtor;
        self::$count++;
    }

    public function getInfo(){
        echo "Книга: ".$this->title.", Автор: ".$this->avtor."<br>";
    }
}

$book1 = new Book("book1", "avtor1");
$book2 = new Book("book2", "avtor2");
$book3 = new Book("book3", "avtor3");
$book4 = new Book("book4", "avtor4");

$book1->getInfo();
$book2->getInfo();
$book3->getInfo();
$book4->getInfo();

echo "<br>";

Book::getCount();
