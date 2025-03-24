<!-- VISIBILITAS -->
<!-- * Public - Bisa digunakan dimana saja -->
<!-- * Protected - Hanya bisa digunakan didalam class dan Subclass -->
<!-- * Private - Hanya bisa digunakan didalam Class-nya itu sendiri -->

<?php
class User 
{
    // var secara default visibilty nya adalah default
    // var $firstName; //ini adalah property class
    // var $lastName; //ini adalah property class
    // var $userName; //ini adalah property class
    public $firstName; //ini adalah property class
    public $lastName; //ini adalah property class
    public $userName; //ini adalah property class
    
    protected $regID= '1001'; //ini adalah property class
    private $levvel= 'User'; //ini adalah property class


    protected function sayProtected() //ini adalah method
    {
        return "Hello, Protected";
    }

    private function sayPrivate() //ini adalah method
    {
        return "Hello, Private";
    }
    public function sayMe() //ini adalah method
    {
        return $this->sayPrivate();
    }

    public function fullName() //ini adalah method
    {
        return $this->firstName . ' ' . $this->lastName;
    }

}

//ini adalah child/sub class dari class user karena menggunakan extends, maka class Costomer akan mewarisi proprty/method dari class User
class Customer extends User
{
    public function sayParent() //ini adalah method
    {
        // return $this->sayPrivate();
    }
} 
$u = new User;  // ini adalah instance object
$u->firstName = "User";
$u->lastName = "Class";
// memangil method dan tampilkan nilainya
// echo $u->regID . "<br>";
// echo $u->level . "<br>";
echo $u->fullName() . "<br>";
// echo $u->sayProtected() . "<br>";
echo $u->sayMe() . "<br>";

$c = new Customer;  // ini adalah instance object
$c->firstName = "Surya";
$c->lastName = "panggabean";

// memangil method dan tampilkan nilainya
echo $c->fullName().'<br>';
echo $c->sayParent().'<br>';

// cek apakah class Customer ini merupakan sub/child dari User class
if (is_subclass_of($c,'User')) {
    echo "Class Customer merupakan subclass dari class User <br>";
}

// untuk cek class Cutomer ini Menggunakan Class parent mana?

// $parents = class_parents($c); //krn outpunya berupa array maka kita simpan di variabel
// echo ( implode(',', $parents) .'<br>');
// print_r($parents);


?>