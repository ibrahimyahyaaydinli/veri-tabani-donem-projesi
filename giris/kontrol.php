<?php
/*$db = new PDO('mysql:host=localhost;dbname=lib_test;charset=UTF8;', 'root', '');

$sorgu = $db->query('SELECT * FROM uyeler',PDO::FETCH_ASSOC);

$kullanicilar =[];

foreach($sorgu as $kullanici)
{
    $kullanicilar[]=$kullanici;
}

echo'<pre>';
print_r($kullanicilar);
echo'</pre>';

echo'<hr />';
    
    
    
$sorgu2 = $db->prepare('SELECT EMAIL FROM uyeler ');
$sorgu2-> execute();
$kullanicilar2 = $sorgu2->fetchAll(PDO::FETCH_ASSOC);


echo'<pre>';
print_r($kullanicilar2[2]['EMAIL']);
echo'</pre>';

echo'<hr />';*/



$_SESSION['KONTROL'] = 'none' ;

?>
    
    










