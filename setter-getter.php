<!-- Setter dan Getter -->
<!-- * Memungkinkan mengakses private property -->
<!-- * Berguna untuk mengatuur kewenangan akses -->
<!-- * Berguna untuk membuat property read-only atau write-only -->
<!-- * Berguna untuk membuat nilai pada pre-processing -->
<!-- * Hindari mmbuat method "native setter" dan "naive getter" -->


<!-- Menggunakan Getter Dan Setter -->
<!-- * Menetapkan visibility property menjadi private -->
<!-- * Buat method untuk mengisi nilai private property -->
<!-- * Buat method untuk memangil nilai private property -->

<?php 
    class Product
    {
        public $price;
        public function setPrice($value)
        {
            $noFormat = preg_replace('/Rp/', '', $value);
            $float = floatval($noFormat);
            if ($$float <= 0) {
                // show error;
                return;
            }
            $this->price = $float;
        }
        public function getPrice()
        {
            return 'Rp' . number_format($this->price,2);
        }
    }

    $c = new Product;
    $c->price=20000;
    echo $c->setPrice($value);
   
?>