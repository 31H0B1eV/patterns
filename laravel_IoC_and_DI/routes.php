<?php


interface GreetableInterface {
    public function greet();
}

class HelloWorld implements GreetableInterface {

    public function greet()
    {
        return 'Hello, world!';
    }
}

App::bind('GreetableInterface', 'HelloWorld');  //can use closure if need add own dependecies

Route::get('/', 'ContainerController@container');

// Route::get('/', function()
// {
// 	$app = App::getFacadeRoot();

//     $app->bind('GreetableInterface', function()
//     {
//         return new HelloWorld;        
//     });

//     $greeter = $app->make('GreetableInterface');

//     return $greeter->greet();
// });
