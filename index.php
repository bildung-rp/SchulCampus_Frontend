<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include "header.php"; 
?>


<div class="container" id="teaser">

    <h3 class="teaser-head">Aktuelles</h3>

    <div id="teaser-carousel" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#teaser-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#teaser-carousel" data-slide-to="1"></li>
            <li data-target="#teaser-carousel" data-slide-to="2"></li>
        </ul>

        <div class="row carousel-inner">
            <section class="col-lg-4 active">

                <h4>20.01.2019</h4>
                <h2>
                    <a href="#news1">Fortbildungen in Mathematik und Deutsch</a>
                </h2>

            </section>
            <section class="col-lg-4">

                <h4>11.10.2018</h4>
                <h2>
                    <a href="#news2">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt
                        ut labore et dolor</a>
                </h2>
            </section>
            <section class="col-lg-4">

                <h4>02.10.2018</h4>
                <h2>
                    <a href="#news3">Wartungsarbeiten bei moodle</a>
                </h2>

            </section>
        </div>
        <a class="carousel-control-prev" href="#teaser-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon carousel-control-prev-icon-news"></span>
        </a>
        <a class="carousel-control-next" href="#teaser-carousel" data-slide="next">
            <span class="carousel-control-next-icon carousel-control-next-icon-news"></span>
        </a>
    </div>
</div>


<main>
    <div class="container" id="container-blue">
        <div class="bluebox">

            <div class="col-4">
                <section id="meineDateien">
                    <div class="bluebox-lg">
                        <span class="icon-folder-open blue-icon-lg"></span>
                    </div>
                    <div class="bluebox-label">
                        <a href="">Meine Dateien</a>
                        <button class="btn btn-blue" type="button">
                            <span class="sc-icon icon-plus"></span>
                        </button>
                        <div class="box-content">
                            <div class="accordion small">

                                <div class="card">
                                    <div class="card-header" id="s1">

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse"
                                            data-target="#cs1" aria-expanded="true" aria-controls="cs1">

                                            <h4>Konrad Adenauer Gymnasium Westerburg</h4>
                                        </button>

                                    </div>
                                    <div id="cs1" class="collapse" aria-labelledby="s1" data-parent="#accordion1">
                                        <div class="card-body">
                                            <a href="#">Klasse 7e</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="s2">

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse"
                                            data-target="#cs2" aria-expanded="true" aria-controls="cs2">
                                            <h4>Mathematik</h4>
                                        </button>

                                    </div>
                                    <div id="cs2" class="collapse" aria-labelledby="s2" data-parent="#accordion1">
                                        <div class="card-body">
                                            <a href="#">Klasse 8</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="s3">

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse"
                                            data-target="#cs3" aria-expanded="true" aria-controls="cs3">
                                            <h4>Naturwissenschaft</h4>
                                        </button>

                                    </div>
                                    <div id="cs3" class="collapse" aria-labelledby="s3" data-parent="#accordion1">
                                        <div class="card-body">
                                            <a href="#">Klasse 5e</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-4">
                <section id="curriculum">
                    <div class="bluebox-lg">
                        <span class="icon-bank blue-icon-lg"></span>
                    </div>
                    <div class="bluebox-label">
                        <a href="Curriculum.html">Curriculum</a>
                        <button class="btn btn-blue" type="button">
                            <span class="sc-icon icon-plus"></span>
                        </button>
                        <div class="box-content">
                            
                            <div class="accordion small">

                                <div class="card">
                                    <div class="card-header" id="t1">

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse"
                                            data-target="#ct1" aria-expanded="true" aria-controls="ct1">

                                            <h4>Instanz wählen</h4>
                                        </button>

                                    </div>
                                    <div id="ct1" class="collapse" aria-labelledby="t1" data-parent="#accordion1">
                                        <div class="card-body">
                                            <a href="#">Klasse 7e</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="t2">

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse"
                                            data-target="#ct2" aria-expanded="true" aria-controls="ct2">
                                            <h4>Mathematik</h4>
                                        </button>

                                    </div>
                                    <div id="ct2" class="collapse" aria-labelledby="t2" data-parent="#accordion1">
                                        <div class="card-body">
                                            <a href="#">Klasse 8</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="t3">

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse"
                                            data-target="#ct3" aria-expanded="true" aria-controls="ct3">
                                            <h4>Naturwissenschaft</h4>
                                        </button>

                                    </div>
                                    <div id="ct3" class="collapse" aria-labelledby="t3" data-parent="#accordion1">
                                        <div class="card-body">
                                            <a href="#">Klasse 5e</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </section>
            </div>

            <div class="col-4">
                <section id="media">
                    <div class="bluebox-lg">
                        <span class="icon-play-circled blue-icon-lg"></span>
                    </div>
                    <div class="bluebox-label">
                        <a href="https://schul.campus-rlp.de/edu-sharing/components/workspace">Mediathek</a>
                    </div>
                </section>
            </div>


<!--erst Zeile "blaue Kacheln" im mobilen Menü-->
            <div class="box-content-full" id="bc1">

                <div class="box-content" id="blue1">
                    

                    <div class="accordion">

                        <div class="card">
                            <div class="card-header" id="u1" style="border-top:none;">

                                <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cu1"
                                    aria-expanded="true" aria-controls="cu1">

                                    <h4>Konrad Adenauer Gymnasium Westerburg</h4>
                                </button>

                            </div>
                            <div id="cu1" class="collapse" aria-labelledby="u1" data-parent="#accordion1">
                                <div class="card-body">
                                    <a href="#">Klasse 7e</a>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="u2">

                                <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cu2"
                                    aria-expanded="true" aria-controls="cu2">
                                    <h4>Mathematik</h4>
                                </button>

                            </div>
                            <div id="cu2" class="collapse" aria-labelledby="u2" data-parent="#accordion1">
                                <div class="card-body">
                                    <a href="#">Klasse 8</a>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="u3">

                                <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cu3"
                                    aria-expanded="true" aria-controls="cu3">
                                    <h4>Naturwissenschaft</h4>
                                </button>

                            </div>
                            <div id="cu3" class="collapse" aria-labelledby="u3" data-parent="#accordion1">
                                <div class="card-body">
                                    <a href="#">Klasse 5e</a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="box-content" id="blue2"></div>
                <div class="box-content" id="blue3">
                    

                    <div class="accordion">

                        <div class="card">
                            <div class="card-header" id="v1" style="border-top:none;">

                                <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cv1"
                                    aria-expanded="true" aria-controls="cv1">

                                    <h4>Deutsch 6f</h4>
                                </button>

                            </div>
                            <div id="cv1" class="collapse" aria-labelledby="v1" data-parent="#accordion1">
                                <div class="card-body">
                                    <a href="#">Klasse 7e</a>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="v2">

                                <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cv2"
                                    aria-expanded="true" aria-controls="cv2">
                                    <h4>Mathematik</h4>
                                </button>

                            </div>
                            <div id="cv2" class="collapse" aria-labelledby="v2" data-parent="#accordion1">
                                <div class="card-body">
                                    <a href="#">Klasse 8</a>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="v3">

                                <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cv3"
                                    aria-expanded="true" aria-controls="cv3">
                                    <h4>Naturwissenschaft</h4>
                                </button>

                            </div>
                            <div id="cv3" class="collapse" aria-labelledby="v3" data-parent="#accordion1">
                                <div class="card-body">
                                    <a href="#">Klasse 5e</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrowblue"></div>
            </div>
<!--Ende erste Zeile "blaue Kacheln" im mobilen Menü-->


            <div class="col-4">
                <section id="lehrplaene">
                    <div class="bluebox-lg">
                        <span class="icon-book-1 blue-icon-lg"></span>
                    </div>
                    <div class="bluebox-label">
                        <a href="">Lehr- &amp;
                            <br>Arbeitspläne
                            <h4>Digital</h4>
                        </a>
                    </div>
                </section>
            </div>

            <div class="col-4">
                <section id="moodle">
                    <div class="bluebox-lg">
                        <span class="icon-graduation-cap blue-icon-lg"></span>
                    </div>
                    <div class="bluebox-label">
                        <a href="Moodle.html">moodle@RLP</a>
                        <button class="btn btn-blue" type="button">
                            <span class="sc-icon icon-plus"></span>
                        </button>
                        <div class="box-content">
                            
                            <div class="accordion small">

                                <div class="card">
                                    <div class="card-header" id="w1">

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse"
                                            data-target="#cw1" aria-expanded="true" aria-controls="cw1">

                                            <h4>Deutsch</h4>
                                        </button>

                                    </div>
                                    <div id="cw1" class="collapse" aria-labelledby="w1" data-parent="#accordion1">
                                        <div class="card-body">
                                            <a href="#">Klasse 7e</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="w2">

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse"
                                            data-target="#cw2" aria-expanded="true" aria-controls="cw2">
                                            <h4>Mathematik</h4>
                                        </button>

                                    </div>
                                    <div id="cw2" class="collapse" aria-labelledby="w2" data-parent="#accordion1">
                                        <div class="card-body">
                                            <a href="#">Klasse 8</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="w3">

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse"
                                            data-target="#cw3" aria-expanded="true" aria-controls="cw3">
                                            <h4>Naturwissenschaft</h4>
                                        </button>

                                    </div>
                                    <div id="cw3" class="collapse" aria-labelledby="w3" data-parent="#accordion1">
                                        <div class="card-body">
                                            <a href="#">Klasse 5e</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </section>
            </div>
            <div class="col-4">
                <section id="infoportal">
                    <div class="bluebox-lg">
                        <span class="icon-info-circled blue-icon-lg"></span>
                    </div>
                    <div class="bluebox-label">
                        <a href="Infoportal.php">Infoportal</a>
                    </div>
                </section>
            </div>


<!--Beginn zweite Zeile "blaue Kacheln" im mobilen Menü-->
            <div class="box-content-full" id="bc2">

                <div class="box-content" id="blue4">
                    

                    <div class="accordion">

                        <div class="card">
                            <div class="card-header" id="x1" style="border-top:none;">

                                <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cx1"
                                    aria-expanded="true" aria-controls="cx1">

                                    <h4>Geschichte</h4>
                                </button>

                            </div>
                            <div id="cs1" class="collapse" aria-labelledby="x1" data-parent="#accordion1">
                                <div class="card-body">
                                    <a href="#">Klasse 7e</a>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="x2">

                                <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cx2"
                                    aria-expanded="true" aria-controls="cx2">
                                    <h4>Mathematik</h4>
                                </button>

                            </div>
                            <div id="cx2" class="collapse" aria-labelledby="x2" data-parent="#accordion1">
                                <div class="card-body">
                                    <a href="#">Klasse 8</a>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="x3">

                                <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cx3"
                                    aria-expanded="true" aria-controls="cx3">
                                    <h4>Naturwissenschaft</h4>
                                </button>

                            </div>
                            <div id="cx3" class="collapse" aria-labelledby="x3" data-parent="#accordion1">
                                <div class="card-body">
                                    <a href="#">Klasse 5e</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="box-content" id="blue5"></div>
                <div class="box-content" id="blue6"></div>

                <div class="arrowblue"></div>
            </div>
<!--Ende zweite Zeile "blaue Kacheln" im mobilen Menü-->


        </div>
    </div>
</main>

<?php include "footer.php"; ?>