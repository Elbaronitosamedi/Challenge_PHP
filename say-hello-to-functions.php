<?php

function sayHello(){
    return "Hello";
}

function sayHelloTo(string $name): string {
    return "Hello $name";
}