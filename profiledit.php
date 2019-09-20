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

        <div class="tab-content">
            <div class="tab-pane active" id="idm" style="padding-top: 0">

                <h1 class="mb-15">Benutzerprofil bearbeiten</h1>
                <form class="">
                    <h2>Allgemein</h2>

                    <div class="form-group d-flex">
                        <div class="col-lg-12">
                            <div class="form-wrapper mb-15">
                                <label for="name" class="col-lg-2">Vorname</label>
                                <input type="text" class="form-control col-lg-6 col-md-8 col-10" id="name" placeholder="Vorname" value="">
                                <a class="col-1 sc-icon icon-question-circle-regular" data-toggle="tooltip" data-placement="top" data-html="true" title="Vorname"></a>
                            </div>

                            <div class="form-wrapper mb-15">
                                <label for="lastname" class="col-lg-2">Nachname</label>
                                <input type="text" class="form-control col-lg-6 col-md-8 col-10" id="lastname" placeholder="Nachname" value="">
                                <a class="col-1 sc-icon icon-question-circle-regular" data-toggle="tooltip" data-placement="top" data-html="true" title="Nachname"></a>
                            </div>

                            <div class="form-wrapper mb-15">
                                <label for="email" class="col-lg-2">E-Mail</label>
                                <input type="text" class="form-control col-lg-6 col-md-8 col-10" id="email" placeholder="E-Mail" value="">
                                <a class="col-1 sc-icon icon-question-circle-regular" data-toggle="tooltip" data-placement="top" data-html="true" title="Email"></a>
                            </div>




                        </div>

                        <div class="profil-image">
                            <img class="round" src="Images/cur1.png" alt="Bsp" width="180" height="180">
                            <!-- <i class="sc-icon icon-user"></i> -->
                            <div class="img-edit">
                                <i class="sc-icon icon-pencil"></i>
                                <i class="sc-icon icon-trash"></i>
                            </div>
                        </div>

                    </div>


                    <h2>Mitgliedschaften</h2>


                    <div class="form-group">

                        <div class="form-wrapper mb-15">
                            <label for="lastname" class="col-lg-2 pl-15">Gruppe</label>
                            <div class="col-lg-3">

                                <h4>Ausgewählte Objekte</h4>

                                <ul class="auswahlbox">
                                    <li class="auswahlobjekt">
                                        Schulleitung
                                    </li>
                                </ul>

                            </div>

                            <div class="iconnav">
                                    <button class="btn" style="border: none">
                                        <i class="sc-icon icon-actions-move-to-top"></i>
                                    </button>
                                    <button class="btn">
                                        <i class="sc-icon icon-up-dir"></i>
                                    </button>
                                    <button class="btn">
                                        <i class="sc-icon icon-down-dir"></i>
                                    </button>
                                    <button class="btn">
                                        <i class="sc-icon icon-actions-move-to-bottom"></i>
                                    </button>
                                    <button class="btn">
                                        <i class="sc-icon icon-trash"></i>
                                    </button>
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
                                <button class="btn">
                                    <i class="sc-icon icon-pencil"></i>
                                </button>
                                <button class="btn">
                                    <i class="sc-icon icon-plus"></i>
                                </button>
                                <button class="btn">
                                    <i class="sc-icon icon-list-alt"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-wrapper mb-15">
                            <label for="lastname" class="col-lg-2 pl-15">Rolle/ Berechtigung</label>
                            <div class="col-lg-3">

                                <h4>Ausgewählte Objekte</h4>

                                <ul class="auswahlbox">
                                    <li class="auswahlobjekt">
                                        Lehrkraft
                                    </li>
                                </ul>

                            </div>

                            <div class="iconnav">
                                    <button class="btn" style="border: none">
                                        <i class="sc-icon icon-actions-move-to-top"></i>
                                    </button>
                                    <button class="btn">
                                        <i class="sc-icon icon-up-dir"></i>
                                    </button>
                                    <button class="btn">
                                        <i class="sc-icon icon-down-dir"></i>
                                    </button>
                                    <button class="btn">
                                        <i class="sc-icon icon-actions-move-to-bottom"></i>
                                    </button>
                                    <button class="btn">
                                        <i class="sc-icon icon-trash"></i>
                                    </button>
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
                            <label for="email" class="col-lg-2 pl-15">Personalnummer</label>
                            <input type="text" class="form-control col-lg-4 col-md-8 col-10" id="email" placeholder="Personalnummer" value="">
                            <a class="col-1 sc-icon icon-question-circle-regular" data-toggle="tooltip" data-placement="top" data-html="true" title="Personalnummer"></a>
                        </div>

                        <div class="form-wrapper mb-15">
                            <label for="lastname" class="col-lg-2 pl-15">Stammorganisation</label>
                            <span>RS+ Testort Testschule</span>
                        </div>

                        <div class="form-wrapper mb-15">
                            <label for="status" class="col-lg-2 pl-15">Status</label>
                            <div class="checks">
                                <input type="checkbox" id="f1" name="f1" value="">
                                <label for="f1">&nbsp;Der Benutzer besitzt ein 2.Staatsexamen für das Lehramt (Lehrer in RLP)</label>

                                <input type="checkbox" id="f2" name="f2" value="">
                                <label for="f2">&nbsp;Der Benutzer ist tatsächlich in meiner Organisation beschäftigt (validiert)</label>
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
                                <a class="col-1 sc-icon icon-question-circle-regular" data-toggle="tooltip" data-placement="top" data-html="true" title="Passwort"></a>
                            </div>

                            <div class="form-wrapper mb-15">
                                <label for="inputPassword2" class="col-lg-2">Passwort (Bestätigung)</label>
                                <input type="password" class="form-control col-lg-4 col-md-8 col-10" id="inputPassword2" placeholder="Passwort">
                            </div>



                            <div class="form-wrapper mb-15">
                                <label for="status" class="col-lg-2"></label>
                                <div class="checks">
                                    <input type="checkbox" id="f1" name="f1" value="">
                                    <label for="f1">&nbsp;Der Benutzer besitzt ein 2.Staatsexamen für das Lehramt (Lehrer in RLP)</label>

                                    <input type="checkbox" id="f2" name="f2" value="">
                                    <label for="f2">&nbsp;Der Benutzer ist tatsächlich in meiner Organisation beschäftigt (validiert)</label>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-9">
                        <button type="submit" class="btn btn-blue btn-save">Speichern</button>
                    </div>


            

            </form>

        </div>
    </div>
    </div>

</main>

<?php include "footer.php"; ?>