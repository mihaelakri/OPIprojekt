<?php session_start();
if(empty($_SESSION['id'])):
header('Location:CMS.php');
endif;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <title>Izbornik</title>
</head>
<header id="header" class="header">
    <div class="header-content d-md-block col-lg-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>Call In centar</h1>
                        <p class="p-heading p-large">Izbornik</p>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</header>
<body>  
    <div class="container">
        <div class="forma1 col-lg-12">
            <a href="UnosKlijenata.php"> <button class="form-control-submit-button">Unos klijenata</button></a> 
            <br /> <br />
            <a href="popis.php"> <button class="form-control-submit-button">Popis klijenata</button></a> 
            <br /> <br />
            <a href="php/logoutprocess.php"><button class="btn-solid-reg">Log out</button></a>
        </div>
    </div>
    
</body>
</html>