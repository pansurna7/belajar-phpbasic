
 
  <?php 
class User 
{
    var $firstName; //ini adalah property class
    var $lastName; //ini adalah property class
    var $userName; //ini adalah property class

    function fullName() //ini adalah method
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

//ini adalah child/sub class dari class user karena menggunakan extends, maka class Costomer akan mewarisi proprty/method dari class User
class Customer extends User
{
    var $city; //ini adalah property class
    var $country; //ini adalah property class

    function location() //ini adalah method
    {
      return $this->city . ', ' . $this->country;
    }

    // Poroses override
    function fullName() //ini adalah method
    {
        return $this->firstName . ' ' . $this->lastName . ( 'Customer');
    }
} 
$u = new User;  // ini adalah instance object
$u->firstName = "Surya"; //ini adalah nilai
$u->lastName = "panggabean"; //ini adalah nilai
// $u->city = "Cirebon"; //ini adalah nilai
// $u->country = "Indonesia"; //ini adalah nilai
// memangil method fullName dan tampilkan nilainya
echo $u->fullName().'<br>';
// memangil method location dan tampilkan nilainya
// echo $u->location(). '<br>'; 

$c = new Customer;  // ini adalah instance object
$c->firstName = "Alexa"; //ini adalah nilai
$c->lastName = "panggabean"; //ini adalah nilai
$c->city = "Cirebon"; //ini adalah nilai
$c->country = "Indonesia"; //ini adalah nilai

// memangil method fullName dan tampilkan nilainya
echo $c->fullName().'<br>';
// memangil method location dan tampilkan nilainya
echo $c->location(). '<br>'; 

// cek apakah class Customer ini merupakan sub/child dari User class
if (is_subclass_of($c,'User')) {
    echo "Class Customer merupakan subclass dari class User <br>";
}

// untuk cek class Cutomer ini Menggunakan Class parent mana?

$parents = class_parents($c); //krn outpunya berupa array maka kita simpan di variabel
echo ( implode(',', $parents) .'<br>');
print_r($parents);


   
  ?>