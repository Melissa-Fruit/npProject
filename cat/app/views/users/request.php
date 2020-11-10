<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">

    <div class="col-md-6 mx-auto">

      <div class="card card-body bg-light mt-5">

        <?php flash('register_success'); ?>
        <h2>Lost Password</h2>
        <p>Please fill in .</p>
        <form action="<?php echo URLROOT; ?>/users/request" method="post">
         
          <div class="form-group">
              <label>Email:<sup>*</sup></label>
              <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>    
         
          <div class="form-row">
            <div class="col">
              <input type="submit" class="btn btn-success btn-block" value="Request">
          </div>

            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">No account? Register</a>
            </div>
            <div class="col">
            <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
            <img id ="images" src="../public/css/images/miniCat.jpg" alt="" />
                
           
            </div>
          
        </form>
        </div>



      </div>

    </div>

</div>
  
<?php require APPROOT . '/views/inc/footer.php'; ?>
