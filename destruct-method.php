<!-- Destruct Method -->
<!-- * Bekerja secara otomatis saat referensi terakhir dari instace object dihapus -->
<!-- * Menggunakan method unset() -->
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

        public function __destruct() //ini adalah method desconstruct bawaan php visibility-nya harus public
        {
            // echo "Good By!";
            self::$instanceCount--;
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

    
    // Menggunakan argument array perhatikan penulisan intance object di bawah ini
    $elementary = new Elementary(['total' => 2, 'target' => 1]); //ini adalah instace dan berikan nilai parameternya
    echo "elementary:{$elementary->total} <br>";
    echo "target:{$elementary->target} <br>";

    

    $junior = new Junior(['total' => 4, 'target' => 2]); //ini adalah instace dan berikan nilai parameternya
    echo "Junior:{$junior->total} <br>";
    echo "Target:{$junior->target} <br>";

    unset($elementary);

    // jika argument tidak memberikan nilai argument nya maka akan di ambil nilai default yang di class Senior
    $senior = new Senior(); //ini adalah instace dan berikan nilai parameternya
    echo "Senior:{$senior->total} <br>";
    echo "target:{$senior->target} <br>";

    echo "Instance Count: " . Student::$instanceCount; //memnagil instance yang dimilik class Student


    // Kesimpulan: Magic method destruct ini sangat berfungsi untuk mencatat suatu proses yang terjadi didalam suatu object atau memang digunakn untuk menghapus suatu proses  dari object yang kita buat. Kita juga bisa gunakan untuk membersihkan nilai semula atau kita akan gunakan untuk menjalankan suattu proses atau suatu fungsi pada saat suatu object berkhir kita jalankan.


?>