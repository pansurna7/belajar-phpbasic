<!-- Construct Argument -->
 <!-- Argumen/variabel/value/parameter pada magic  Construct Methode -->
 <?php



    class Student //ini adalah parent class
    {
        public static $instanceCount = 0; //ini adalah property static class

        public $total; //ini adalah property  class
        public $target; //ini adalah property  class

        // public function __construct($total, $target) //ini adalah method construct bawaan php visibility-nya harus public
        // {
        //     self::$instanceCount++;
        //     $this->total = $total;
        //     $this->target= $target;
        // }
        // Bisa juga mengunakan argument array
        public function __construct($args = []) //ini adalah method construct bawaan php visibility-nya harus public
        {
            self::$instanceCount++;
            $this->total = $args['total'] ?? $this->total;;
            $this->target= $args['target'] ?? $this->target;
        }

    }

    class Elementary extends Student //ini adalah child/sub class dari parent Student
    {
        public $total = 3;
        public $target = 2;
    }
    class Junior extends Student //ini adalah child/sub class dari parent Student
    {
        public $total = 2;
        public $target = 1;
    }
    class Senior extends Student //ini adalah child/sub class dari parent Student
    {
        public $total = 4;
        public $target = 3;
    }

    // $elementary = new Elementary(2, 1); //ini adalah instace dan berikan nilai parameternya
    // echo "elementary:{$elementary->total} <br>";
    // echo "target:{$elementary->target} <br>";
    // $junior = new Junior(4, 2); //ini adalah instace dan berikan nilai parameternya
    // echo "Junior:{$junior->total} <br>";
    // echo "Target:{$junior->target} <br>";
    // $senior = new Senior(5, 3); //ini adalah instace dan berikan nilai parameternya
    // echo "Senior:{$senior->total} <br>";
    // echo "target:{$senior->target} <br>";

    // Menggunakan argument array perhatikan penulisan intance object di bawah ini

    $elementary = new Elementary(['total' => 2, 'target' => 1]); //ini adalah instace dan berikan nilai parameternya
    echo "elementary:{$elementary->total} <br>";
    echo "target:{$elementary->target} <br>";

    $junior = new Junior(['total' => 4, 'target' => 2]); //ini adalah instace dan berikan nilai parameternya
    echo "Junior:{$junior->total} <br>";
    echo "Target:{$junior->target} <br>";


    // jika argument tidak memberikan nilai argument nya maka akan di ambil nilai default yang di class Senior
    $senior = new Senior(); //ini adalah instace dan berikan nilai parameternya
    echo "Senior:{$senior->total} <br>";
    echo "target:{$senior->target} <br>";

    echo "Instance Count: " . Student::$instanceCount; //memnagil instance yang dimilik class Student



?>