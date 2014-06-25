<?php


class ContainerController extends BaseController {

    protected $greeter;

    public function __construct(GreetableInterface $greeter)
    {
        $this->greeter = $greeter;
    }

    public function container()
    {
        return $this->greeter->greet();
    }
}