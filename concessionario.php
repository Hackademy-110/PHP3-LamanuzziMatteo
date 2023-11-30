<?php
class Automobile{
    public $model;
    public $price;
    public $nrdoors;
    public $tag;
    public static $nrCarsIn=0;
    public function __construct($model,$price,$nrdoors,$tag){
        $this->model=$model;
        $this->price=$price;
        $this->nrdoors=$nrdoors;
        $this->tag=$tag;
        Automobile::$nrCarsIn++;
    }
    public function showCount(){
        echo Automobile::$nrCarsIn."\n";
    }
}
class SUV extends Automobile{
    public $integral;
    public $terrains;
    public function __construct($model,$price,$nrdoors,$tag,$integral,$terrains){
        parent::__construct($model,$price,$nrdoors,$tag);
        $this->integral=$integral;
        $this->terrains=$terrains;
    }
}
class Utilitaria extends Automobile{
    public $engine;
    public $autopark;
    public function __construct($model,$price,$nrdoors,$tag,$engine,$autopark){
        parent::__construct($model,$price,$nrdoors,$tag);
        $this->engine=$engine;
        $this->autopark=$autopark;
    }
}
$macchinina=new Utilitaria('Panda','13000','5','Fiat','Elettrico','Autopark');
$macchinetta=new Utilitaria('Panda','13000','5','Fiat','Elettrico','Autopark');
$macchinozza=new Utilitaria('Panda','13000','5','Fiat','Elettrico','Autopark');
$macchina=new Utilitaria('Panda','13000','5','Fiat','Elettrico','Autopark');
$macchina->showCount();