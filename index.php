<?php
class Person{
    public $nome;
    public $cognome;
    public static $counter=0;
    public function __construct($name,$surname){
        $this->nome=$name;
        $this->cognome=$surname;
        Person::$counter++;
    }
    public function showCounter(){
        echo Person::$counter."\n";
    }
}
$Paolo= new Person('Paolo','Rossi');
class Student extends Person{
    public $anno;
    public $sezione;
    public function __construct($name,$surname,$year,$section){
        parent::__construct($name,$surname);
        $this->anno=$year;
        $this->sezione=$section;
    }
}
$Luigi= new Student('Luigi','Paoletti','Terzo','G');

class Teacher extends Person{
    public $materia;
    public $tipoContratto;
    public function __construct($name,$surname,$topic,$contract){
        parent::__construct($name,$surname);
        $this->materia=$topic;
        $this->tipoContratto=$contract;
    }
}
$minigheddu= new Teacher('Franca','Minigheddu','Storia','Indeterminata');
$minigheddu->showCounter();