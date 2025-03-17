<?php
// Array Asosiatif
// Array Asosiatif index string

//  $dataDiri['nama'] = 'surya';
//  $dataDiri['goldara'] = 'tangerang';
//  $dataDiri['alamat'] = 'O';
// $dataDiri=[
//     'nama'      => 'surya',
//     'alamat'    => 'tangerang',
//     'goldara'   => 'O',
// ];
//  var_dump($dataDiri);
//  echo "Nama       :" . $dataDiri['nama'] . ('<br>');
//  echo "Gol. Darah :" . $dataDiri['goldara'] . ('<br>');
//  echo "alamat     :" . $dataDiri['alamat'] . ('<br>');


// Array Multi Dimensi
// $a=[
//         250,true,
//         ['jeruk','pepaya','pisang']
// ];

// //  var_dump($a);

//  echo ($a[2][0]);
//  echo ($a[2][1]);

// $herbivora = ['kambing','sapi','kerbau'];
// $karnivora = ['harimau','singa','serigala'];
// $omnivora = ['ayam','monyet','babi'];

// // $binatang =[$herbivora,$karnivora,$omnivora];
// $binatang =[
//                 'herbi' =>  $herbivora,
//                 'karni' =>  $karnivora,
//                 'omni'  =>  $omnivora];

// // var_dump($binatang);
// // echo $binatang[2][1];
//  echo $binatang['herbi'][0] . '<br>';
//  echo $binatang['karni'][1] . '<br>';
//  echo $binatang['omni'][2] . '<br>';

// Tipe data Null

// $pesan = null;

// $dataDiri = [
//     'nama'      =>  'Surya Panggabean',
//     'goldar'    =>  null,
//     'alamat'    =>  'Tangerang',
// ];

// // echo $dataDiri['nama'];
// // echo $dataDiri['status'];
// //  untuk mengatasi error Undefined  kita bisa menggunakan coalescing
// echo $dataDiri['status'] ?? null;

// $a= 4;
// $b= 2;

// echo $a ** $b;

// Berinteraksi Dengan Form

// Query String GET
// $nama = $_GET['nama'];
// $alamat = $_GET['alamat'];

// Pengiriman Array dengan metode GET dan POST
    // if(!empty($_POST['proses']))
    // {
    //     print_r($_POST);
    // }

    // IF
    // $nama = "ALEXA";
    // if ($nama == "SURYA") {
    //     echo "Selamat Datang, Surya";
    // }
    // $nilai = 40;
    // if ($nilai >= 50) {
    //     echo "Sellamat Anda lulus, nilai anda: $nilai";
    // }else{
    //     echo "Anda Tidak Lulus, Nilai Anda: $nilai";
    // }

    // Switch
    // $nilai = "S";
    // if ($nilai ==  "A") {
    //     echo "Nilai Anda sangat memuaskan";
    // }else if($nilai == "B"){
    //     echo "Niali anda memuaskan";
    // }else if($nilai = "C"){
    //     echo"Nilai Anda Cukup";
    // }else if($nilai == "D"){
    //    echo "Nilai Anda Kurang";
    // }else{
    //     echo"Anda Tidak Lulus";
    // };

    // switch ($nilai) {
    //     case 'A':
    //         echo "Nilai Anda Sangat Memuaskan";
    //         break;
    //     case 'B':
    //         echo "Nilai Anda  Memuaskan";
    //         break;
    //     case 'C':
    //         echo "Nilai Cukup";
    //         break;
    //     case 'D':
    //         echo "Nilai Anda Kurang";
    //         break;
    //     case 'E':
    //         echo "Anda Tidak Lulus";
    //         break;
        
    //     default:
    //         echo "Nilai tidak Terdaftar";
    //         break;
    // }
//     $hewan = 'Kuda';
//     switch($hewan){
//         case 'Kuda':
//         echo 'Kuda dipilih.';
//         break;
//         case 'Kucing':
//         echo 'Kucing dipilih.';
//         break;       
//         default:
//         echo 'Tidak ada pilihan';
// }


    // Pengecekan Kondisi Ganda
    
    // $warna = "Biru";
    // $ukuran = "XL" ;

    // $biaya = 80000;
    // $biaya_tambahan = "15000";
    
    // Pengecekan untuk ukuran XL dengan warna kain merah, dikenakan biaya tambahan

    // if($warna = "merah" && $ukuran == "XL"){
    //     echo "Total Harga: " . ($biaya+$biaya_tambahan);
    // }else{
    //     echo "Total Harga: " . $biaya;        
    // }

    // Pengecekan untuk ukuran XL atau warna kain merah, dikenakan biaya tambahan 
    // if($warna == "merah" || $ukuran == "XL"){
    //     echo "Total Harga: " . $biaya+$biaya_tambahan;
    // }else{
    //     echo "Total Harga: " . $biaya;        
    // }


    // Ternary Operator

    // $nilai=70;
    // if($nilai>=80)
    // {
    //     echo "Anda Lulus";  
    // }
    // else
    // {
    //     echo "Anda tidak Lulus" ; 
    // }

    // Ternary 
    // echo ($nilai >= 80) ? "Anda Lulus" : "Anda Tidak Lulus";
    // $a = 100;
    // echo ($a==100) ? 50 : 2;

    // PERULANGAN
    // FOR
        // for ($i=2; $i <= 200 ; $i+=2) { 
        //     echo "$i. selamat Datang <br>";
        // }

    // For Array

    // mengecek berapa jumlah warna yang sama di array
    // $arr_warna	= ['merah','biru','kuning','merah','hijau','biru','merah','biru','kuning','merah','hijau','biru','violet'];
    // $jml_array = count($arr_warna);
    // // echo $jml_array;
    // $jumlah=0;

    // cek manual

    // if($arr_warna[0]== "merah"){
    //     echo $jumlah++;
    // }
    // if($arr_warna[1]== "merah"){
    //    echo $jumlah++;
    // }
    // if($arr_warna[2]== "merah"){
    //    echo $jumlah++;
    // }
    // if($arr_warna[3]== "merah"){
    //    echo $jumlah++;
    // }
    // if($arr_warna[4]== "merah"){
    //    echo $jumlah++;
    // }
    // dst ...
    // kode diatas akan merepotkan krn harus di imput sebanyak index dalam array

    // for ($i=0; $i < $jml_array; $i++) { 
    //     if($arr_warna[$i]== "merah"){
    //         $jumlah++;
    //     }
    // }
    // echo "Jumlah Warna Merah Pada Array: " . $jumlah . '<br>';
   
    // WHILE
        //     $i=0;
        //    while ($i <= $jml_array) {
        //         if($arr_warna[$i]== "merah"){
        //                 $jumlah++;
        //         }
        //         $i++;
        //    }
        //    echo "Jumlah Warna Merah Pada Array: " . $jumlah . '<br>';

    // Foreach
    // foreach ($arr_warna as $nomor_index => $isi) {
    //     echo "index ke-$nomor_index berisi $isi <br>";
    //     if($isi == "merah"){
    //         $jumlah++;
           
    //     }
    // }
    // echo "Jumlah Warna Merah Pada Array: " . $jumlah . '<br>';

    // Break
    // $arr_warna	= ['merah','biru','kuning','merah','hijau','biru','merah','biru','kuning','merah','hijau','biru','violet'];

    // foreach ($arr_warna as $key => $warna) {
    //     echo "Warna:  $warna <br>";

    //     if ($warna == "merah") {
    //         echo "Merah ada di indexk ke-$key <br>";
    //         break;
    //     }
    // }

    // Continue
    // melompati kode yang di dalam perulangan  ke perulangan selanjutnya

    // $siswa = [
    //     ['nama' => 'toni', 'kelas' =>'2A'],
    //     ['nama' => 'kresna', 'kelas' =>'2A'],
    //     ['nama' => 'palupi', 'kelas' =>'2B'],
    //     ['nama' => 'singgih', 'kelas' =>'2C'],
    //     ['nama' => 'oriza', 'kelas' =>'2B'],
    //     ['nama' => 'hani', 'kelas' =>'2D'],
    // ];

    // foreach ($siswa as $key => $value) {
    //     if($value['kelas'] == "2A"){
    //         continue;
    //         echo "Nama: " . $value['nama'] . '<br>';
    //         echo "Kelas: " . $value['kelas'] . '<br><br>';
    //     }
    // }

    



    // Menampilkan Array ke dalam tabel
    // $siswa = [
    //     ['nama' => 'toni', 'kelas' =>'2A', 'goldar' => 'B'],
    //     ['nama' => 'kresna', 'kelas' =>'2A','goldar' => 'AB'],
    //     ['nama' => 'palupi', 'kelas' =>'2B','goldar' => 'B'],
    //     ['nama' => 'singgih', 'kelas' =>'2C','goldar' => 'A'],
    //     ['nama' => 'oriza', 'kelas' =>'2B','goldar' => 'O'],
    //     ['nama' => 'hani', 'kelas' =>'2D','goldar' => 'B'],
    // ];


    // FUNGSI
    // fungsi bawaan php
    // contoh mengitung jumalah kata

    // $kalimat = "Saya suka pizza, terutama pizza yang dagingnya tebal";
    // echo str_word_count($kalimat);

    // menganti kata pizza menajdi burger
    // echo str_replace('pizza','burger',$kalimat);

    // fungsi buatan sendiri

    // function cetakPesan($nama= null){
    //     if(empty($nama))
    //         echo "Selamat Datang!";
    //     else
    //         echo "Selamat Datang, $nama! <br>";
    // }

    // cetakPesan('surya');

    // Skup Variabel

    // function cetakPesan($nama= null){
    //     $goldar = "B";
    //     if(empty($nama))
    //         echo "Selamat Datang!";
    //     else
    //         echo "Selamat Datang, $nama! <br>";
    // }

    // $nama = "Alexa Panggabean";
    // echo $goldar;
    // cetakPesan($nama);
    // Variabel goldar tidak dikenali karena di deklarasikan di dalam fungsi, sedangkan pemanggilannya berada di luar fungsi


    // Mengembalikan nilai dari fungsi
    // Maksud dari mengembalikan nilai dari fungsi, adalah mengembalikan output (hasil proses dari sebuah fungsi) agar dapat digunakan di luar fungsi.

    // Untuk mengembalikan nilai pada fungsi kita dapat menggunakan statemen return, ketika menggunakan statmen return maka eksekusi fungsi berhenti dan nilai dikembalikan (return) ke pemanggil fungsi.
    $alas=10;
    $tinggi=25;
    // function luasSegitiga($alas, $tinggi) 
    // {
    //     $luas= $alas * $tinggi / 2;
    //     return $luas;
    // }
    

    // function luasJajarGenjang($alas, $tinggi)
    // {
    //     $luas = ($alas + $tinggi) * 2;
    //     return $luas;
    // }


    // echo "Luas segitiga adalah " . luasSegitiga($alas, $tinggi) . "<br>";
    // echo "Luas jajargenjang adalah " . luasJajarGenjang($alas, $tinggi) . "<br>";

    // Fungsi parameter referensi
    // Mengubah nilai parameter sesuai proses yang ada di dalam fungsi.

    // function gantiNama(&$nama){
    //     $nama = "nama baru";
    // }
    // $nama ="Surya";
    // gantiNama($nama);
    // echo $nama;

    // $x= 5;
    // echo $x. '<br>';
    // $x= $x + $x;
    // echo $x. '<br>';
    // $x= $x + $x;
    // echo $x. '<br>';
    // $x= $x + $x;
    // echo $x. '<br>';
    // $x= $x + $x;
    // echo $x. '<br>';
    // $x= $x + $x;
    // echo $x. '<br>';
    // $x= $x + $x;
    // echo $x. '<br>';
    // $x= $x + $x;
    // echo $x. '<br>';
    // kode diatas tidak efisien, supaya efisien kita menggunakan funsgi
    // function kaliLipat(&$angka){
    //     $angka = $angka + 2;
    // }
    // $x =5;
    // echo $x. '<br>';
    // kaliLipat($x);
    // echo $x. '<br>';
    // kaliLipat($x);
    // echo $x. '<br>';
    // kaliLipat($x);
    // echo $x. '<br>';
    // kaliLipat($x);
    // echo $x. '<br>';
    // kaliLipat($x);
    // echo $x. '<br>';
    // kaliLipat($x);
    // echo $x. '<br>';



    // Menulis Dan Membaca File
    // Menulis dan menyimapan text kedalam file
        // $message = "selamat datang";
        // file_put_contents("content.txt",$message);
    // Menambah text baru kedalam file yang sama tanpa menimpa 
        // $message = "apa kabar \n";
        // file_put_contents("content.txt",$message, FILE_APPEND);
    // Membaca text dari file
    //  $isiFile =    file_get_contents('content.txt');
    // echo $isiFile;

    // Menyimpan Dalam Format Serialize Dan Json
    // Macam-macam penyimpanan data string antara lain :
    // serealized
    // xml
    // json

    // Serialized
        $karyawan	=[
            ['nama'=>'Toni','alamat'=>'Bandung'],
            ['nama'=>'Naufal','alamat'=>'Bandung'],
            ['nama'=>'Davi','alamat'=>'Jakarta']
        ];
        // $data =  serialize($karyawan);
        // file_put_contents('karyawan.txt',$data);
        // $isiFile =    file_get_contents('karyawan.txt');
        // echo $isiFile;

        // merubah serialized ke array
        // $file = file_get_contents('karyawan.txt');
        // $hasil = unserialize($file);
        // print_r($hasil);

    // JSON (avaScript Object Notation)
    // Membuat File json
        //  $data = json_encode($karyawan);
        //  file_put_contents('karywanJson.txt',$data);
    // membaca file json
        // $file = file_get_contents('karywanJson.txt');
        // echo $file;
    // merubah json ke array
        // $file = file_get_contents('karywanJson.txt');
        // $output= json_decode($file,true);
        // print_r($output);
     
      
    // ****** Mebuat Aplikasi TO DO ***////
    $todos=[];
    if (file_exists('todo.txt')) {
        # code...
        $file = file_get_contents('todo.txt');
        $todos = unserialize($file);
    }
        if(isset($_POST['todo'])){
            $data = $_POST['todo'];
            $todos[]=[
                'todo' => $data,
                'status' => 0,
            ];

            
            saveData($todos);
        }

        if(isset($_GET['status'])){
            $todos[$_GET['key']]['status']=$_GET['status'];
            
            saveData($todos);
        }
        if(isset($_GET['hapus'])){
            unset($todos[$_GET['key']]);
            
            saveData($todos);
        }

        function saveData($todos)
        {
            file_put_contents('todo.txt',serialize($todos));
            header('Location:index.php');
        }
        print_r($todos);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- GET -->
    <!-- <form>
        <input type="text" name="nama">
        <input type="text" name="alamat">
        <input type="submit">
    </form> -->
    <!-- <h1>Selamat Datang, <?php echo $nama . ' ' . $alamat; ?> </h1>
    <p>Selamat belajar pemrograman dasa PHP.</p> -->

    <!-- POST -->
<!--     
    <form action="proses2.php" method="post">
        Nama: <input type="text" name="nama">
        Alamat: <input type="text" name="alamat"><br><br>
        <input type="submit" value="submit">
    </form> -->

    <!-- Pengiriman Array dengan metode GET dan POST -->

    <!-- <form action="" method="post">
        Nama: <input type="text" name="nama">
        <br><br>
        Alamat: <textarea name="alamat" rows="8" col="200"></textarea>
        <br><br>
        Program Studi :
        <select name="program_studi">
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknik Informatika</option>
            <option value="MI">Manajemen Informatika</option>
        </select>
        <br><br>
        <input type="submit" name="proses" value="submit">
    </form> -->

<!-- Menampilkan Array ke dalam tabel -->
<!-- <table border="2">
    <tr>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Gol. Darah</th>
    </tr>
    <?php foreach ($siswa as $key => $value) : ?>
    <tr>
        <td><?php echo $value['nama']; ?></td>
        <td><?php echo $value['kelas']; ?></td>
        <td><?php echo $value['goldar']; ?></td>
    </tr>
    <?php endforeach; ?>
</table> -->
<!-- Mebuat Aplikasi TO DO  -->
<h1>Todo App</h1>
<form method="POST">
    <label for="">Apa kegiatanmu hari ini?</label> <br>
    <input type="text" name="todo">
    <button type="submit">Simpan</button>
</form>
<ul>
    <?php foreach ($todos as $key => $value) : ?>
    <li>
    <input type="checkbox" name="todo" onclick="window.location.href='index.php?status=<?php echo($value['status']==1)? '0': '1'; ?>&key=<?php echo $key;?>'";
    <?php if($value['status']==1)echo 'checked' ?>>
        <label for="">
            <?php
                if($value['status']==1){
                    
                    echo '<del>' . $value['todo'] . '</del>'; 
                }else{
                    echo   $value['todo'];
                }
            ?>
        </label>
        <a href="index.php?hapus=1&key=<?php echo $key; ?>" onclick="return confirm('Apakah  Ingin Menghapus Data?') ">hapus</a>
    </li>
     <?php endforeach; ?>
</ul>
</body>
</html>