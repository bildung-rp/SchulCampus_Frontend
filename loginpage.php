<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <link rel="stylesheet" href="dist/css/bootstrap-select.min.css">
    

    <link rel="stylesheet" href="CSS/scicons.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/scicons-codes.css">
    <link rel="stylesheet" href="CSS/scicons-embedded.css">
    <link rel="stylesheet" href="CSS/scicons-ie7.css">
    <link rel="stylesheet" href="CSS/scicons-ie7-codes.css">

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/mobile.css">
    <link rel="stylesheet" href="CSS/sidebyside-multiselect.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="dist/js/bootstrap-select.min.js"></script>


    <script src="js/jquery_functions.js"></script>

</head>


<body class="login-background-2">

<div class="wrapper"> 

    <div class="login-box">

        <div class="login-header">
            <a class="sc-brand" href="#">
                <img src="images/LogoSC.png" alt="Logo_SC">
            </a>
        </div>

        <form class="login-form">
            
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="usr" placeholder="Benutzername" name="text1">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" placeholder="Passwort" name="text2">
                    </div> 
                    <div class="form-group pw-forgot">
                        <a class="form-recovery" href="#">Passwort vergessen?</a>
                    </div>  
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group f-code">
                        <button class="btn btn-sm btn-unlock sc-icon" type="button" data-toggle="collapse" data-target="#freischaltarea" aria-expanded="false" aria-controls="freischaltarea">
                            Ich habe einen Freischaltcode 
                        </button>
                        <div class="collapse" id="freischaltarea">
                                <input type="text" class="form-control" id="f-code" placeholder="XXX-XXX-XXX" name="text3">
                        </div>
                    </div>
                </div>
            </div>     
        </form>
        
        <div class="row">
            <button type="submit" class="btn btn-blue btn-block">Anmelden</button>
        </div> 

        <div class="row login-option justify-content-around">
            <div class="col-6">
                <a type="button" class="btn btn-login-form" href="#">Registrieren</a>
            </div>
            <div class="col-6">
                <a type="button" class="btn btn-login-form" href="#">Abbrechen</a>
            </div>
        </div> 

        <a class="form-help sc-icon" href="#">Hilfe</a>

    </div>

</div>



    </div>


<a href="index.html" class="btn btn-up icon-up-open" role="button"></a>

<footer class="container-fluid footer-login" id="footer">

    <div class=" navbar row no-gutters">
        <div class="col-lg-2">
            <a class="navbar-brand" href="#">
                <img src="images/rlp-logo-weiss.png" alt="Logo_RLP">
            </a>
        </div>
        <div class="col-lg-8">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Datenschutzerklärung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nutzungsbedingungen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Impressum</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontakt</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-2"></div>
    </div>

</footer>

</body>

</html>