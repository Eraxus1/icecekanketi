<?php 
include 'baglan.php';
//butona basılma işlemi
if(isset($_POST['gonder'])){
  if(empty($_POST["s1"])){
    echo " 1. kısım boş olamaz";
  }
  else{ //değişken tanımlama
    $s1=$_POST["s1"];
  }
  if(empty($_POST["s2"])){
    echo " 2. kısım boş olamaz";
  }
  else{ //değişken tanımlama
    $s2=$_POST["s2"];
  }
  if(empty($_POST["s3"])){
    echo " 3. kısım boş olamaz";
  }
  else{ //değişken tanımlama
    $s3=$_POST["s3"];
  }
  if(empty($_POST["s4"])){
    echo " 4. kısım boş olamaz";
  }  
  else{ //değişken tanımlama
    $s4=$_POST["s4"];
  }
  if(empty($_POST["s5"])){
    echo " 5. kısım boş olamaz";
  }  
  else{ //değişken tanımlama
    $s5=$_POST["s5"];
  }
  if(empty($_POST["s6"])){
    echo " 6. kısım boş olamaz";
  }  
  else{ //değişken tanımlama
    $s6=$_POST["s6"];
  }
  if(empty($_POST["s7"])){
    echo " 7. kısım boş olamaz";
  }  
  else{ //değişken tanımlama
    $s7=$_POST["s7"];
  }


 //veritabanına kayıt işlemi
  $sql="INSERT INTO anketyap(isim , gitmek,icecekisi,seker,tercih,ucret,favori)VALUES('".$_POST["s1"]."','".$_POST["s2"]."','".$_POST["s3"]."','".$_POST["s4"]."','".$_POST["s5"]."','".$_POST["s6"]."','".$_POST["s7"]."')";
    
  $sonuc=mysqli_query($baglanti,$sql);
if($sonuc){
  //  echo "verilerimiz eklendi";
}
else{
     echo"beklenmedik bir hata";
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    
    <br>
    <div class="container">
        <center>
        <form method="POST" action="index.php">

            <h1 style="color:white ;">Starbucks İçecek Tercihi Anketi</h1>

            <p>İsminizi giriniz.</p>
            <input type="text" name="s1" id="isim" placeholder="isminizi giriniz...">

            <p>Starbucks'a daha önce kaç kere gittiniz ?</p>
            <input type="text" name="s2" id="s1" placeholder="Yazınız.">

            <p>İçeceğinizi sıcak mı soğuk mu tercih edersiniz ?</p>
            <input type="text" name="s3" id="s2" placeholder="Yazınız.">

            <p>İçeceğinizi şekerli  mi yoksa şekersiz mi tercih edersiniz ?</p>
            <input type="text" name="s4" id="s3" placeholder="Yazınız.">

            <p>İçecek tercihinizi yaparken hangi özelliklere dikkat edersiniz ? (tatlı/ekşi vb.)</p>
            <input type="text" name="s5" id="s3" placeholder="Yazınız.">

            <p>Starbucks içeceğinize ayırdığnız ücret ne kadardır ?</p>
            <input type="text" name="s6" id="s3" placeholder="Yazınız.">

            <p>Favori Starbuck içeceğiniz nedir ?</p>
            <input type="text" name="s7" id="s3" placeholder="Yazınız.">

           
            <input type="submit" name="gonder" value="Gönder" id="button">
            <div id="demo"></div>

        </form>
    </center>
    </div>
    <script>

    </script>
</body>

</html>