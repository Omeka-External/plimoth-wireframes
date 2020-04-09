<?php include('header.php'); ?>

<div class="grid-x grid-padding-x">

    <div class="medium-9 cell">
        <h2>Artifact Title: Could be Fairly Long at Times</h2>
        <img src="https://via.placeholder.com/1200x800?text=3D+ARTIFACT" alt="">

        <p>Longer description about the item and it's importance. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente minima quos eos. Quam commodi nesciunt odit? Suscipit, debitis non id. Pariatur, minima dicta repudiandae architecto illo ratione consectetur cum fugiat.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla expedita quaerat dicta iusto itaque repellat. Quidem libero temporibus nesciunt, tempora incidunt quibusdam labore quas suscipit sit dolorum aliquam, omnis inventore!</p>
        <h3>Metadata Title</h3>
        <p>Metadata Value</p>
        <h3>Metadata Title</h3>
        <p>Metadata Value</p>
        <h3>Metadata Title</h3>
        <p>Metadata Value</p>
        <h3>Metadata Title</h3>
        <p>Metadata Value</p>
    </div>

    <div class="medium-3 cell">
        <h3>Related Sets</h3>
        <p><a href="browse3.php">Item Set 1</a></p>
        <p><a href="browse3.php">Item Set 2</a></p>
        <h3>Related Items</h3>
        <img class="item-image" data-open="item1" src="https://via.placeholder.com/350?text=ITEM+IMAGE">
        <hr>
        <img class="item-image" data-open="item1" src="https://via.placeholder.com/350?text=ITEM+IMAGE">
        <hr>
        <img class="item-image" data-open="item1" src="https://via.placeholder.com/350?text=ITEM+IMAGE">
        <hr>
        <img class="item-image" data-open="item1" src="https://via.placeholder.com/350?text=ITEM+IMAGE">
    </div>
    <div class="reveal" id="item1" data-reveal>
    <h2><a href="item.php">Item Title</a></h2>
    <a href="item.php"><img src="https://via.placeholder.com/650x350?text=ITEM+IMAGE"></a>
    <p class="lead">Item Description. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores expedita quisquam, obcaecati assumenda vel adipisci tempora autem quaerat quidem magni. <a href="item.php">Learn more&rarr;</a></p>
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
    <div class="medium-2 medium-offset-10 cell">
        <a class="next" href="item.php">Next Artifact</a>
    </div>

</div>

<?php include('footer.php'); ?>