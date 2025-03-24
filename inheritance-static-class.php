<!--  Pewarisan Static Property dan Method -->
<!--  * Static Property bisa di wariskan -->
<!--  * Pengubah visibilitas / encapsulation berlaku -->
<!--  * Static Property yang di wariskan bersifat shared variiables -->
<!--  * Perubahan nailai pada parent class mempengaruho subclass -->
<!--  * Perubahan nilai pada subclass mempengaruhi parent classs -->


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

    class PartTimeStudent extends Student
    {

    }
    echo PartTimeStudent::$grades[1] . "<br>"; //memangil property static parent
    echo PartTimeStudent::motto() . "<br>"; //memangil methode static parent

    PartTimeStudent::$grades[] = "ALUMNI"; //ini lah yang disebut sharing variable dan mempengaruhi parentnya
    echo implode(', ', Student::$grades) ."<br>";

    Student::addStudent(). "<br>"; //memangil method parent 
    Student::addStudent(). "<br>"; //memangil methode parent
    PartTimeStudent::addStudent(). "<br>"; //memangil method parent static class dari child class
    echo Student::count(). "<br>"; //memangil methode
    echo PartTimeStudent::count(). "<br>"; //memangil methode
    
 ?>



