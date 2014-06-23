<?php

/**
* implement FactoryMethod
**/
interface Car {

    public function getName();
}

class CarModelLexus implements Car {

    public function getName()
    {
        return 'Lexus';
    }
}

class CarModelAudi implements Car {

    public function getName()
    {
        return 'Audi';
    }
}

interface Creator {

    public function factoryMethod();
}

class AudiCreator implements Creator {

    public function factoryMethod()
    {
        return new CarModelAudi();
    }
}

class LexusCreator implements Creator {

    public function factoryMethod()
    {
        return new CarModelLexus();
    }
}

$creators = array(new AudiCreator(), new LexusCreator());

//iterate over creators and create cars
for($i=0; $i < count($creators); $i++) {

    $products[] = $creators[$i]->factoryMethod();
}

echo var_export($products);