<?php
namespace Enchance\Bleh;

class Bleh
{
    public static function saySomething() {
        //return 'Hello World';
        //return config('bleh.message');
        return trans('bleh::messages.greeting');
    }
}