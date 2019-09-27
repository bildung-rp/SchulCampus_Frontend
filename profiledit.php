<?php include "header.php"; ?>

<div class="container-fluid" id="maintabs">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#idm" data-toggle="tab">
                IDM
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#moodle" data-toggle="tab">
                ORGA
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#orga" data-toggle="tab">
                MOODLE
            </a>
        </li>
    </ul>
</div>

<main class="space" id="main">

    <div class="sidebar" id="sidebar">

        <div class="accordion sticky-top">

            <div class="card">
                <div class="card-header" id="s1">

                    <button class="btn btn-link dropdown-toggle special" data-toggle="collapse" data-target="#cs1" aria-expanded="true" aria-controls="cs1">
                        <i class="sc-icon icon-user"></i>
                        <span>Benutzer</span>
                    </button>

                </div>
                <div id="cs1" class="collapse show" aria-labelledby="s1" data-parent="#accordion1">
                    <div class="card-body active">
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

                <h1 class="mb-15">Benutzerdaten bearbeiten</h1>
                <form>

                    <div id="profil">
                        <h2>Allgemein</h2>
                        <div class="no-gutters">
                                <div class="form-group row no-gutters">
                                    <label for="lastname" class="col-sm-2">Nachname</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lastname" placeholder="Nachname" value="von Boblonski">
                                    </div>
                                    <div class="col-sm-2 profil-image text-center">
                                        <img class="round" src="images/persona.png" alt="Bsp">
                                        <div class="img-edit">
                                            <i class="sc-icon icon-pencil"></i>
                                            <i class="sc-icon icon-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row no-gutters">
                                    <label for="firstname" class="col-sm-2">Vorname</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control is-valid" id="firstname" placeholder="Vorname" value="   Lisa-Marie">
                                    </div>
                                </div>
                                <div class="form-group row no-gutters">
                                    <label for="email" class="col-sm-2">E-Mail</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control is-invalid" id="email" placeholder="E-Mail" value="">
                                        <div class="invalid-feedback">Bitte geben Sie eine E-Mail-Adresse an.</div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div id="memberships">
                        <h2>Mitgliedschaften</h2>
                        <div class="row no-gutters">
                            <div class="col-2">
                                <h4>Gruppen</h4>
                            </div>
                            <div class="col-10">
                                <div class="sbsms">
                                    <div class="form-wizards-wrap form-wizards-aside">
                                        <div class="form-wizards-element">
                                            <div class="form-multigroup-wrap">
                                                <div class="form-multigroup-item form-multigroup-element">
                                                    <label>Ausgewählte Objekte</label>
                                                    <div class="form-wizards-wrap form-wizards-aside">
                                                        <div class="form-wizards-element">
                                                            <ul class="form-control">
                                                                <li>Lehrerzimmer</li>
                                                                <li>FK Deutsch</li>
                                                                <li>FK evang. Religion</li>
                                                                <li>7b (2019/20)</li>
                                                                <li>11d2 (2019/20)</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-multigroup-item form-multigroup-element">
                                                    <label>Verfügbare Objekte</label>
                                                    <div class="form-multigroup-item-wizard">
                                                        <span class="input-group input-group-sm">
                                                            <span class="input-group-addon">
                                                                <span class="fa fa-filter"></span>
                                                            </span>
                                                            <input class="form-control" value="">
                                                        </span>
                                                    </div>
                                                    <ul class="form-control right">
                                                        <li>5a (2019/20)</li>
                                                        <li>5b (2019/20)</li>
                                                        <li>6a (2019/20)</li>
                                                        <li>6b (2019/20)</li>
                                                        <li>7a (2019/20)</li>
                                                        <li>8a (2019/20)</li>
                                                        <li>8b (2019/20)</li>
                                                        <li>9a (2019/20)</li>
                                                        <li>9b (2019/20)</li>
                                                        <li>10a (2019/20)</li>
                                                        <li>10b (2019/20)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-2">
                                <h4>Rollen</h4>
                            </div>
                            <div class="col-10">
                                <div class="sbsms">
                                    <div class="form-wizards-wrap form-wizards-aside">
                                        <div class="form-wizards-element">
                                            <div class="form-multigroup-wrap">
                                                <div class="form-multigroup-item form-multigroup-element">
                                                    <label>Ausgewählte Objekte</label>
                                                    <div class="form-wizards-wrap form-wizards-aside">
                                                        <div class="form-wizards-element">
                                                            <ul class="form-control">
                                                                <li>Lehrkraft</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-multigroup-item form-multigroup-element">
                                                    <label>Verfügbare Objekte</label>
                                                    <div class="form-multigroup-item-wizard">
                                                        <span class="input-group input-group-sm">
                                                            <span class="input-group-addon">
                                                                <span class="fa fa-filter"></span>
                                                            </span>
                                                            <input class="form-control" value="">
                                                        </span>
                                                    </div>
                                                    <ul class="form-control right">
                                                        <li>Schüler/in</li>
                                                        <li>an Schule Beteiligte</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row no-gutters">
                            <label for="persnumber" class="col-sm-2">Personalnummer</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="persnumber" placeholder="Personalnummer" value="00873526">
                            </div>
                            <a class="col-1 sc-icon icon-question-circle-regular" data-toggle="tooltip" data-placement="top" data-html="true" title="IPEMA-Personalnummer"></a>
                        </div>

                        <div class="form-group row no-gutters">
                            <label for="primaryorg" class="col-sm-2">Stammorganisation</label>
                            <div class="col-sm-8">
                                <select class="selectpicker" id="primaryorg">
                                    <option selected>GY Mainz Rabanus-Maurus</option>
                                    <option>GY Mainz Willigis</option>
                                </select>
                            </div>
                            <a class="col-1 sc-icon icon-question-circle-regular" data-toggle="tooltip" data-placement="top" data-html="true" title="IPEMA-Personalnummer"></a>
                        </div>

                    </div>

                    <div class="form-group d-flex">
                        <div class="col-lg-12">
                            <div class="form-wrapper mb-15">
                                <label for="status" class="col-lg-2"></label>
                                <div class="checks">
                                    <input type="checkbox" id="f1" name="f1" value="" checked>
                                    <label for="f1">&nbsp;Der Benutzer besitzt ein 2.Staatsexamen für das Lehramt (Lehrer in RLP)</label>

                                    <input type="checkbox" id="f2" name="f2" value="">
                                    <label for="f2">&nbsp;Der Benutzer ist tatsächlich in meiner Organisation beschäftigt (validiert)</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Anmeldedaten</h2>

                    <div class="form-group d-flex">
                        <div class="col-lg-12">
                            <div class="form-wrapper mb-15">
                                <label for="account" class="col-lg-2">Benutzerkennung</label>
                                <input type="text" class="form-control col-8" id="account" placeholder="Nutzerkennung" value="">
                            </div>

                            <div class="form-wrapper mb-15">
                                <label for="inputPassword1" class="col-lg-2">Passwort</label>
                                <input type="password" class="form-control col-8" id="inputPassword1" placeholder="Passwort">
                                <a class="col-1 sc-icon icon-question-circle-regular" data-toggle="tooltip" data-placement="top" data-html="true" title="Passwort, leer lassen für keine Änderung"></a>
                            </div>

                            <div class="form-wrapper mb-15">
                                <label for="inputPassword2" class="col-lg-2">Passwort (Bestätigung)</label>
                                <input type="password" class="form-control col-8" id="inputPassword2" placeholder="Passwort wiederholen">
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