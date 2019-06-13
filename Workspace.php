<?php include "header.php"; ?>

        <div class="container-fluid mt-30" id="subheader">
            
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Mediathek</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Mein Workspace</li>
            </ol>
            
        </div>


        <div class="container-fluid pagesearch" id="pagesearch">
            <div class="accordion small">
                <div class="card card-blue">
                    <div class="card-header card-header-blue" id="v1">
                        <div class="pagesearch-field">

                            <div class="input-group">
                                <input class="form-control" type="search" value="" id="" placeholder="Suchbegriff">
                                <span class="input-group-append">
                                    <button class="btn btn-search" type="button">
                                        <i class="sc-icon icon-search"></i>
                                    </button>
                                </span>
                            </div>

                            <button class="btn btn-link btn-link-blue dropdown-toggle collapsed" data-toggle="collapse" data-target="#c1" aria-expanded="true"
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
                                        
                                            <select class="custom-select" id="inlineForm1">
                                                <option selected>Fach wählen</option>
                                                <option value="1">Mathematik</option>
                                                <option value="2">Naturwissenschaft</option>
                                                <option value="3">Deutsch</option>
                                            </select>
                                    </div>
                                    <div class="col-auto">
                                        
                                            <select class="custom-select" id="inlineForm2">
                                                <option selected>Klassenstufe wählen</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                    </div>
                                    <div class="col-auto">
                                        
                                            <select class="custom-select" id="inlineForm3">
                                                <option selected>Schulart wählen</option>
                                                <option value="1">Realschule</option>
                                                <option value="2">Grundschule</option>
                                                <option value="3">Gymnasium</option>
                                                <option value="3">Oberstufe</option>
                                            </select>
                                    </div>
                                    <div class="col-auto">
                                        
                                            <select class="custom-select" id="inlineForm4">
                                                <option selected>Themengebiet wählen</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                    </div>
                                    <div class="col-auto">
                                        
                                            <select class="custom-select" id="inlineForm5">
                                                <option selected>Sammlung wählen</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                    </div>
                                    <div class="col-auto">
                                        
                                            <select class="custom-select" id="inlineForm6">
                                                <option selected>Medium wählen</option>
                                                <option value="1">Arbeitsblatt</option>
                                                <option value="2">Film</option>
                                                <option value="3">Textdokument</option>
                                            </select>
                                    </div>
                                </form>

                     

                                <button type="submit" class="btn btn-blue">Suchen</button>

                        </div>
                    </div>
                </div>
            </div>
    </div></div>

        <div class="container-fluid" id="maintabs">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#all" data-toggle="tab">ALLE
                        <span> </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ccontent" data-toggle="tab">CAMPUS-CONTENT
                        <span> </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mediacontent" data-toggle="tab">MEDIATHEK
                        <span> </span>
                    </a>
                </li>
            </ul>
        </div>

        <main class="space" id="main">

            <div class="sidebar" id="sidebar">

                <div class="new">
                    <button type="button" class="btn">
                        <i class="sc-icon icon-plus"></i>
                        <span>Neu</span>
                    </button>
                </div>


                <div class="accordion">

                    <div class="card">
                        <div class="card-header" id="s1">

                            <button class="btn btn-link dropdown-toggle special" data-toggle="collapse" data-target="#cs1" aria-expanded="true" aria-controls="cs1">
                                <i class="sc-icon icon-user"></i>
                                <span>Meine Inhalte</span>
                            </button>

                        </div>
                        <div id="cs1" class="collapse show" aria-labelledby="s1" data-parent="#accordion1">
                            <div class="card-body">
                                <a href="#">Bilder</a>
                            </div>
                            <div class="card-body">
                                <a href="#">Dokumente</a>
                            </div>
                            <div class="card-body active">
                                <a href="#">SavedSearch</a>
                            </div>
                            
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="s2">

                            <button class="btn btn-link dropdown-toggle special" data-toggle="collapse" data-target="#cs2" aria-expanded="true" aria-controls="cs2">
                                <i class="sc-icon icon-user-friends-solid"></i>
                                <span>Gemeinsame Inhalte</span>
                            </button>

                        </div>
                        <div id="cs2" class="collapse show" aria-labelledby="s2" data-parent="#accordion1">
                            <div class="card-body">
                                <a href="#">Schule</a>
                            </div>
                            <div class="card-body">
                                <a href="#">Klasse 7</a>
                            </div>
                            
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="s3">

                            <button class="btn btn-link dropdown-toggle special" data-toggle="collapse" data-target="#cs3" aria-expanded="true" aria-controls="cs3">
                                <i class="sc-icon icon-share"></i>
                                <span>Von mir freigegeben</span>
                            </button>

                        </div>
                        <div id="cs3" class="collapse show" aria-labelledby="s3" data-parent="#accordion1">
                            <div class="card-body">
                                <a href="#">Biologie: Säugetiere</a>
                            </div>
                            <div class="card-body">
                                <a href="#">Mathematik: Lineare Gleichungen</a>
                            </div>
                            <div class="card-body">
                                
                                
                                <div class="card">
                                    <div class="card-header" id="s20">
            
                                        <button class="btn btn-link dropdown-toggle special collapsed" data-toggle="collapse" data-target="#cs20" aria-expanded="false" aria-controls="cs20">
                                            Naturwissenschaft: Kl 5
                                        </button>
            
                                    </div>
                                    <div id="cs20" class="collapse" aria-labelledby="s20" data-parent="#accordion1">
                                        <div class="card-body">
                                            <a href="#">Stoffe im Alltag</a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#">Bewegung zu Wasser, zu Lande und in der Luft</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                
                            </div>
                            
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="s4">

                            <button class="btn btn-link dropdown-toggle special" data-toggle="collapse" data-target="#cs4" aria-expanded="true" aria-controls="cs4">
                                <i class="sc-icon icon-paper-plane"></i>
                                <span>Für mich freigegeben</span>
                            </button>

                        </div>
                        <div id="cs4" class="collapse show" aria-labelledby="s4" data-parent="#accordion1">
                            <div class="card-body">
                                <a href="#">Englisch: Vertetungsunterricht</a>
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
                    <div class="tab-pane active" id="all">
                    
                        <div class="readingtext">
                        <h1>Lesbarer Text</h1>
                        <p class="gross">Das World Wide Web [ˌwɜːldˌwaɪdˈwɛb] (Audio-Datei / Hörbeispiel Anhören?/i) (englisch für „weltweites Netz“, kurz Web, WWW, selten und vor allem in der Anfangszeit und den USA auch W3) ist ein über das Internet abrufbares System von elektronischen Hypertext-Dokumenten, sogenannten Webseiten, welche mit HTML beschrieben werden. Sie sind durch Hyperlinks untereinander verknüpft und werden im Internet über die Protokolle HTTP oder HTTPS übertragen. Die Webseiten enthalten meist Texte, oft mit Bildern und grafischen Elementen illustriert. Häufig sind auch Videos, Tondokumente oder Musikstücke eingebettet. </p>
                        </div>

                    </div>

                    <div class="tab-pane" id="ccontent">
                        <div class="grid-wrapper">
                            <div class="grid-text">
                                Sammlungen (179)
                            </div>
                            <div class="row grid-header">
                                    <div class="grid-item item-header">1</div>
                                    <div class="grid-item item-header">2</div>
                                    <div class="grid-item item-header">3</div>
                                    <div class="grid-item item-header">4</div>
                                    <div class="grid-item item-header">5</div>
                                    <div class="grid-item item-header">6</div>
                                    <div class="grid-item item-header">7</div>
                                    <div class="grid-item item-header">8</div>
                                    <div class="grid-item item-header">9</div>
                                    
                            </div>
                            <div class="grid-text">
                                Materialien (6792)
                            </div>
                            <div class="row grid-view">
                                    <div class="grid-item">1</div>
                                    <div class="grid-item">2</div>
                                    <div class="grid-item">3</div>
                                    <div class="grid-item">4</div>
                                    <div class="grid-item">5</div>
                                    <div class="grid-item">6</div>
                                    <div class="grid-item">7</div>
                                    <div class="grid-item">8</div>
                                    <div class="grid-item">9</div>
                                    <div class="grid-item">10</div>
                                    <div class="grid-item">11</div>
                                    <div class="grid-item">12</div>
                                    <div class="grid-item">13</div>
                                    <div class="grid-item">14</div>
                                    <div class="grid-item">15</div>
                                    <div class="grid-item">16</div>
                            </div>    
                            
                        </div>
                    </div>

                    <div class="tab-pane" id="mediacontent">
                        
                    </div>

                </div>

            </div>

        </main>

<?php include "footer.php"; ?>