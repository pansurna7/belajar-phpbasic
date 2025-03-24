<!-- CLONE METHOD -->
 <!--  -->
<?php
    class Product 
    {
        public  $color; //ini adalah property class

        public function __construct() //ini adalah method construct
        {
            echo "New product was created. <br>";
        }

        public function __clone() //ini adalah method clone
        {
            echo "New Product was clone. <br>";
        }
    }

    $baju1= new Product; //ini adalah instance
    $baju1->color="Blue";

    $baju2 = clone $baju1;
    
    echo $baju1->color . '<br>';
    echo $baju2->color . '<br>';

    echo "<hr>";

    $baju2->color ="red";
    echo $baju1->color . '<br>';
    echo $baju2->color . '<br>';
?>