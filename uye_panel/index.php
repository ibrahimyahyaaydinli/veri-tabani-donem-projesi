<?php
session_start();
?>


<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <title>

    </title>
</head>
<link rel="stylesheet" href="../nav/nav.css">
<link rel="stylesheet" href="../uye_panel/uye-index.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">

<?php 
          require'../ortak_css/ortak-css.php'
        ?>

<body>

    <?php 
          require'../nav/nav.php'
        ?>

    <div id="uye-content">
        <div id="uye-bilgisi">
            <h1>Uye Bilgisi</h1>
            <div class="item">
               <p class="session-baslik">No: </p>

                 <?php echo $_SESSION['NO'] ?>
                 </div>
<div class="item">
                <p class="session-baslik">İsim: </p>

                 <?php echo $_SESSION['AD'] ?>

            </div>
            <div class="item">
                <p class="session-baslik">Soyisim:</p> <?php echo $_SESSION['SOYAD'] ?>
            </div>
            <div class="item">
                <p class="session-baslik">Email:</p> <?php echo $_SESSION['EMAIL'] ?>
            </div>


        </div>
        <div id="uye-islemleri">

        </div>

    </div>

</body>

</html>
