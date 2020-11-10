<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">

          <h3>Veterinary Care For Cats A Vital Part Of Animal Welfare</h3>
          <img id ="images" src="../public/css/images/miniCat.jpg" alt="" />
          <p>There's no doubt that we love our pets very much. However, a local research has revealed a shocking figure regarding cat care, and it does raise a critical question: Is the welfare of Malaysian cats being taken care of?

The study shows that 40% of cat owners in Malaysia have never taken their pet to the vet.

This gap usually starts at the early stages of a cat's life, with only 10% of owners taking their new kitten to the vet. And yet, veterinarian visits during kittenhood is one of the key elements in providing them a great start to life.

Getting your kitten familiar with veterinary visits can lead to a more pleasant experience for both the owner and the cat in the years to come.

Prevention of diseases

Taking cats to the vet and starting when they are kittens is critical in the prevention of diseases.

Preventative healthcare, which includes prevention, early detection and reducing the impact of disease, is essential for cats’ health and well-being.

This becomes more essential as the discovery of signs indicating a health decline in cats can be quite challenging even for seasoned cat owners.</p>
 

 
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