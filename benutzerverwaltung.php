<?php include "header.php"; ?>
<div class="container-fluid" id="maintabs">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#idm" data-toggle="tab">
                IDM
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#orga" data-toggle="tab">
                ORGA
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#moodle" data-toggle="tab">
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
                    <div class="card-body">
                        <a href="#">Übersicht</a>
                    </div>
                    <div class="card-body">
                        <a href="#">Anlegen</a>
                    </div>
                    <div class="card-body active">
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
                                        <select title="Gruppen" class="selectpicker" multiple>
                                                <option>Klasse 5d</option>
                                                <option>Schule A</option>
                                                <option>Naturwissenschaft AG</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <select title="Rollen" class="selectpicker" multiple>
                                                <option value="1">Admin</option>
                                                <option value="2">Lehrkraft</option>
                                                <option value="3">Schüler</option>
                                                <option value="4">BNV</option>
                                                <option value="5">Unterrichtsideen</option>
                                                <option value="6">Web-Werkzeuge</option>
                                                <option value="7">...Sonstiges</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <select title="Status" class="selectpicker">
                                            <option value="1">aktiv</option>
                                            <option value="2">inaktiv</option>
                                            <option value="3">gesperrt</option>
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="selectAll">
                                        <input type="checkbox" id="selectAll" name="f100" value="">
                                        <label for="f100">
                                            <div class="checkbox"></div>
                                        </label>
                                    </div>
                                </th>
                                <th>Name
                                    <i class="sc-icon icon-down-dir" style="display:none"></i>
                                </th>
                                <th>Vorname
                                    <i class="sc-icon icon-down-dir" style="display:none"></i>
                                </th>
                                <th>Benutzername
                                    <i class="sc-icon icon-down-dir"></i>
                                </th>
                                <th>Email
                                    <i class="sc-icon icon-down-dir" style="display:none"></i>
                                </th>
                                <th>Erstellt
                                    <i class="sc-icon icon-down-dir" style="display:none"></i>
                                </th>
                                <th class="text-center" style="width: 80px;">Status</th>
                                <th class="text-right">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f1" name="f1" value="">
                                        <label for="f1"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">John</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Doe</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">bf634</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">john@example.com</a>
                                    </td>
                                    <td>16.07.2018</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f2" name="f2" value="">
                                        <label for="f2"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Mary</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Moe</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">mamo</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">mary@example.com</a>
                                    </td>
                                    <td>11.07.2018</td>
                                    <td class="sc-icon icon-circle status status-yellow text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                        <div class="status-change">
                            <i class="sc-icon icon-circle status status-red"></i>
                            <i class="sc-icon icon-circle status status-yellow"></i>
                            <i class="sc-icon icon-circle status status-green"></i>
                        </div>
                    </table>
                    <div class="markaction">
                        <button type="submit" class="btn btn-blue btn-password">Passwort zurücksetzen</button>
                        <button type="submit" class="btn btn-unlock">Freischalten</button>
                        <button type="submit" class="btn btn-reject">Ablehnen</button>
                        <button type="submit" class="btn btn-lock">Sperren</button>
                        <button type="submit" class="btn btn-delete">Löschen</button>
                    </div>
                    <form>
<div class="sbsms">
    <h4>Gruppen</h4>
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
<div class="sbsms">
    <h4>Rollen</h4>
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
                    </form>
                    <nav aria-label="page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link sc-icon icon-angle-double-left" href="#" tabindex="-1"></a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link sc-icon icon-angle-left" href="#"></a>
                            </li>
                            <li class="page-item disabled active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">10</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link sc-icon icon-angle-right" href="#"></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link sc-icon icon-angle-double-right" href="#"></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="result-counter">
                    <span class="result-text">Zeige&nbsp;</span>
                    <select class="result-select">
                        <option value="1">50</option>
                        <option value="2">100</option>
                        <option value="3">250</option>
                        <option value="3">500</option>
                    </select>
                    <span class="result-text">Einträge pro Seite.</span>
                    </div>
                </div>

                <div class="tab-pane" id="orga">
                    <h1 class="mb-15">Orga-Tab</h1>
                </div>

                <div class="tab-pane" id="moodle">
                    <h1 class="mb-15">Moodle-Tab</h1>
                    <button type="button" class="btn btn-blue m-2" data-toggle="modal" data-target="#exampleModal">
                        modal: lange Fehlermeldung
                    </button>
                    <button type="button" class="btn btn-blue m-2" data-toggle="modal" data-target="#exampleModal2">
                        modal: kurze Fehlermeldung
                    </button>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-error">
                            <div class="modal-header modal-header-error">
                                <div class="modal-title" id="exampleModalLabel">Fehlerbenachrichtigung</div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="sc-icon model-close-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="modal-body modal-body-error">
                                Hier ist ein Fehler aufgetreten!
                            </div>
                            <div class="modal-footer modal-footer-error">
                                <button type="button" class="btn btn-sm btn-error">Details</button>
                                <button type="button" class="btn btn-sm btn-error" data-dismiss="modal">Schließen</button>
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
                                <button type="button" class="close" data-dismiss="modal" aria-label="Schließen">
                                    <span aria-hidden="true" class="sc-icon model-close-icon"></span>
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