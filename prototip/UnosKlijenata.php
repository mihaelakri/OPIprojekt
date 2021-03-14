
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <title>Evidencija klijenata Call-In centar</title>

    

</head>
<header id="header" class="header">
    <div class="header-content d-md-block col-lg-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>Call In centar</h1>
                        <p class="p-heading p-large">Evidencija klijenata</p>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</header>
<body>
    <div class="container">
        <form class="forma1 col-lg-12" name="Evidencija" method="post" action="php/unos.php">
            <div class="form-group">
                Ime:<br/>
                <input type="text" id="ime" name="ime" required>
            </div>
            <div class="form-group">
                Prezime:<br/>
                <input type="text" id="prezime" name="prezime" required>
            </div>  
            <div class="form-group">
                e-mail: <br/>
                <input type="email" id="mail" name="mail">
            </div> 
            <div class="form-group">
                Odaberite vrstu zahtjeva: <br/>
                <select id="izbornikZ" name="izbornikZ" required>
                    <option class="select-option" value="" disabled selected>Vrsta zahtjeva</option>
                    <option class="select-option" value="Upit">Upit</option>
                    <option class="select-option" value="Žalba">Žalba</option>
                    <option class="select-option" value="Prijava kvara">Prijava kvara</option>
                    <option class="select-option" value="kupnja proizvoda">Kupnja proizvoda</option>
                </select>
            </div>
            <div class="form-group col-lg-6">
                Opis zahtjeva: <br/>
                <textarea class="form-control-textarea" id="poruka" name="poruka" required></textarea>
                <label class="label-control" for="poruka">poruka</label>
            </div>
            <div class="form-group">
                Način obavještavanja: <br/>
                <select id="izbornikO" name="izbornikO" required>
                    <option class="select-option" value="" disabled selected>obavijest putem:...</option>
                    <option class="select-option" value="e-mail">e-mail</option>
                    <option class="select-option" value="telefon">telefon</option>
                    <option class="select-option" value="telefax">telefax</option>
                    <option class="select-option" value="poštom">poštom</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control-submit-button">UNOS KLIJENTA</button>
            </div>
        </form>
    </div>
      
</body>
</html>