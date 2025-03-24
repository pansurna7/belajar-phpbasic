<!-- Method -->
 <!-- fungsi yang bekerja dalam object -->
  <?php 

class Student
{
    var $name; //ini adalah property class
    var $country = 'None'; //ini adalah property class
    function sayHello() //ini adalah method
    {
        return "hello world";
    }
}

   $student1=  new Student; // ini adalah instance object
   $student2=  new Student; // ini adalah instance object

   $student1->name ="Surya";
   $student2->name ="Alexa";

   // menampilakn property nilai yang sudah di berikan nilainya
   echo $student1->name . "<br>";
   echo $student2->name . "<br>";

   echo $student1->sayHello() . "<br>";
   echo $student2->sayHello() . "<br>";

   $class_method = get_class_methods('Student');
   echo "Method milik Student: ";
   echo "<pre>";
   print_r($class_method);
   echo "</pre>";

   if(method_exists('Student','sayHello')){ //mencari property name di class Student
       echo "Method sayHello tersedia";
   }else{
       echo "Method sayHello tidak tersedia";
   }
   
  ?>