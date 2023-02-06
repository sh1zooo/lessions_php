<?php
//  Number 1


function CountSymbols ($str){
    $arr = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
    return count($arr);
}
echo CountSymbols("поешь булок")."<br>"; // 11, вместе с пробелом
echo CountSymbols("12345")."<br>"; // 5
echo CountSymbols("nigga228")."<br>"; // 8
echo CountSymbols("hello world")."<br>"; // 11, вместе с пробелом

