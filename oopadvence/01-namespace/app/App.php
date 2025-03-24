<?php
// namespace ini memiliki sifat yang sama dengan direktory tp bersifat virtual

    namespace App;
    include '../models/Model.php';

    use Model\Table as ModelTable;

    class Table
    {
        public static function get()//ini adalah static method
        {
            echo "App.Table.get() <br>"; 
        }
    }
    Table::get();
    ModelTable::get();
?>