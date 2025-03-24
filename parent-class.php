<!-- PARENT CLASS -->
 <?php
    class Programer //ini adalah parent class
    {
        public static function makeSystem() //ini adalah method
        {
            echo "Start coding";
        }
    }

    class AmateurProgramer extends Programer //ini adalah chid/sub class
    {
        public static function makeSystem() //ini adalah method
        {
            echo "Read documentation <br>";
            parent::makeSystem() . '<br>'; //memangil nilai semula dari parent class nya
            echo "clean up mess. <br>";
            
        }
    }
    echo "Programmer: <br>";
    echo Programer::makeSystem(). "<br>"; //memangil method makSystem di parent 

    echo "Amateur Programmer: <br>";
    echo AmateurProgramer::makeSystem(). "<br>"; //memangil method makSystem di child

    // contoh 2

    class Image //ini parent class
    {
        public static $resizeStatus = true; //ini adalah property static

        public static function geometry() //ini adalah method
        {
            echo "760x300";
        }
    }

    class PhotoProfile extends Image //ini adalah child class
    {
        public static function geometry() //ini adalah method untuk melakukan override
        {
            if (self::$resizeStatus) {
                echo "50x50";
            }else{
                parent::geometry();
            }
        }
    }
    
    echo Image::geometry(). '<br>'; //panggil method parent
    echo PhotoProfile::geometry() .'<br>'; //panggil method child/sub

    Image::$resizeStatus = false; //mengubah nilai  property static 
    //memangil method di class child stelah di ubah nilai static property di paren class
    echo PhotoProfile::geometry() . '<br>' 

    // Kesimpulan: Jika kita merubah nilai property si parent class akan mempengaruhi di sub/child


 ?>