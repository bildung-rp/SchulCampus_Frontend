<?php include "header.php"; ?>

        <div class="container-fluid" id="maintabs">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#idm" data-toggle="tab">IDM
                        <span> Benutzerverwaltung</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#moodle" data-toggle="tab">MOODLE
                        <span> Benutzerverwaltung</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#orga" data-toggle="tab">ORGA
                        <span> Benutzerverwaltung</span>
                    </a>
                </li>
            </ul>
        </div>

        <main class="space" id="main">

            <div class="sidebar" id="sidebar">

                <div class="accordion">

                    <div class="card">
                        <div class="card-header" id="s1">

                            <button class="btn btn-link dropdown-toggle" data-toggle="collapse" data-target="#cs1" aria-expanded="true" aria-controls="cs1">
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

                            <button class="btn btn-link dropdown-toggle" data-toggle="collapse" data-target="#cs2" aria-expanded="true" aria-controls="cs2">
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

                            <button class="btn btn-link dropdown-toggle" data-toggle="collapse" data-target="#cs3" aria-expanded="true" aria-controls="cs3">
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
                                <div class="card-body">
                                    <div class="pagesearch-filter">
                                        <div class="dropdown">
                                            <button type="button" class="btn dropdown-blue btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <span>Gruppe wählen</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-blue">

                                                <a class="dropdown-item " href="# ">Klasse</a>
                                                <a class="dropdown-item " href="# ">Kurs</a>
                                                <a class="dropdown-item " href="# ">Gruppe</a>
                                                <a class="dropdown-item " href="# ">Organisation</a>
                                                <a class="dropdown-item " href="# ">Arbeitsgemeinschaft</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn dropdown-blue btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <span>Rolle wählen</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-blue">
                                                <a class="dropdown-item " href="# ">OrganisationsAdmin</a>
                                                <a class="dropdown-item " href="# ">Schulleitung</a>
                                                <a class="dropdown-item " href="# ">Lehrkraft</a>
                                                <a class="dropdown-item " href="# ">Schüler</a>
                                                <a class="dropdown-item " href="# ">Sonstige Personen</a>
                                                <a class="dropdown-item " href="# ">SuperAdmin</a>
                                                <a class="dropdown-item " href="# ">ServiceAdmin</a>
                                                <a class="dropdown-item " href="# ">ContentManager</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn dropdown-blue btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <span>Stutus wählen</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-blue">

                                                <a class="dropdown-item" href="#">aktiv</a>
                                                <a class="dropdown-item" href="#">pausiert</a>
                                                <a class="dropdown-item" href="#">inaktiv</a>

                                            </div>
                                        </div>
                                    </div>
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
                                    <th>Name</th>
                                    <th>Vorname</th>
                                    <th>Benutzername</th>
                                    <th>Email</th>
                                    <th>Erstellt</th>
                                    <th>Gruppe</th>
                                    <th>Rolle</th>
                                    <th>Status</th>
                                    <th>Aktion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="f1" name="f1" value="">
                                            <label for="f1"></label>
                                        </td>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>bf634</td>
                                        <td>john@example.com</td>
                                        <td>16.07.2018</td>
                                        <td>Klasse 7d</td>
                                        <td>Lehrkraft</td>
                                        <td class="sc-icon icon-circle status status-green"></td>
                                        <td>
                                            <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                            <a class="sc-icon icon-ellipsis" href=" " title="action"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="f2" name="f2" value="">
                                            <label for="f2"></label>
                                        </td>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                        <td></td>
                                        <td>mary@example.com</td>
                                        <td>11.07.2018</td>
                                        <td>Klasse 7e</td>
                                        <td>Lehrkraft</td>
                                        <td class="sc-icon icon-circle status"></td>
                                        <td>
                                            <a class="sc-icon icon-pencil" href=" " title="action"></a>
                                            <a class="sc-icon icon-ellipsis" href=" " title="action"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="f3" name="f3" value="">
                                            <label for="f3"></label>
                                        </td>
                                        <td>Klaus</td>
                                        <td>BlaBla</td>
                                        <td>ghtt785</td>
                                        <td>juhghdy@example.com</td>
                                        <td>11.08.2018</td>
                                        <td>Klasse 7e</td>
                                        <td>Lehrkraft</td>
                                        <td class="sc-icon icon-circle status"></td>
                                        <td>
                                            <a class="icon-pencil" href=" " title="action"></a>
                                            <a class="icon-ellipsis" href=" " title="action"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="f4" name="f4" value="">
                                            <label for="f4"></label>
                                        </td>
                                        <td>Klaus</td>
                                        <td>BlaBla</td>
                                        <td>ghtt785</td>
                                        <td>juhghdy@example.com</td>
                                        <td>11.08.2018</td>
                                        <td>Klasse 7e</td>
                                        <td>Lehrkraft</td>
                                        <td class="sc-icon icon-circle status"></td>
                                        <td>
                                            <a class="icon-pencil" href=" " title="action"></a>
                                            <a class="icon-ellipsis" href=" " title="action"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="f5" name="f5" value="">
                                            <label for="f5"></label>
                                        </td>
                                        <td>Mustermann</td>
                                        <td>Max</td>
                                        <td>maxmuster1</td>
                                        <td>maxmuster@muster.de</td>
                                        <td>10.02.2019</td>
                                        <td>Klasse 5e</td>
                                        <td>Schüler</td>
                                        <td class="sc-icon icon-circle status"></td>
                                        <td>
                                            <a class="icon-pencil" href=" " title="action"></a>
                                            <a class="icon-ellipsis" href=" " title="action"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="f6" name="f6" value="">
                                            <label for="f6"></label>
                                        </td>
                                        <td>Mustermann</td>
                                        <td>Max</td>
                                        <td>maxmuster1</td>
                                        <td>maxmuster@muster.de</td>
                                        <td>10.02.2019</td>
                                        <td>Klasse 5e</td>
                                        <td>Schüler</td>
                                        <td class="sc-icon icon-circle status"></td>
                                        <td>
                                            <a class="icon-pencil" href=" " title="action"></a>
                                            <a class="icon-ellipsis" href=" " title="action"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="f7" name="f7" value="">
                                            <label for="f7"></label>
                                        </td>
                                        <td>Mustermann</td>
                                        <td>Max</td>
                                        <td>maxmuster1</td>
                                        <td>maxmuster@muster.de</td>
                                        <td>10.02.2019</td>
                                        <td>Klasse 5e</td>
                                        <td>Schüler</td>
                                        <td class="sc-icon icon-circle status status-yellow"></td>
                                        <td>
                                            <a class="icon-pencil" href=" " title="action"></a>
                                            <a class="icon-ellipsis" href=" " title="action"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="f8" name="f8" value="">
                                            <label for="f8"></label>
                                        </td>
                                        <td>Mustermann</td>
                                        <td>Max</td>
                                        <td>maxmuster1</td>
                                        <td>maxmuster@muster.de</td>
                                        <td>10.02.2019</td>
                                        <td>Klasse 5e</td>
                                        <td>Schüler</td>
                                        <td class="sc-icon icon-circle status"></td>
                                        <td>
                                            <a class="icon-pencil" href=" " title="action"></a>
                                            <a class="icon-ellipsis" href=" " title="action"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="f9" name="f9" value="">
                                            <label for="f9"></label>
                                        </td>
                                        <td>Mustermann</td>
                                        <td>Max</td>
                                        <td>maxmuster1</td>
                                        <td>maxmuster@muster.de</td>
                                        <td>10.02.2019</td>
                                        <td>Klasse 5e</td>
                                        <td>Schüler</td>
                                        <td class="sc-icon icon-circle status status-red"></td>
                                        <td>
                                            <a class="icon-pencil" href=" " title="action"></a>
                                            <a class="icon-ellipsis" href=" " title="action"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="f10" name="f10" value="">
                                            <label for="f10"></label>
                                        </td>
                                        <td>Mustermann</td>
                                        <td>Max</td>
                                        <td>maxmuster1</td>
                                        <td>maxmuster@muster.de</td>
                                        <td>10.02.2019</td>
                                        <td>Klasse 5e</td>
                                        <td>Schüler</td>
                                        <td class="sc-icon icon-circle status"></td>
                                        <td>
                                            <a class="icon-pencil" href=" " title="action"></a>
                                            <a class="icon-ellipsis" href=" " title="action"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="f11" name="f11" value="">
                                            <label for="f11"></label>
                                        </td>
                                        <td>Mustermann</td>
                                        <td>Max</td>
                                        <td>maxmuster1</td>
                                        <td>maxmuster@muster.de</td>
                                        <td>10.02.2019</td>
                                        <td>Klasse 5e</td>
                                        <td>Schüler</td>
                                        <td class="sc-icon icon-circle status"></td>
                                        <td>
                                            <a class="icon-pencil" href=" " title="action"></a>
                                            <a class="icon-ellipsis" href=" " title="action"></a>
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

                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link sc-icon icon-angle-double-left" href="#" tabindex="-1"></a></li>
                                <li class="page-item disabled"><a class="page-link sc-icon icon-angle-left" href="#"></a></li>
                                <li class="page-item disabled active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">10</a></li>
                                <li class="page-item"><a class="page-link sc-icon icon-angle-right" href="#"></a></li>
                                <li class="page-item"><a class="page-link sc-icon icon-angle-double-right" href="#"></a></li>
                            </ul>
                        </nav>


                    </div>

                    <div class="tab-pane" id="moodle">moodle</div>

                    <div class="tab-pane" id="orga">

                        <h1 class="mb-15">Benutzer anlegen</h1>

                        <h2>Allgemein</h2>

                        <form class="">
                        
                            <div class="form-group d-flex">
                                <div class="col-md-7">
                                    <div class="form-wrapper mb-15">
                                        <label for="name" class="col-md-4">Vorname</label>
                                        <input type="text" class="form-control col-md-7" id="name" placeholder="Vorname" value="">
                                        <i class="col-md-1 sc-icon icon-help-circled"></i>
                                    </div>
                                
                                    <div class="form-wrapper mb-15">
                                        <label for="lastname" class="col-md-4">Nachname</label>
                                        <input type="text" class="form-control col-md-7" id="lastname" placeholder="Nachname" value="">
                                        <i class="col-md-1 sc-icon icon-help-circled"></i>
                                    </div>
                                
                                    <div class="form-wrapper mb-15">
                                        <label for="email" class="col-md-4">E-Mail</label>
                                        <input type="text" class="form-control col-md-7" id="email" placeholder="E-Mail" value="">
                                        <i class="col-md-1 sc-icon icon-help-circled"></i>
                                    </div>
                                </div>

                                <div class="profil-image">
                                    <img src="Images/cur1.png" class="round" alt="Bsp" width="200" height="200">
                                </div>


                            </div>

                            <h2>Mitgliedschaften</h2>

                            <div class="form-group d-flex">
                                <div class="col-md-7">

                                </div>
                            </div>


                            <h2>Account</h2>

                            <div class="form-group d-flex">   
                                <div class="col-md-7">

                                    <div class="form-wrapper mb-15">
                                        <label for="name" class="col-md-4">Benutzerkennung</label>
                                        <input type="text" class="form-control col-md-7" id="name" placeholder="Nutzerkennung" value="">
                                        
                                    </div>

                                    <div class="form-wrapper mb-15">
                                        <label for="inputPassword2" class="col-md-4">Passwort</label>
                                        <input type="password" class="form-control col-md-7" id="inputPassword2" placeholder="Password">
                                        <i class="col-md-1 sc-icon icon-help-circled"></i>
                                    </div>
                                
                                    <button type="submit" class="btn btn-blue ml-15">Bestätigen</button>
                                </div>
                            </div>
                            

                            
                            
                        </form>

                    </div>

                </div>

                


            </div>

        </main>

<?php include "footer.php"; ?>