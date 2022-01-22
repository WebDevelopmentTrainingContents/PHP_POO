<?php
    class MyClass {
   public static $msg = 'Hello world !';
   public static function sayHello() {
        echo self::$msg;
   }
}
MyClass::sayHello(); // Appelle sayHello et affiche Hello world !
