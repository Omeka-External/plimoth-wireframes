<?php include('header.php'); ?>

<div class="reveal" id="item1" data-reveal>
  <h2><a href="item.php">Item Title</a></h2>
  <a href="item.php"><img src="https://via.placeholder.com/650x350?text=ITEM+IMAGE"></a>
  <p class="lead">Item Description. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores expedita quisquam, obcaecati assumenda vel adipisci tempora autem quaerat quidem magni.</p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<img class="item-image" data-open="item1" src="https://via.placeholder.com/250?text=ITEM+IMAGE">

<?php include('footer.php'); ?>