<?php include "header.php"; ?>

<?php include "infoportalnav.php"; ?>

<div class="container-fluid info-main mb-60">

    <main class="container" id="main">

        <div id="submenu1" class="card">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link active" id="1-tab" data-toggle="tab" role="tab" aria-selected="true" href="#ta1">Moodle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="2-tab" data-toggle="tab" role="tab" aria-selected="false" href="#ta2">Meine Dateien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="3-tab" data-toggle="tab" role="tab" aria-selected="false" href="#ta3">Mediathek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="4-tab" data-toggle="tab" role="tab" aria-selected="false" href="#ta4">Curriculum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="5-tab" data-toggle="tab" role="tab" aria-selected="false" href="#ta5">Lehr- und Arbeitspläne</a>
          </li>
        </ul>

      </div>

      <div class="tab-content" id="myTabContent">

        <div class="tab-pane show fade active" id="ta1" role="tabpanel" aria-labelledby="1-tab">
          <div class="card-body readingtext">
            <h5 class="card-title">Moodle</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
              dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
              clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
              sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
              voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
              sanctus est Lorem ipsum dolor sit amet.</p>

            <a class="more-link" href="http://localhost/typo3/index.php?id=30#">Weiterlesen</a>

            <nav class="nav card-navs">

              <a class="nav-link" href="#">News</a>
              <a class="nav-link" href="#">Hilfen</a>
              <a class="nav-link " href="#">Tutorials</a>
            </nav>

          </div>
        </div>
        <div class="tab-pane fade" id="ta2" role="tabpanel" aria-labelledby="2-tab">
          <div class="card-body readingtext">
            <h5 class="card-title">Meine Dateien</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

            <a class="more-link" href="#">Weiterlesen</a>

            <nav class="nav card-navs">

              <a class="nav-link" href="#">Link</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link " href="#">Link</a>
            </nav>

          </div>
        </div>
        <div class="tab-pane fade" id="ta3" role="tabpanel" aria-labelledby="3-tab">
          <div class="card-body readingtext">
            <h5 class="card-title">Mediathek</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            <a class="more-link" href="#">Weiterlesen</a>

            <nav class="nav card-navs">

              <a class="nav-link" href="#">Link</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link " href="#">Link</a>
            </nav>

          </div>
        </div>
        <div class="tab-pane fade" id="ta4" role="tabpanel" aria-labelledby="4-tab">
          <div class="card-body readingtext">
            <h5 class="card-title">Curriculum</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. With supporting
              text below as a natural lead-in to additional content.</p>

            <a class="more-link" href="#">Weiterlesen</a>

            <nav class="nav card-navs">
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link " href="#">Link</a>
            </nav>

          </div>
        </div>
        <div class="tab-pane fade" id="ta5" role="tabpanel" aria-labelledby="5-tab">
          <div class="card-body readingtext">
            <h5 class="card-title">Lehr- und Arbeitspläne</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

            <a class="more-link" href="#">Weiterlesen</a>

            <nav class="nav card-navs">

              <a class="nav-link" href="#">Link</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link " href="#">Link</a>
            </nav>

          </div>
        </div>


      </div>

    </div>
  </div>

</main>
</div>

<?php include "footer.php"; ?>