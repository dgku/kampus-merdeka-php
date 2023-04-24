<html>
    <head>
        <title>Menghitung Nilai BMI</title>
    </head>
    <body>
        <h1>Menghitung Nilai BMI</h1>
        <form method="POST" action="">
            Nama :
            <br>
            <input type="text" name="nama"><br>
            Tinggi Badan :
            <br>
            <input type="number" name="tinggi"> - CM<br>
            Berat Badan :
            <br>
            <input type="number" name="berat"><br>
            <input type="submit" name="hitung" value="Hitung">
        </form>
        <?php 

        if(isset($_POST['nama'])){
            echo "Halo, ".$_POST['nama'].". Nilai BMI anda adalah <br>";
        }
        if(isset($_POST['hitung'])){
            echo "Tinggi Badan : ".$_POST['tinggi']."<br>";
            echo "Berat Badan : ".$_POST['berat']."<br>";
            $tinggi = $_POST['tinggi']/100; 
            $tinggi_rumus = $tinggi*$tinggi;
            $hasil_tinggi = number_format($tinggi_rumus, 2, '.', '');
            $hasil = $_POST['berat']/$hasil_tinggi;
            $hasil_ahir = number_format($hasil,1, '.', '');
            echo "<b>";
            if($hasil_ahir < 18.5){
                echo "Anda Termasuk Kurus";
            }else if(($hasil_ahir >= 18.5) && ($hasil_ahir <= 25)){
                echo "Anda Termasuk Sedang";
            }else if(($hasil_ahir > 24.9) && ($hasil_ahir <=30)){
                echo "Anda Termasuk Gemuk";
            }else{
                echo "Anda Termasuk Obesitas";
            }
            echo "</b>";
        }
        ?>
    </body>
</html>