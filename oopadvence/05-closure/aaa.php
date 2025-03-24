<?php
class manusia{ 
    var $name; 
    function setName($name) 
    { 
        $this->name=$name; 
    } 
} 
class teman extends manusia
{ 
    var $friend; 
    function setFriend($friend)
    { 
        $this->friend=$friend; 
    } 
} 
 $bos = new manusia; 
 $bos->setName("Direktur"); 
 $boa->setFriend("Sekretaris");

?>