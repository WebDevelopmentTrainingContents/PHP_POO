<?php

function autoloadClasses() {
    function Autoloader($class) { 
        include 'Classes/' . $class . '.class.php';
    };
    spl_autoload_register('Autoloader'); 
};

