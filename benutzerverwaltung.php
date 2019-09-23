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
            <a class="nav-link" href="#orga" data-toggle="tab">ORGA
                <span></span>
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
                                        <select class="selectpicker" multiple>
                                                <option>Klasse 5d</option>
                                                <option>Schule A</option>
                                                <option>Naturwissenschaft AG</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <select class="selectpicker" multiple>
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
                                        <select class="selectpicker">
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
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f3" name="f3" value="">
                                        <label for="f3"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Roland</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Vervoorst</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">rvervoorst</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">roland.vervoorst@nirgendwo.de</a>
                                    </td>
                                    <td>12.12.2013</td>
                                    <td class="sc-icon icon-circle status status-red text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f4" name="f4" value="">
                                        <label for="f4"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Carsten</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Ritter</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">caritter</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">carsten.ritter@perfekt.de</a>
                                    </td>
                                    <td>21.09.2016</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f5" name="f5" value="">
                                        <label for="f5"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Monika</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Rösch</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">monikaroesch</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">monika.roesch@tralala.de</a>
                                    </td>
                                    <td>15.06.2017</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f6" name="f6" value="">
                                        <label for="f6"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Katja</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Picard</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">kapi79</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">katjapicard@yuhuu.de</a>
                                    </td>
                                    <td>21.08.2018</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f7" name="f7" value="">
                                        <label for="f7"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Axel</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Jindra</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">ajindra</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">axel.jindra@mailmail.de</a>
                                    </td>
                                    <td>15.05.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f8" name="f8" value="">
                                        <label for="f8"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Christian</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Mäncher</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">christian.maencher</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">christian.maencher@blubb.de</a>
                                    </td>
                                    <td>13.08.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f9" name="f9" value="">
                                        <label for="f9"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Andreas</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Stegmann</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">andistg</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">andistegmann1@bla.de</a>
                                    </td>
                                    <td>20.09.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f10" name="f10" value="">
                                        <label for="f10"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Arnold</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Aimionowane</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">aimionowane.arnold</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach1@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f11" name="f11" value="">
                                        <label for="f11"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Eren</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Alagöz</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">alagoez.eren</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach2@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f12" name="f12" value="">
                                        <label for="f12"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Yusuf Kerem</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Ay</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">ay.yusuf</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach3@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f13" name="f13" value="">
                                        <label for="f13"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Vanesa</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Borisova</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">borisova.vanesa</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach4@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f14" name="f14" value="">
                                        <label for="f14"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Edda-Linda</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Christopher</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">christopher.edda</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach5@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f15" name="f15" value="">
                                        <label for="f15"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Kerem</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Gül</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">guel.kerem</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach6@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f16" name="f16" value="">
                                        <label for="f16"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Felix</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Hammes</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">hammes.felix</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach7@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f17" name="f17" value="">
                                        <label for="f17"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Lennart</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Hampel</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">hampel.lennart</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach8@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f18" name="f18" value="">
                                        <label for="f18"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Mert</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Isik</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">isik.mert</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach9@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f19" name="f19" value="">
                                        <label for="f19"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Devin</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Jansson</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">jansson.devin</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach10@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f20" name="f20" value="">
                                        <label for="f20"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Mihriban</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Karahüseyin</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">karahueseyin.mihriban</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach11@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f21" name="f21" value="">
                                        <label for="f21"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Jan</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Karch</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">karch.jan</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach12@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f22" name="f22" value="">
                                        <label for="f22"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Kubilay</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Kavuk</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">kavuk.kubilay</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach13@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f23" name="f23" value="">
                                        <label for="f23"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Nagehan-Sena</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Kaya</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">kaya.nagehan</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach14@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f24" name="f24" value="">
                                        <label for="f24"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Güney-Ismail</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Kirkgöze</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">kirkgoeze.gueney</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach15@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f25" name="f25" value="">
                                        <label for="f25"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Max</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Knorr</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">knorr.max</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach16@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f26" name="f26" value="">
                                        <label for="f26"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Philipp</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Leusch</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">leusch.philipp</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach17@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f27" name="f27" value="">
                                        <label for="f27"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Thamira</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Möttingdörfer</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">moettingdoerfer.thamira</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach18@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f28" name="f28" value="">
                                        <label for="f28"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Dileesha</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Nadarajah</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">nadarajah.dileesha</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach19@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f29" name="f29" value="">
                                        <label for="f29"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Gia Huy</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Nguyen Huu</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">nguyen.huy</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach20@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f30" name="f30" value="">
                                        <label for="f30"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Jamila</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Richter</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">richter.jamila</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach21@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f31" name="f31" value="">
                                        <label for="f31"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Cihan Kadir</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Yavuz</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">yavuz.cihan</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">barlach22@ebr.de</a>
                                    </td>
                                    <td>09.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
                                    <td class="text-right">
                                        <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="f32" name="f32" value="">
                                        <label for="f32"></label>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Christian</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">Mäncher</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">maenchri76</a>
                                    </td>
                                    <td>
                                        <a href="profiledit.php">maencher@yahoo.de</a>
                                    </td>
                                    <td>25.10.2019</td>
                                    <td class="sc-icon icon-circle status status-green text-center"></td>
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
                                <li>7c (2019/20)</li>
                                <li>11d2 (2019/20)</li>
<!--                            <select size="5" class="form-control tceforms-multiselect" multiple="multiple">
                                <option value="40" title=".">Lehrerzimmer</option>
                                <option value="216" title=".">FK Deutsch</option>
                                <option value="329" title=".">FK evang. Religion</option>
                                <option value="338" title=".">7c (2019/20)</option>
                                <option value="297" title=".">11d2 (2019/20)</option>
                            </select> -->
                            </ul>
                        </div>
                        <div class="form-wizards-items">
                            <div class="btn-group-vertical">
                                <a href="#" class="btn btn-default" title="Ausgewählte Objekte zum Anfang verschieben">
                                    <span class="icon icon-size-small icon-state-default icon-actions-move-to-top">
                                        <span class="icon-markup">
                                            <img src="/images/actions-move-to-top.svg" width="16" height="16">
                                        </span>
                                    </span>
                                </a>
                                <a href="#" class="btn btn-default" title="Ausgewählte Objekte nach oben verschieben">
                                    <span class="icon icon-size-small icon-state-default icon-actions-move-up">
                                        <span class="icon-markup">
                                            <img src="/images/actions-move-up.svg" width="16" height="16">
                                        </span>
                                    </span>
                                </a>
                                <a href="#" class="btn btn-default" title="Ausgewählte Objekte nach unten verschieben">
                                    <span class="icon icon-size-small icon-state-default icon-actions-move-down">
                                        <span class="icon-markup">
                                            <img src="/images/actions-move-down.svg" width="16" height="16">
                                        </span>
                                    </span>
                                </a>
                                <a href="#" class="btn btn-default" title="Ausgewählte Objekte zum Ende verschieben">
                                    <span class="icon icon-size-small icon-state-default icon-actions-move-to-bottom">
                                        <span class="icon-markup">
                                            <img src="/images/actions-move-to-bottom.svg" width="16" height="16">
                                        </span>
                                    </span>
                                </a>
                                <a href="#" class="btn btn-default" title="Ausgewähltes Objekt löschen">
                                    <span class="icon icon-size-small icon-state-default icon-actions-selection-delete">
                                        <span class="icon-markup">
                                            <img src="/images/actions-selection-delete.svg" width="16" height="16">
                                        </span>
                                    </span>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="form-multigroup-item form-multigroup-element">
                    <label>Verfügbare Objekte</label>
                    <div class="form-multigroup-item-wizard"><span class="input-group input-group-sm">
                            <span class="input-group-addon">
                                <span class="fa fa-filter"></span>
                            </span>
                            <input class="form-control" value="">
                        </span></div>
                    <select class="form-control" size="5">
                        <option value="62" title=".anwalt">5a (2019/20)</option>
                        <option value="103" title=".bau">5b (2019/20)</option>
                        <option value="84" title=".beratung">6a (2019/20)</option>
                        <option value="40" title=".berufsbildendeschule" class="hidden" disabled="disabled">6b (2019/20)</option>
                        <option value="295" title=".berufsorientierung">7a (2019/20)</option>
                        <option value="302" title=".bildungsnetz">7b (2019/20)</option>
                        <option value="49" title=".bio">8a (2019/20)</option>
                        <option value="327" title=".biss">8b (2019/20)</option>
                        <option value="312" title=".bw-geschichte">9a (2019/20)</option>
                        <option value="220" title=".cct">9b (2019/20)</option>
                        <option value="116" title=".chemie">10a (2019/20)</option>
                        <option value="152" title=".comedison">10b</option>
                        <option value="57" title=".deu">11d1 (2019/20)</option>
                        <option value="51" title=".egs">12M1 (2019/20)</option>
                        <option value="163" title=".eltern">12m1 (2019/20)</option>
                        <option value="55" title=".engl">13e1 (2019/20)</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="form-wizards-items">
        <div class="btn-group btn-group-vertical">
            <a class="btn btn-default" href="#">
                <span alt="Benutzergruppe bearbeiten" title="Benutzergruppe bearbeiten">
                    <span class="icon icon-size-small icon-state-default icon-actions-open">
                        <span class="icon-markup">
                            <img src="/images/actions-open.svg" width="16" height="16">
                        </span>
                    </span>
                </span>
            </a>
            <a class="btn btn-default" href="#">
                <span alt="Neue Gruppe erstellen" title="Neue Gruppe erstellen">
                    <span class="icon icon-size-small icon-state-default icon-actions-add">
                        <span class="icon-markup">
                            <img src="/images/actions-add.svg" width="16" height="16">
                        </span>
                    </span>
                </span>
            </a>
            <a class="btn btn-default" href="#">
                <span alt="Gruppen anzeigen" title="Gruppen anzeigen">
                    <span class="icon icon-size-small icon-state-default icon-actions-system-list-open">
                        <span class="icon-markup">
                            <img src="/images/actions-system-list-open.svg" width="16" height="16">
                        </span>
                    </span>
                </span>
            </a>
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
                <div class="tab-pane" id="moodle">
                    moodle-Tab
                </div>

                <div class="tab-pane" id="orga">
                    <h1 class="mb-15">Orga-Tab</h1>
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
                                <button type="button" class="btn btn-sm btn-error" data-dismiss="modal">Deteils</button>
                                <button type="button" class="btn btn-sm btn-error">Schließen</button>
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