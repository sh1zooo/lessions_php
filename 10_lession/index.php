<?php
//  Number 1

/*$start = 1;
$finish = 5;




for ($i = $start; $i <= $finish; $i++) {
    $arr = str_repeat("* ", $i);
    

    echo $arr, "<br>";
}
*/

//  Number 2

/*
$months = array(
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Now",
    "Dec"
);
for ($i = 1; $i <= 12; $i++){
    echo $months[$i]."<br>";
}
*/

//  Number 3

/*
$a = 3;
$b = 4;
echo "№1 ".sqrt($a)."<br>"."№2 ".sqrt($b);
*/

//  Number 4

/*
$array = array(
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Now",
    "Dec"
);
$KeyToDel = "Jun";

function delElement($array,$KeyToDel){
    $array = array_map('strtolower', $array);
    $KeyToDel = mb_strtolower($KeyToDel);
    foreach (array_keys($array, $KeyToDel) as $key) {
        unset($array[$key]);
        return $array;
        
    }
    
    


}
foreach (delElement($array, $KeyToDel) as $row){
    echo $row."<br>\r\n";
}
*/

//  Number 5

/*
$array = array(
    "Jan",
    "Feb",
    "Mar",
    "jun",
    "Jun",
    "Aug",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Now",
    "Dec"
);
if(count(array_unique($array))<count($array)){
    echo "true";
}
else{
    echo "false";
}
*/

//  Number 6

/*
function Chet($x){
    $array = str_split($x);
    $y = count($array);
    for ($i = 0; $i < $y; $i++){
        if(((int)$array[$i]) % 2 == 0){
            echo "chetnoe <br>.";
        }else{
            echo "nechetnoe <br>";
        }
    }
}
Chet(1357);
*/

//  Number 7

function Chet($array){
    $y = count($array);
    for ($i = 0; $i < $y; $i++){
        if (is_numeric($array[$i]) == true){
            if(((int)$array[$i]) % 2 == 0){
                echo "chetnoe <br>.";
            }else{
                echo "nechetnoe <br>";
            }
        }else{
            echo "not number <br>"
        }
        
    }
}


