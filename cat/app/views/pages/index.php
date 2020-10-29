<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="jumbotron jumbotron-fluid">
  <?php require APPROOT . '/views/inc/banner.php'; ?>   
    <div class="container">
      <h1 class="display-3"><?php echo $data['title']; ?></h1>
      <p class="lead"><?php echo $data['description']; ?></p>
    </div>
  </div>
   
<?php require APPROOT . '/views/inc/footer.php'; ?>