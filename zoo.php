<?php
class Animal{
    public $name;
    public $species;
    public $diet;
    public function __construct($name,$species,$diet){
        $this->name=$name;
        $this->species=$species;
        $this->diet=$diet;
    }
}
class Bear extends Animal{
    public $habitat;
    public $lethargy;
    public function __construct($name,$species,$diet,$habitat,$lethargy){
        parent::__construct($name,$species,$diet);
        $this->habitat=$habitat;
        $this->lethargy=$lethargy;
    }
}
$marco= new Bear('Marco','Orso','Onnivoro','foresta','letargo stagionale');
class Wolf extends Animal{
    public $subspecies;
    public $group;
    public function __construct($name,$species,$diet,$subspecies,$group){
        parent::__construct($name,$species,$diet);
        $this->subspecies=$subspecies;
        $this->group=$group;
    }
}
$lucio= new Wolf('Lucio','lupo','carnivoro','Canis lupus italicus','Branco del Fantabosco');