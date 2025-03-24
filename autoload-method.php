<?php
// require "classes/first.php";
// require "classes/second.php";
spl_autoload_register(function ($class) {
    $iterator = new DirectoryIterator(dirname(__FILE__));
    $files = $iterator->getPath()."/classes/".$class.".php";
    
    if (file_exists($files)) {
        include($files);
    } else {
       die("Warning:The file {$files}.class.php could not be found!");
    
    }
});
$student= new Student();
echo $student->name .'<br>';

$cat = new Cat();
echo $cat->sayHello();


