<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

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

<body>




    <header class="container-fluid fixed-top" id="header">
        <div class="row">
            <div class="col-xl-2 col-3 col-md-3">
                <div class="dropdown" id="topnav">
                    <button type="button" class="btn dropdown-lime dropdown-toggle" data-toggle="dropdown">
                        <div class="logo" id="mainpage-0">
                        <?php
                        $url = $_SERVER['REQUEST_URI'];
                        $lastElement = array_slice(explode('/', rtrim($url, '/')), -1)[0];

                        switch($lastElement) {
                            case "index.php":
                                echo "<i class='sc-icon-dd icon-schulcampus'></i>
                                <span><b>Schul</b>campus&nbsp;<i>RLP</i></span>";
                            break;
                            case "workspace.php":
                                echo "<i class='sc-icon-dd icon-folder-open'></i>
                                <span>meine Dateien</span>";
                            break;
                            case "moodle.php":
                                echo "<i class='sc-icon-dd icon-graduation-cap'></i>
                                <span>moodle@RLP</span>";
                            break;
                            case "mediathek.php":
                                echo "<i class='sc-icon-dd icon-play-circled'></i>
                                <span>Mediathek</span>";
                            break;
                            case "curriculum.php":
                                echo "<i class='sc-icon-dd icon-bank'></i>
                                <span>curriculum</span>";
                            break;
                            case "lehrplan.php":
                                echo "<i class='sc-icon-dd icon-book-1'></i>
                                <span>Lehr- und Rahmenpläne</span>";
                            break;
                            case "infoportal.php":
                                echo "<i class='sc-icon-dd icon-info-circled'></i>
                                <span>Infoportal</span>";
                            break;
                            default:
                                echo "<i class='sc-icon-dd icon-schulcampus'></i>
                                <span><b>Schul</b>campus&nbsp;<i>RLP</i></span>";
                            break;
                        } ?>
                        </div>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lime">
                        <a class="dropdown-item" href="index.php">
                            
                                <i class="sc-icon-dd icon-schulcampus"></i>
                                <span>Startseite</span>
                            
                        </a>
                        <a class="dropdown-item" href="workspace.php">
                            
                                <i class="sc-icon-dd icon-folder-open"></i>
                                <span>meine Dateien</span>
                            
                        </a>
                        <a class="dropdown-item" href="moodle.php">
                            
                                <i class="sc-icon-dd icon-graduation-cap"></i>
                                <span>moodle@RLP</span>
                            
                        </a>
                        <a class="dropdown-item" href="mediathek.php">
                            
                                <i class="sc-icon-dd icon-play-circled"></i>
                                <span>Mediathek</span>
                            
                        </a>
                        <a class="dropdown-item" href="curriculum.php">
                            
                                <i class="sc-icon-dd icon-bank"></i>
                                <span>curriculum</span>
                            
                        </a>
                        <a class="dropdown-item" href="lehrplan.php">
                            
                                <i class="sc-icon-dd icon-book-1"></i>
                                <span>Lehr- und Rahmenpläne</span>
                            
                        </a>
                        <a class="dropdown-item" href="infoportal.php">
                            
                                <i class="sc-icon-dd icon-info-circled"></i>
                                <span>Infoportal</span>
                            
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-6 col-md-5">
                <div class="nav-pills-area">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="popover" data-trigger="focus" data-placement="auto" title="Infos" data-content="Dein Moodle-Account wurde nicht abgemeldet.">
                                <span class="sc-icon-pills icon-bell-alt"></span>
                                <span class="badge">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="popover" data-trigger="focus" data-placement="auto" title="Nachrichten" data-content="Ein Kollege hat dich zu einer Sammlung freigeschaltet.">
                                <span class="sc-icon-pills icon-mail-alt"></span>
                                <span class="badge">25</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="popover" data-trigger="focus" data-placement="auto" title="Einstellungen" data-content="Morgen wird für eine Stunde die Mediathek nicht erreichbar sein.">
                                <span class="sc-icon-pills icon-user-cog-solid"></span>
                                <span class="badge">2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-3 col-md-4">
                <div id="usernav" class="dropdown dd-right">
                    <button type="button" class="btn dropdown-lime dropdown-toggle" data-toggle="dropdown">
                        <i class="logo sc-icon-dd fas fa-user-circle"></i>
                        <span class="dd-label">Lisa-Marie von Bobrutzki</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lime dropdown-menu-wide">
                        <a class="dropdown-item" href="profiledit.php"><i class="sc-icon-dd fas fa-user-edit"></i>
                                <span>mein Profil</span></a>
                        <a class="dropdown-item" href="benutzerverwaltung.php"><i class="sc-icon-dd fas fa-users"></i>
                                <span>Benutzerverwaltung</span></a>
                        <a class="dropdown-item" href="#"><i class="sc-icon-dd fas fa-power-off"></i>
                                <span>Abmelden</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown-menu-full" id="topnav-mobile">
            <div class="dropdown-menu dropdown-menu-lime">
                <a class="dropdown-item" href="index.php">
                    <i class="sc-icon-dd icon-schulcampus"></i>
                    <span>Startseite</span>
                </a>
                <a class="dropdown-item" href="workspace.php">
                    <i class="sc-icon-dd icon-folder-open"></i>
                    <span>meine Dateien</span>
                </a>
                <a class="dropdown-item" href="https://lernenonline.bildung-rp.de/">
                    <i class="sc-icon-dd icon-graduation-cap"></i>
                    <span>moodle@RLP</span>
                </a>
                <a class="dropdown-item" href="https://schul.campus-rlp.de/edu-sharing/components/workspace">
                    <i class="sc-icon-dd icon-play-circled"></i>
                    <span>Mediathek</span>
                </a>
                <a class="dropdown-item" href="https://curriculum.bildung-rp.de/v0.9.3.17/curriculum/public/index.php?action=login">
                    <i class="sc-icon-dd icon-bank"></i>
                    <span>curriculum</span>
                </a>
                <a class="dropdown-item" href="">
                    <i class="sc-icon-dd icon-book-1"></i>
                    <span>Lehr- und Rahmenpläne</span>
                </a>
                <a class="dropdown-item" href="infoportal.php">
                    <i class="sc-icon-dd icon-info-circled"></i>
                    <span>Infoportal</span>
                </a>
            </div>
        </div>

        <div class="dropdown-menu-full" id="usernav-mobile">
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lime">
                <a class="dropdown-item" href="profiledit.php"><i class="sc-icon-dd fas fa-user-edit"></i>
                                <span>mein Profil</span></a>
                <a class="dropdown-item" href="benutzerverwaltung.php"><i class="sc-icon-dd fas fa-users"></i>
                                <span>Benutzerverwaltung</span></a>
                <a class="dropdown-item" href="#"><i class="sc-icon-dd fas fa-power-off"></i>
                                <span>Abmelden</span></a>
            </div>
        </div>
    </header>



        <div id="content">
