<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">


<?php require APPROOT . '/views/inc/post1.php'; ?>
         
  <?php flash('post_message'); ?>
  <div class="row mb-3">
    <div class="col-md-6">
   
    <h1>your shares</h1>
    </div>
    <div class="col-md-6">
      <a class="btn btn-primary pull-right" href="<?php echo URLROOT; ?>/posts/add"><i class="fa fa-pencil" aria-hidden="true"></i> Add Post</a>
    </div>
  </div>
  <?php foreach($data['posts'] as $post) : ?>
    <div class="card card-body mb-3">
      <h4 class="card-title"><?php echo $post->title; ?></h4>
      <div class="bg-light p-2 mb-3">
        Written by <?php echo $post->name; ?> on <?php echo $post->created_at; ?>
      </div>
      <p class="card-text"><?php echo $post->body; ?></p>
      <a class="btn btn-dark" href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>">More</a>
    </div>
      <?php endforeach; ?>
      </div>
      <section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="../public/css/images/cat1.jpg" alt="" /></span>
						<div class="content">
							<h2>Wanna know the last News</h2>
							<p>Subscribe to our Newsletter !!!</p>
							<ul class="actions">
								<li>
									<a href="http://eepurl.com/hh9SET" class="button alt">Subscribe</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="../public/css/images/cat2.jpg" alt="" /></span>
						<div class="content">
							<h2>In love with Cat pictures</h2>
							<p>Visit our Galery.</p>
							<ul class="actions">
								<li>
									<a href="https://mailchi.mp/17742c11df4e/images" class="button alt">Galery</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>
      <div class="image-grid">
						<a href="#" class="image"><img src="../public/css/images/cat3.jpg" alt="" /></a>
						<a href="#" class="image"><img src="../public/css/images/cat4.jpg" alt="" /></a>
						<a href="#" class="image"><img src="../public/css/images/cat5.jpg" alt="" /></a>
						<a href="#" class="image"><img src="../public/css/images/cat6.jpg" alt="" /></a>
						<a href="#" class="image"><img src="../public/css/images/cat7.jpg" alt="" /></a>
						<a href="#" class="image"><img src="../public/css/images/cat11.jpg" alt="" /></a>
						<a href="#" class="image"><img src="../public/css/images/cat14.jpg" alt="" /></a>
						<a href="#" class="image"><img src="../public/css/images/cat10.jpg" alt="" /></a>
					</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>