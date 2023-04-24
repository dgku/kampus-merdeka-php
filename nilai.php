<?php
@$nilai1 = $_POST['nilai1'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>mENGHITUNG NILAI KATEGORI</title>
    </head>
    <body>
 <center><h3> MASUKKAN NILAI KAMU YAA!!!</h3></center>
        <form method="POST">
   <table width="450" border="1" align="center" border color="#0000FF" bgcolor="#00A2E8">
  
      <td><strong>Masukan Nilai Kamu :</strong></td>
      <td><input name="nilai1" type="text" value ="<?php echo $nilai1; ?>"/></br></td> 
      <td><center> <input type="submit" name="submit" value="SUBMIT"/><br/></td></center>
  </table>
  <table width="450" border="1" align="center" border color="#0000FF" bgcolor="#FF9900">
            <td><center><?php
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 0 && $nilai1 <= 69) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = D.  <br> Keterangan = NANGIS KAU NANGIS. ';
            } else if ($nilai1 >= 70 && $nilai1 <= 79) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = C.  <br> Keterangan = PAS-PASAN COY. ';
            } else if ($nilai1 >= 80 && $nilai1 <= 89) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = B.  <br> Keterangan = LUMAYAN LAH. ';
            } else if ($nilai1 >= 90 && $nilai1 <= 100) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = A.  <br> Keterangan = MANTAP KALI NILAIMU';
            } 
   
   else{
                echo 'Nilai : ' . $nilai1 . ' Jangan Nakal!';
            }
          ?> </td></center> 
        </form>
  </table>
  <center><span class="copy-text">Copyright &copy; 2023 - Dandi Gus S.</span></center>
    </body>
</html>