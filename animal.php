<?php

 abstract class animal{
    protected $nome;
    protected $cor;
    protected $idade;

    public function __construct($nome,$cor,$idade) {
        $this->nome=$nome;
        $this->cor=$cor;
        $this->idade=$idade;
    }

    abstract function som();
}

class cachorro extends animal{
    public $raca;

    public function __construct($raca,$nome,$cor,$idade) {
        $this->raca = $raca;
        parent::__construct($nome,$cor,$idade);
    }

    public function som(){
        echo("$this->nome latiu");
    }

    public function roubar(){
        echo("<p>$this->nome roubou comida </p>");
    }
}


class gato extends animal{
    public $raca;

    public function __construct($raca,$nome,$cor,$idade) {
        $this->raca = $raca;
        parent::__construct($nome,$cor,$idade);
    }

    public function som(){
        echo("$this->nome miou");
    }

    public function arranhar(){
        echo("<p>$this->nome arranhou o sofá </p>");
    }
}

class cavalo extends animal{
    public $altura;

    public function __construct($h,$nome,$cor,$idade) {
        $this->altura = $h;
        parent::__construct($nome,$cor,$idade);
    }

    public function som(){
        echo("$this->nome relinchou");
    }

    public function galopar(){
        echo("<p>$this->nome galopou </p>");
    }
}


$rex = new cachorro('lulu','rex','preto',3);
$rex->som();
$rex->roubar();

$megan = new gato('persa','Megan','marrom',7);
$megan->som();
$megan->arranhar();

$pg = new cavalo(1.86,'Pingo','branco',4);
$pg->som();
$pg->galopar();