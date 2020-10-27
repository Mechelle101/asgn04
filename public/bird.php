
<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('images/tufted-titmouse.jpeg') ?>" />
      <h2>Our Inventory of Birds</h2>
      <p>Choose the bird you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Behavior</th>
        <th>Conservation Id</th>
        <th>Backyard Tips</th>
      </tr>

      <?php
 $parser = new ParseCSV(PRIVATE_PATH . 'tufted-titmouse.jpeg');
 $bird_array = $parser->parse();

 print_r($bird_array);

       $args = [
         'common_name' => 'Carolina Wren', 
         'Habitat' => 'Open Woodlands', 
         'Food' => 'Insects',
         'Nest Placement' => 'Cavity',
         'Behavior' => 'Ground Forager',
         'Conservation Id' => 1,
         'Backyard Tips' => 'Carolina Wren visits suet-filled feeders during winter',
       ];
    
      ?>
// need a foreach, create an array called bird array
// creating a new instance of bird
      <?php foreach($bird_array as $args) { ?>
        <?php $bird = new Bird($args); ?>

// conservation_id echo $bird->conservation()

      <tr>
        <td><?php echo h($bird->common_name); ?></td>
        <td><?php echo h($bird->habitat); ?></td>
        <td><?php echo h($bird->food); ?></td>
        <td><?php echo h($bird->nest_placement); ?></td>
        <td><?php echo h($bird->behavior); ?></td>
        <td><?php echo h($bird->conservation_id); ?></td>
        <td><?php echo h($bird->backyard_tips); ?></td>
        <td><?php echo h($bird->conservation()); ?></td>
      </tr>
        <?php } ?>

    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
