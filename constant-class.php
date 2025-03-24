<!-- Class Constant -->
<!-- * Digunakan untuk nilai class yang tidak bisa dirubah lagi -->
<!-- * Menggunakan keyword "const" daan penamaan capital -->
<!-- * Dapat menyimpan nilai expression(aritmatika) -->
<!-- * Support visibility modifier sejak php 7.1 -->
<!-- * Perunjukan dengan ClassName:: atau seliif:: -->

<?php
    class Time
    {
        public const DAY_IN_SEC = 60 * 60 * 24; //ini adalah property

        public function tommorow() //ini adalah method
        {
            return time() + self::DAY_IN_SEC;
        }
    }

    // panggil contant property

    echo Time::DAY_IN_SEC . '<br>';

    // untuk mendapatkan nilai dari method tommorow maka perlu membuat suatu instance object
    $clock = new Time; //ini adalah instance object
    echo $clock->tommorow();

?>

