
<?php include "header.php"; ?>


        <div id="subheader">
            <div class="container-fluid">
                <div class="logo">
                    <span class="ss-icon video-icon"></span>
                    <span class="logo-label">
                        Infoportal
                    </span>
                </div>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Infoportal</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Bedienung</li>
                </ol>
            </div>
        </div>


       <div class="container-fluid pagesearch" id="pagesearch">
            <div class="accordion">
                <div class="card card-blue small">
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
                            <div id="filter">


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
            </div>
    </div></div> 



        <main class="container-fluid" id="main">
            <div>
                <p style="margin-top: 30px;">Hallo, ich bin das Infoportal!</p>
            </div>
        </main>

<?php include "footer.php"; ?>