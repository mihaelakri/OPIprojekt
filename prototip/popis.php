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
                        <p class="p-heading p-large">Popis klijenata</p>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</header>
<body>  
    <div class="container">
        <div class="forma1 col-lg-12">
            <table border="1" cellpadding="10px" cellspacing="5px" style="border-collapse: separate;">
                <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>E-mail</th>
                    <th>Vrsta zahtjeva</th>
                    <th>Opis zahtjeva</th>
                    <th>Status zahtjeva</th>
                    <th>Vrsta obavijesti</th>
                    <th>Operator koji je evidentirao zahtjev</th>
                    <th>Operator koji je obradio zahtjev</th>
                </tr>
                <?php include "php/ispis.php"?>
            </table>
        </div>
    </div>
</body>
</html>