<?php include "header.php"; ?>

<div class="container-fluid" id="maintabs">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#idm" data-toggle="tab">IDM
                <span></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#moodle" data-toggle="tab">MOODLE
                <span></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#orga" data-toggle="tab">CAMPUS_CLOUD
                <span></span>
            </a>
        </li>
    </ul>
</div>

<main class="space" id="main">

    <div class="sidebar" id="sidebar">

        <div class="accordion">

            <div class="card">
                <div class="card-header" id="s1">

                    <button class="btn btn-link dropdown-toggle special" data-toggle="collapse" data-target="#cs1" aria-expanded="true" aria-controls="cs1">
                        <i class="sc-icon icon-user"></i>
                        <span>Benutzer</span>
                    </button>

                </div>
                <div id="cs1" class="collapse show" aria-labelledby="s1" data-parent="#accordion1">
                    <div class="card-body">
                        <a href="#">Übersicht</a>
                    </div>
                    <div class="card-body">
                        <a href="#">Anlegen</a>
                    </div>
                    <div class="card-body active">
                        <a href="#">OrgWechsel</a>
                    </div>
                    <div class="card-body">
                        <a href="#">Importieren</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="s2">

                    <button class="btn btn-link dropdown-toggle special" data-toggle="collapse" data-target="#cs2" aria-expanded="true" aria-controls="cs2">
                        <i class="sc-icon icon-user-friends-solid"></i>
                        <span>Gruppen</span>
                    </button>

                </div>
                <div id="cs2" class="collapse show" aria-labelledby="s2" data-parent="#accordion1">
                    <div class="card-body">
                        <a href="#">Übersicht</a>
                    </div>
                    <div class="card-body">
                        <a href="#">Anlegen</a>
                    </div>
                    <div class="card-body">
                        <a href="#">Verwalten</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="s3">

                    <button class="btn btn-link dropdown-toggle special" data-toggle="collapse" data-target="#cs3" aria-expanded="true" aria-controls="cs3">
                        <i class="sc-icon icon-flag"></i>
                        <span>Rollen</span>
                    </button>

                </div>
                <div id="cs3" class="collapse show" aria-labelledby="s3" data-parent="#accordion1">
                    <div class="card-body">
                        <a href="#">Übersicht</a>
                    </div>
                    <div class="card-body">
                        <a href="#">Anlegen</a>
                    </div>
                    <div class="card-body">
                        <a href="#">Exportieren</a>
                    </div>
                    <div class="card-body">
                        <a href="#">Importieren</a>
                    </div>
                    <div class="card-body">
                        <a href="#">Verwalten</a>
                    </div>
                </div>
            </div>


        </div>


    </div>


    <div class="btn-sidebar">
        <button type="button" class="btn">
            <i class="sc-icon icon-grip-lines-vertical-solid"></i>
            <i class="sc-icon icon-menu"></i>
        </button>
    </div>



    <div class="main-content" id="main-content">

        <div class="pagesearch" id="tabsearch">
            <div class="accordion small">
                <div class="card card-blue">
                    <div class="card-header card-header-blue" id="v1">
                        <div class="pagesearch-field">

                            <div class="input-group">
                                <input class="form-control border-right-0" type="search" value="" id="" placeholder="Suchbegriff">
                                <span class="input-group-append">
                                    <button class="btn btn-search border-left-0" type="button">
                                        <i class="sc-icon icon-search"></i>
                                    </button>
                                </span>
                            </div>

                            <button class="btn btn-link btn-link-blue dropdown-toggle" data-toggle="collapse" data-target="#c1" aria-expanded="true"
                                aria-controls="c1">
                                Erweiterte Suche
                            </button>
                        </div>
                    </div>
                    <div id="c1" class="collapse" aria-labelledby="v1">
                        <div class="card-body pagesearch-filter">

                            <form>
                                <div class="form-row">
                                    <div class="col-auto">

                                        <select class="selectpicker">
                                            <optgroup label="Gruppe">
                                                <option value="1">Klasse 5d</option>
                                                <option value="2">Schule A</option>
                                                <option value="3">Naturwissenschaft</option>
                                            </optgroup>
                                        </select>

                                    </div>
                                    <div class="col-auto">


                                        <select class="selectpicker">
                                            <optgroup label="Rolle">
                                                <option value="1">Admin</option>
                                                <option value="2">Lehrkraft</option>
                                                <option value="3">Schüler</option>
                                                <option value="4">BNV</option>
                                                <option value="5">Unterrichtsideen</option>
                                                <option value="6">Web-Werkzeuge</option>
                                                <option value="7">...Sonstiges</option>
                                            </optgroup>
                                        </select>

                                    </div>
                                    <div class="col-auto">


                                        <select class="selectpicker">
                                            <option>Status</option>
                                            <option value="1">Mathematik</option>
                                            <option value="2">Deutsch</option>
                                            <option value="3">Chemie</option>
                                        </select>

                                    </div>
                            </form>

                            <button type="submit" class="btn btn-blue btn-submit">Suchen</button>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="idm">


                    <h1 class="mb-15">Benutzerprofil bearbeiten</h1>

                    <h2>Allgemein</h2>

                    <form class="">

                        <div class="form-group d-flex">
                            <div class="col-lg-12">
                                <div class="form-wrapper mb-15">
                                    <label for="name" class="col-lg-2">Vorname</label>
                                    <input type="text" class="form-control col-lg-4 col-md-8 col-10" id="name" placeholder="Vorname" value="">
                                    <a class="col-1 sc-icon icon-question-circle-regular" data-toggle="tooltip" data-placement="top" data-html="true" title="Vorname"
                                        data-content="Vorname"></a>
                                </div>

                                <div class="form-wrapper mb-15">
                                    <label for="lastname" class="col-lg-2">Nachname</label>
                                    <input type="text" class="form-control col-lg-4 col-md-8 col-10" id="lastname" placeholder="Nachname" value="">
                                    <a class="col-1 sc-icon icon-question-circle-regular" href="#" data-toggle="popover" data-trigger="focus" data-placement="auto"
                                        title="Infos" data-content="Nachname."></a>
                                </div>

                                <div class="form-wrapper mb-15">
                                    <label for="email" class="col-lg-2">E-Mail</label>
                                    <input type="text" class="form-control col-lg-4 col-md-8 col-10" id="email" placeholder="E-Mail" value="">
                                    <a class="col-1 sc-icon icon-question-circle-regular" href="#" data-toggle="popover" data-trigger="focus" data-placement="auto"
                                        title="Infos" data-content="E-Mail Adresse"></a>
                                </div>

                                <div class="form-wrapper mb-15">
                                    <label for="profil" class="col-lg-2">Profilbild</label>
                                    <button type="submit" class="btn btn-blue btn-change">Ändern</button>
                                </div>
                            

                            </div>

                                <div class="profil-image">
                                    <img class="round" src="Images/cur1.png" alt="Bsp" width="200" height="200">
                                    <!-- <i class="sc-icon icon-user"></i> -->
                                </div>
                            

                        </div>



                        <h2>Mitgliedschaften</h2>

                        <div class="form-group d-flex">
                            <div class="col-lg-12">

                                <div class="form-wrapper mb-15">
                                    <label for="group" class="col-lg-2">Gruppe</label>
                                    <div class="col-lg-3">
                                        
                                            <h4>Ausgewählte Objekte</h4>
                                        
                                            <ul class="auswahlbox">
                                                <li class="auswahlobjekt">
                                                    Schulleitung        
                                                </li>
                                            </ul>

                                    </div>
                                    
                                        <div class="iconnav">
                                            <button class="btn"><i class="sc-icon icon-angle-double-up"></i></button>
                                            <button class="btn"><i class="sc-icon icon-up-dir"></i></button>
                                            <button class="btn"><i class="sc-icon icon-down-dir"></i></button>
                                            <button class="btn"><i class="sc-icon icon-angle-double-down"></i></button>
                                            <button class="btn"><i class="sc-icon icon-cancel"></i></button>
                                        </div>
                                    
                                    <div class="col-lg-3">
                                        <h4>Verfügbare Objekte</h4>
                                        
                                            <ul class="auswahlbox">
                                                <li class="auswahlobjekt">
                                                    Schülerzeitung        
                                                </li>
                                                <li class="auswahlobjekt">
                                                    Sekretariat        
                                                </li>
                                                <li class="auswahlobjekt">
                                                    5a (2015/16)        
                                                </li>
                                                <li class="auswahlobjekt">
                                                    6a (2015/16)         
                                                </li>
                                                <li class="auswahlobjekt">
                                                    7a (2015/16)        
                                                </li>
                                                <li class="auswahlobjekt">
                                                    8a (2015/16)         
                                                </li>
                                                <li class="auswahlobjekt">
                                                    9d (2015/16)        
                                                </li>
                                            </ul>    
                                    
                                    </div>
                                    <div class="iconset">
                                            <button class="btn"><i class="sc-icon icon-pencil"></i></button>
                                            <button class="btn"><i class="sc-icon icon-plus"></i></button>
                                            <button class="btn"><i class="sc-icon icon-list-alt"></i></button>
                                    </div>
                                </div>

                                <div class="form-wrapper mb-15">
                                    <label for="lastname" class="col-lg-2">Rolle/ Berechtigung</label>
                                    <div class="col-lg-3">
                                        
                                            <h4>Ausgewählte Objekte</h4>
                                        
                                            <ul class="auswahlbox">
                                                <li class="auswahlobjekt">
                                                    Lehrkraft        
                                                </li>
                                            </ul>

                                    </div>
                                    
                                        <div class="iconnav">
                                            <button class="btn"><i class="sc-icon icon-angle-double-up"></i></button>
                                            <button class="btn"><i class="sc-icon icon-up-dir"></i></button>
                                            <button class="btn"><i class="sc-icon icon-down-dir"></i></button>
                                            <button class="btn"><i class="sc-icon icon-angle-double-down"></i></button>
                                            <button class="btn"><i class="sc-icon icon-cancel"></i></button>
                                        </div>
                                    
                                    <div class="col-lg-3">
                                        <h4>Verfügbare Objekte</h4>
                                        
                                            <ul class="auswahlbox">
                                                <li class="auswahlobjekt">
                                                    Schüler/ in        
                                                </li>
                                                <li class="auswahlobjekt">
                                                    an Schule Beteiligte       
                                                </li>
                                            </ul>    
                                    
                                    </div>
                                    <div class="iconset">
                                            
                                    </div>
                                </div>

                                <div class="form-wrapper mb-15">
                                    <label for="email" class="col-lg-2">Personalnummer</label>
                                    <input type="text" class="form-control col-lg-4 col-md-8 col-10" id="email" placeholder="Personalnummer" value="">
                                    <a class="col-1 sc-icon icon-question-circle-regular" href="#" data-toggle="popover" data-trigger="focus" data-placement="auto"
                                        title="Infos" data-content="E-Mail Adresse"></a>
                                </div>

                                <div class="form-wrapper mb-15">
                                    <label for="lastname" class="col-lg-2">Stammorganisation</label>
                                    <span>RS+ Testort Testschule</span>
                                </div>

                                <div class="form-wrapper mb-15">
                                    <label for="status" class="col-lg-2">Status</label>
                                    <div class="checks">
                                        <input type="checkbox" id="f1" name="f1" value="">
                                            <label for="f1">Der Benutzer besitzt ein 2.Staatsexamen für das Lehramt (Lehrer in RLP)</label>
                                        
                                        <input type="checkbox" id="f2" name="f2" value="">
                                            <label for="f2">Der Benutzer ist tatsächlich in meiner Organisation beschäftigt (validiert)</label>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <h2>Account</h2>

                        <div class="form-group d-flex">
                            <div class="col-lg-12">

                                <div class="form-wrapper mb-15">
                                    <label for="name" class="col-lg-2">Benutzerkennung</label>
                                    <input type="text" class="form-control col-lg-4 col-md-8 col-10" id="name" placeholder="Nutzerkennung" value="">

                                </div>

                                <div class="form-wrapper mb-15">
                                    <label for="inputPassword2" class="col-lg-2">Passwort</label>
                                    <input type="password" class="form-control col-lg-4 col-md-8 col-10" id="inputPassword2" placeholder="Passwort">
                                    <a class="col-1 sc-icon icon-question-circle-regular" href="#" data-toggle="popover" data-trigger="focus" data-placement="auto"
                                        title="efos" data-content="Das Passwort sollte 8 Zeichen enthalten"></a>
                                </div>

                                <div class="form-wrapper mb-15">
                                    <label for="inputPassword2" class="col-lg-2">Passwort (Bestätigung)</label>
                                    <input type="password" class="form-control col-lg-4 col-md-8 col-10" id="inputPassword2" placeholder="Passwort">
                                </div>

                                

                                <div class="form-wrapper mb-15">
                                    <label for="status" class="col-lg-2"></label>
                                    <div class="checks">
                                        <input type="checkbox" id="f1" name="f1" value="">
                                            <label for="f1">Der Benutzer besitzt ein 2.Staatsexamen für das Lehramt (Lehrer in RLP)</label>
                                        
                                        <input type="checkbox" id="f2" name="f2" value="">
                                            <label for="f2">Der Benutzer ist tatsächlich in meiner Organisation beschäftigt (validiert)</label>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-9">
                            <button type="submit" class="btn btn-blue btn-save ml-15">Speichern</button>
                        </div>




                    </form>












                </div>

                <div class="tab-pane" id="moodle">moodle</div>

                <div class="tab-pane" id="orga">



                    <button type="button" class="btn btn-blue m-2" data-toggle="modal" data-target="#exampleModal">
                        lange Fehlermeldung
                    </button>
                    <button type="button" class="btn btn-blue m-2" data-toggle="modal" data-target="#exampleModal2">
                        kurze Fehlermeldung
                    </button>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-error">
                            <div class="modal-header modal-header-error">
                                <div class="modal-title" id="exampleModalLabel">Fehlerbenachrichtigung</div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body modal-body-error">
                                Hier ist ein Fehler aufgetreten!
                            </div>
                            <div class="modal-footer modal-footer-error">
                                <button type="button" class="btn btn-sm btn-error" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm btn-error">Link</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-error">
                            <div class="modal-header modal-header-error">
                                <div class="modal-title" id="exampleModalLabel">Fehlerbenachrichtigung
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>





            </div>

        </div>




    </div>





</main>

<?php include "footer.php"; ?>