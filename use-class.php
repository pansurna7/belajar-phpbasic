<!--Menggunakan Object -->
 
  <?php 

class Student
{
    var $firstName; //ini adalah property class
    var $lastName = 'None'; //ini adalah property class

    function sayHello() //ini adalah method
    {
        return "hello world";
    }

    function fullName() //ini adalah method
    {
        return $this->firstName . ' ' . $this->lastName;
    }
    
}

   $student1=  new Student; // ini adalah instance object


   $student1->firstName ="Surya";
   $student1->lastName ="Panggabean";

   // menampilakn property nilai yang sudah di berikan nilainya
   echo $student1->firstName . "<br>";
   echo $student1->lastName . "<br>";


   echo $student1->sayHello() . "<br>";
   echo $student1->fullName() . "<br>";

   $class_method = get_class_methods('Student');
   echo "Method milik Student: ";
   echo "<pre>";
   print_r($class_method);
   echo "</pre>";

   if(method_exists('Student','sayHello')){ //mencari  method di class Student
       echo "Method sayHello tersedia";
   }else{
       echo "Method sayHello tidak tersedia";
   }
   
  ?>