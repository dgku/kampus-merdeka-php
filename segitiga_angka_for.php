<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Segitiga Angka PHP</title>
  <style>
    body  { text-align: center; font-family: "Trebuchet MS", serif; }
    h1,h2 { margin-bottom: 0; }
    hr    { width: 80%; }
    form  { margin-top: 2rem; }
    pre   { margin-top: 1.4rem; text-align: left; }
    .result {
      margin: 1rem auto; 
      padding: 0.25rem 0.25rem 1rem 0.25rem;
      background-color: ghostwhite;
      width: 50%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
</head>
<body>
  <h1>Segitiga Angka - Kampus Merdeka</h1>
  <hr>
  <form action="" method="post">
    <div>
      Tinggi Segitiga: <input type="text" name="tinggi_segitiga" size="1">
      <input type="submit" name="submit">
    </div>
  </form>
   
    <?php
      if (isset($_POST['submit'])) {
        $tinggi_segitiga = $_POST['tinggi_segitiga'];
        //variabel $tinggi_segitiga, Variabel ini yang akan menentukan tinggi segitiga.
        //nilai form yang tersimpan di global variable $_POST['tinggi_segitiga'] dipindahkan ke variabel $tinggi_segitiga 

        echo "<div class='result'>";
        echo "<h2>Hasil Kode Program</h2>";
        echo "<span>(tinggi segitiga: $tinggi_segitiga)</span>";
        echo "<pre>";
        //Perintah echo antara baris 38-41 berguna untuk membuat struktur HTML sebagai tempat dari segitiga bintang
        
 
        for($i = 0; $i <= $tinggi_segitiga; $i++) {
          for($x = 0; $x <= $i; $x++) {
          //perulangan for yang akan menampilkan pola segitiga bintang.
            echo " $x";
          }
          echo "<br>";
          //perintah echo "<br>" untuk proses pindah baris.
        }
        echo "</pre>";
        echo "</div>";
      }
    ?>
   
</body>
</html>