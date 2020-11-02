<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
    <h3>Password reset</h3><br>
                <p>Please enter the email address associated with your user account. A verification code will be sent. When you receive it, you will be able to choose a new password</p>
      <form action="<?php echo URLROOT; ?>/users/register" method="post">
       
        <div class="form-group">
            <label>Email Address:<sup>*</sup></label>
            <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>    

        <div class="form-row">
          <div class="col">
            <input type="submit" class="btn btn-success btn-block" name="submitButton" value="Reset email">
          </div>
          <div class="col">
            <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
          </div>
        </div>
      </form>
    </div>
    </div>
  </div>
  </div>
  
  <?php require APPROOT . '/views/inc/footer.php'; ?>
    