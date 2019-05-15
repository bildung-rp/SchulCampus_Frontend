<?php include "header.php"; ?>


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
                    <a href="#news2">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolor</a>
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
    <div class="container">
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
                            <h2>Meine Dateien</h2>

                            <div class="accordion small">

                                <div class="card">
                                    <div class="card-header" id="s1">

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cs1" aria-expanded="true" aria-controls="cs1">
                                            
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

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cs2" aria-expanded="true" aria-controls="cs2">
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

                                        <button class="btn btn-link sc-icon collapsed" data-toggle="collapse" data-target="#cs3" aria-expanded="true" aria-controls="cs3">
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
                            <h2>Curriculum</h2>
                            <dl>
                                <a href="">
                                    <dt>
                                        <h4>Instanz wählen</h4>
                                    </dt>
                                    <dd>Klasse 8a</dd>
                                </a>

                            </dl>
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

            <div class="box-content-full" id="bc1">

                <div id="blue1">
                    <h2>Meine Dateien</h2>
                    <dl>
                        <a href="">
                            <dt>
                                <h4>Konrad Adenauer Gymnasium Westerburg</h4>
                            </dt>
                            <dd>Klasse 7e</dd>
                        </a>
                        <a href="">
                            <dt>
                                <h4>Mathematik</h4>
                            </dt>
                            <dd>Klasse 8a</dd>
                        </a>
                        <a href="">
                            <dt>
                                <h4>NaWi</h4>
                            </dt>
                            <dd>Klasse 5d</dd>
                        </a>

                    </dl>
                </div>
                <div id="blue2"></div>
                <div id="blue3">
                    <h2>Moodle</h2>
                    <dl>
                        <a href="">
                            <dt>
                                <h4>Lernpfad Mathematik</h4>
                            </dt>
                            <dd>Klasse 8a</dd>
                        </a>
                        <a href="">
                            <dt>
                                <h4>Lernpfad NaWi</h4>
                            </dt>
                            <dd>Klasse 5d</dd>
                        </a>
                        <a href="">
                            <dt>
                                <h4>Lernpfad NaWi</h4>
                            </dt>
                            <dd>Klasse 5f</dd>
                        </a>
                    </dl>
                </div>
                <div class="arrowblue"></div>

            </div>

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
                            <h2>Moodle</h2>
                            <dl>
                                <a href="">
                                    <dt>
                                        <h4>Lernpfad Mathematik</h4>
                                    </dt>
                                    <dd>Klasse 8a</dd>
                                </a>
                                <a href="">
                                    <dt>
                                        <h4>Lernpfad NaWi</h4>
                                    </dt>
                                    <dd>Klasse 5d</dd>
                                </a>
                                <a href="">
                                    <dt>
                                        <h4>Lernpfad NaWi</h4>
                                    </dt>
                                    <dd>Klasse 5f</dd>
                                </a>
                            </dl>
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
                        <a href="Infoportal.html">Infoportal</a>
                    </div>
                </section>
            </div>
            <div class="box-content-full" id="bc2">

                <div id="blue4">
                    <h2>Curriculum</h2>
                    <dl>
                        <a href="">
                            <dt>
                                <h4>Instanz wählen</h4>
                            </dt>
                            <dd>Klasse 8a</dd>
                        </a>

                    </dl>
                </div>
                <div id="blue5"></div>
                <div id="blue6"></div>

                <div class="arrowblue"></div>
            </div>

        </div>
    </div>
</main>

<?php include "footer.php"; ?>