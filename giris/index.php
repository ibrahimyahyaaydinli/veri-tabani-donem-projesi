<?php
session_start();



    ?>


<html>

<head>
    <title>

    </title>
</head>

<link rel="stylesheet" href="giris-css/giris-index.css">
<link rel="stylesheet" href="../nav/nav.css">



<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">

<body>
    <?php 
          require'../nav/nav.php'
        ?>


    <div id="div-form">
        <div id="form-baslik">
            <h3>Giris Yap</h3>
        </div>
        <form action="../giris/giris-kontrol.php" method="POST">

            <label for="email" id="lemail">Email</label>
            <input type="email" name="email" id="email" placeholder="email">
            <label for="password" id="lpassword">Sifre</label>
            <input type="password" name="password" id="password" placeholder="şifre">
            <input type="submit" id="submit" value="Giris">
<?php


     ?>


        </form>
       
            
    
         
    
        








    </div>

</body>


</html>
