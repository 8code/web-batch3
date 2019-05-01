<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Bahasa Pemrograman</title>
</head>
<body>

<?php
// Ini Mengunakan PHP
// 1. Variable,
$nama = (string)"ari bahtiar";
// echo "dengan PHP : " . $nama;
// 2. data type,
$angka = (int)"2";

$tambah  = $angka + 2;

// echo $tambah;

// var_dump($angka);
$boolean = true; // false
$array = array(); // []
// echo json_encode($arr2dimensi[1]);
// echo json_decode();
// 3. operator, 

$tambah  = 1 + 2;
$kali  = 1 * 2;

// 4. condition, 
    // if else
    // if($angka == 1){
    //     echo "angka 1";
    // }else if($angka == 2){
    //     echo "angka 2";
    // }
    // else{
    //     echo "bukan angka 1";
    // }
    // case of
// 5. looping, 

// $data = array("data 1","data 2","data 3");

// for($i = 0; $i <= 2; $i++){
//     echo $data[$i];
// }

// while($angka <= 5){
//     echo $angka;
//     $angka++;
// }

// foreach($data as $d){
//     echo $d;
// }

// 6. array, 

    $arr1dimensi = ["data 1","data 2","data 3"];
    
    $arr2dimensi = array(
    [
        "nama" => "Ari Bahtiar",
        "email" => "ari@gmail.com",
        "alamat" => "Tasikmalaya"
    ],
    [
        "nama" => "Abi",
        "email" => "abi@gmail.com",
        "alamat" => [
                "desa" => "desaku",
                "kec" => "kesamatanku",
                "kota" => "kotaku"
        ]
    ],
    [
        "nama" => "Faisal",
        "email" => "Faisal@gmail.com",
        "alamat" => [
                "desa" => "desaku",
                "kec" => "kesamatanku",
                "kota" => "kotaku"
        ]
    ]
);

    // foreach($data as $d){
    //     echo $d;
    // }

    // echo json_encode($arr2dimensi);

    // echo json_decode();

// 7. object, 

class Motor {
    function kepunyaan($n,$nama,$alamat) {
        return  $n ." Kepunyaan : ".$nama ." Alamat : ". $alamat;
    }
}

// create an object
$gesits = new Motor(); // bikin class motor baru dengan nama gesit
$honda = new Motor();

// show object properties
// echo $gesits->kepunyaan("Gesits","Ari Bahtiar","Tasikmalaya"); // ngakses class dan fungsi kepunyaan
// echo $honda->kepunyaan("Honda","Om Honda","Sakura");


// 8. function, 

function kepunyaan($n,$nama,$alamat) { // mengirim data
    return  $n ." Kepunyaan : ".$nama ." Alamat : ". $alamat; // Callback
}
// echo kepunyaan("Honda","Om Honda","Sakura");

// 9. sorting

// sort () - mengurutkan array dalam urutan menaik 
// rsort () - mengurutkan array dalam urutan menurun 
// asort () - urutkan array asosiatif dalam urutan naik, sesuai dengan nilainya 
// ksort () - mengurutkan array asosiatif dalam urutan menaik, sesuai dengan kuncinya 
// arsort () - urutkan array asosiatif dalam urutan menurun, sesuai dengan nilainya 
// krsort () - mengurutkan array asosiatif dalam urutan menurun, sesuai dengan kunci

$cars = array(1, 5, 10,50);
$sort = rsort($cars);
foreach($cars as $d){
    // echo "<br>" . $d;
}

// 10. searching
$a = array(
    "a"=>"red",
    "b"=>"green",
    "c"=>"blue"
);

// echo array_search("green",$a);

$arr = [10,"data 2","data 3"];
// echo $arr[2];
// echo array_search("data 2",$arr);


?>

<div id="demo"></div>

<script>
// Ini Menggunakan Javascript
// 1. Variable (var,let,const)
    var nama = "Ari Bahtiar";
    // console.log(nama);
    document.getElementById("demo").innerHTML = nama;

// 2. data type,
// 3. operator, 
// 4. condition, 
// 5. looping, 
// 6. array, 
// 7. object, 
// 8. function, 
// 9. sorting
// 10. searching
</script>

</body>
</html>