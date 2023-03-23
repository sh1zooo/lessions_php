<?php

class person{
    public $fname;
    public $lname;
    public $mname;
    public $nname;

    public function __construct($fname, $lname, $mname, $nname){
        $this->fname = $fname;
        $this->lname = $lname;
        $this->mname = $mname;
        $this->nname = $nname;

    }

    // сеттер firstName, для остальных переменных аналогично
    public function setFname(){
        $this->fname = $fname;
    }
    // геттер firstName, для остальных переменных аналогично
    public function getFname(){
        return $this->fname;
    }
    // полное имя: 
    public function getAll(){
        echo "my name is $this->fname $this->lname $this->mname and in life i $this->nname";
    }
}
$person = new person('zubenko', 'mixuylo', 'petrovich', 'mafiozznik');
$person->getAll();
