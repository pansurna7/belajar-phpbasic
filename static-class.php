<!-- STATIC -->
<!-- * Perilaku yang di miliki class pada umumnya -->
<!-- * Tidak terikat denagn  instance tertentu -->
<!-- * Bisa di panggil secara langsung tanpa instance -->
<!-- * Mengunaka keyword "static" -->
 <?php 
    class Student
    {
        public static $grades = ['SD', 'SMP', 'SMA']; //ini adalah property static
        private static $totalStudents =0; //ini adalah property static

        public static function motto() //ini adalah method
        {
            return "Learn PHP";
        }
        public static function count() //ini adalah method
        {
            return self::$totalStudents;
        }
        public static function addStudent() //ini adalah method
        {
            return self::$totalStudents++;
        }

    }
    
    echo Student::$grades[2] . "<br>"; //memangil property static
    echo Student::motto() . "<br>"; //memangil method

    // memangil property private 

    // echo Studen::$totalStudents; //error krn tidak bisa akses private

    // supaya tidak error kita panggil method public nya

    echo Student::count(). "<br>"; //memangil method
    echo Student::addStudent(). "<br>"; //memangil method
    echo Student::count(). "<br>"; //memangil method

    
 ?>



