<?php
$db = new PDO('mysql:host=localhost;dbname=lib_test;charset=UTF8;', 'root', '');


/*$sorgu = $db->query('SELECT * FROM uyeler',PDO::FETCH_ASSOC);

$kullanicilar =[];

foreach($sorgu as $kullanici)
{
    $kullanicilar[]=$kullanici;
}

echo'<pre>';
print_r($kullanicilar[0]['AD']);
echo'</pre>';

echo'<hr />';*/
    
    
    
$sorgu2 = $db->prepare('SELECT * FROM uyeler WHERE EMAIL = :pemail AND PASSWORD = :ppassword');
$sorgu2 -> execute([':pemail' => $_POST['email'], ':ppassword' => $_POST['password']]);

$uye = $sorgu2->fetchAll(PDO::FETCH_ASSOC);


session_start();



 $_SESSION['AD'] = $uye[0]['AD'];
 $_SESSION['SOYAD'] = $uye[0]['SOYAD']; 
$_SESSION['EMAIL'] = $uye[0]['EMAIL'];
$_SESSION['NO'] = $uye[0]['NO'];



if(isset($_SESSION['AD'])){
  
   header("Location: ../uye_panel/index.php");
   die();

}
else if (isset($_POST['email']) || isset($_POST['password']) ){
   
    
    header("Location: index.php");
   die();
    
}

echo'<hr />';

   
 //echo $_SESSION['AD']; 
    









?>