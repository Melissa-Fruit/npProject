<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container">
   <!-- <a class="navbar-brand" href="#"><?//php echo SITENAME; ?></a>-->
    <img src="../public/css/images/catnewsLogo.png" title="logo" alt="logo catnews">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/cat">Cat Breed</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['user_id'])) : ?>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Vet</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Vital</a>
                <a class="p-2 text-white" href="<?php echo URLROOT; ?>/posts/index">Welfare</a>
                <a class="p-2 text-white" href="https://mailchi.mp/17742c11df4e/images">Galery</a>
                <a class="p-2 text-white" href="http://eepurl.com/hh9SET">Newsletter</a>
                
              
            </nav>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        </li>
      <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
        </li>
      <?php endif; ?>
      </ul>
    </div>
  </div>
    
</nav>
