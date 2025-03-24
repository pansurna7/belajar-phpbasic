
<?php
    //    Property
    // Variabel yang menyimpan suatu nilai
    // bisa disebut juga attributes,class vavriabels, instance variables
    // didefinisikan dengan keyword 'var' dan di lanjut dengan $4name_variabel
    // bisa diisi nilai secara langsung
    class Student
    {
        var $name; //ini adalah property class
        var $country = 'None'; //ini adalah property class
    }

    
    $student1=  new Student; // ini adalah instance object
    $student2=  new Student; // ini adalah instance object

    $student1->name ="Surya";
    $student2->name ="Alexa";

    // menampilakn property nilai yang sudah di berikan nilainya
    echo $student1->name . "<br>";
    echo $student2->name . "<br>";

    $class_vars = get_class_vars('Student');
    echo "Properi milik Student: ";
    echo "<pre>";
    print_r($class_vars);
    echo "</pre>";

    if(property_exists('Student','name')){ //mencari property name di class Student
        echo "Property name tersedia";
    }else{
        echo "Property name tidak tersedia";
    }

?>