<?php include('header.php'); ?>

<div class="grid-x grid-padding-x">

  <div class="medium-12 cell">
    <h2>Paleo Site</h2>
    <p>This is an example of a paleo site. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis consectetur quos dignissimos illum odio numquam ex cum, maiores! Quod qui expedita sunt, est praesentium culpa quibusdam adipisci repudiandae assumenda. Nemo!</p>
  </div>

  <div class="medium-8 cell">
    <img src="img/sitePic.jpg" alt="">
  </div>

  <div class="medium-4 cell">
    <!-- <img class="item-image" data-open="item1" src="https://via.placeholder.com/500?text=ITEM+IMAGE">
    <h3 data-open="item1">Arrowhead</h3>
    <p data-open="item1">Some brief descriptive text. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
    <div class="orbit" role="region" aria-label="Plimoth Slider" data-orbit data-use-m-u-i="false">
        <div class="orbit-wrapper">
          <div class="orbit-controls">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
          </div>
          <ul class="orbit-container">
            <li class="is-active orbit-slide">
              <figure class="orbit-figure">
                <h2><a href="item.php">Item Title 1</a></h2>
                <a href="item.php"><img src="img/arrowhead1.jpg"></a>
                <p class="lead">Item Description. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores expedita quisquam, obcaecati assumenda vel adipisci tempora autem quaerat quidem magni. <a href="item.php">Click to see 3D object&rarr;</a></p>
              </figure>
            </li>

            <li class="is-active orbit-slide">
              <figure class="orbit-figure">
                <h2><a href="item.php">Item Title 2</a></h2>
                <a href="item.php"><img src="https://via.placeholder.com/650x350?text=ITEM+IMAGE"></a>
                <p class="lead">Item Description. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores expedita quisquam, obcaecati assumenda vel adipisci tempora autem quaerat quidem magni. <a href="item.php">Click to see 3D object&rarr;</a></p>
              </figure>
            </li>

            <li class="is-active orbit-slide">
              <figure class="orbit-figure">
                <h2><a href="item.php">Item Title 3</a></h2>
                <a href="item.php"><img src="https://via.placeholder.com/650x350?text=ITEM+IMAGE"></a>
                <p class="lead">Item Description. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores expedita quisquam, obcaecati assumenda vel adipisci tempora autem quaerat quidem magni. <a href="item.php">Click to see 3D object&rarr;</a></p>
              </figure>
            </li>
          </ul>
        </div>
          <nav class="orbit-bullets">
            <button class="is-active" data-slide="0">
              <span class="show-for-sr">First slide details.</span>
              <span class="show-for-sr" data-slide-active-label>Current Slide</span>
            </button>
            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
          </nav>
        </div>

  </div>



    <!-- <div class="reveal" id="item1" data-reveal> -->
      
    <!-- </div> -->

</div>

<?php include('footer.php'); ?>