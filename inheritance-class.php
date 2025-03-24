<!--Mengenal Inheritance(Pewarisan Class) -->
<!-- * class baru yang memanfaatkan property atau method dari class yang sudah ada -->
<!-- * Merapikan kode -->
<!-- * mencegah pengulangan kode -->
<!-- * Menyederhanakan pemeliharaan -->
<!-- * Menghidari bugs -->
 
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

} 
$c = new Customer;  // ini adalah instance object
$c->firstName = "Surya";
$c->lastName = "panggabean";

// memangil method dan tampilkan nilainya
echo $c->fullName().'<br>';

// cek apakah class Customer ini merupakan sub/child dari User class
if (is_subclass_of($c,'User')) {
    echo "Class Customer merupakan subclass dari class User <br>";
}

// untuk cek class Cutomer ini Menggunakan Class parent mana?

$parents = class_parents($c); //krn outpunya berupa array maka kita simpan di variabel
echo ( implode(',', $parents) .'<br>');
print_r($parents);


   
  ?>