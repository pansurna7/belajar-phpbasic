<!-- Construct Method (Magic Method) -->
<!-- * __construct() -->
<!-- * __destruct() -->
<!-- * __clone() -->
<!-- * __get(), __set() -->
<!-- * untuk menggunakan magic method harus di setting visibility "public" -->
<?php



    class Student //ini adalah parent class
    {
        public static $instanceCount = 0; //ini adalah property static class

        public function __construct() //ini adalah method construct bawaan php visibility nya harus public
        {
            self::$instanceCount++;
        }

    }

    class Elementary extends Student //ini adalah child/sub class dari parent Student
    {
        public $total = 3;
    }
    class Junior extends Student //ini adalah child/sub class dari parent Student
    {
        public $total = 2;
    }
    class Senior extends Student //ini adalah child/sub class dari parent Student
    {
        public $total = 4;
    }

    $elementary = new Elementary; //ini adlah instace
    echo "elementary:{$elementary->total} <br>";
    $junior = new Junior; //ini adlah instace
    echo "Junior:{$junior->total} <br>";
    $senior = new Senior; //ini adlah instace
    echo "Senior:{$senior->total} <br>";
    
    echo "Instance Count: " . Student::$instanceCount; //memnagil instance yang dimilik class Student


    // kesimpulan : magic method  dari  __construct  merupakan method yang berkeja pertamakali pada saat instance dibuat baik itu dari parent class maupun sub class nya.
?>