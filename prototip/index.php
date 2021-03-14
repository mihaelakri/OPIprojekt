<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <title>Call-In centar</title>

    

</head>
<header id="header" class="header">
    <div class="header-content d-md-block col-lg-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>Call In centar</h1>
                        <p class="p-heading p-large">Prijava</p>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</header>
<body>
    <div class="container">
        <form class="forma1 col-lg-12" method="post" action="php/adminlogin.php">
            <div class="form-group">
                Username:<br/>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                Lozinka:<br/>
                <input type="password" id="password" name="password" required>
            </div>  
            <div class="form-group">
                <button type="submit" id="login" name="login" class="form-control-submit-button">PRIJAVA</button>
            </div>
        </form>
    </div>
      
</body>
</html>